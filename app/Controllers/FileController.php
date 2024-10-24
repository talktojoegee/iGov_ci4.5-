<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Enums\Permissions;
use App\Models\FileModel;
use App\Models\FolderModel;
use App\Models\SharedFile;
use App\Models\UserModel;

class FileController extends BaseController
{
    public function __construct()
    {
        if (session()->get('type') == 1): //employee
            echo view('auth/access_denied');
            exit;
        endif;

        $this->file = new FileModel();
        $this->folder = new FolderModel();
        $this->user = new UserModel();
        $this->sharedfile = new SharedFile();

    }


    public function index()
    {
        if (!$this->_validate_permission(Permissions::G_DRIVE->value)) {
            return view('auth/access_denied');
        }
        $data = [
            'files' => $this->file->getAllMyFiles($this->session->user_id),
            'my_folders' => $this->folder->getAllMyAndPublicFolders($this->session->user_id),
            'folders' => $this->folder->getAllMyAndPublicFolders($this->session->user_id),
            //'folders'=>$this->folder->getAllFolders(),
            'users' => $this->user->getAllUsers(),
            'firstTime' => $this->session->firstTime,
            'username' => $this->session->username
        ];

        return view('pages/gdrive/index', $data);
    }

    public function myFiles()
    {
        $data = [
            'files' => $this->file->getAllMyFiles($this->session->user_id),
            'users' => $this->user->getAllUsers(),
            'folders' => $this->folder->getAllFolders(),
            'firstTime' => $this->session->firstTime,
            'username' => $this->session->username
        ];
        return view('pages/gdrive/my-files', $data);
    }

    public function processAttachmentUploads()
    {
        if ($this->request->getMethod() == 'POST') {
            helper(['form', 'url']);
            $attachment = $this->request->getFile('attachments');
            if ($attachment->isValid()) {
                $extension = $attachment->guessExtension();
                $filename = $attachment->getRandomName(); // uniqid() . time() . '.' . $extension;
                $attachment->move('uploads/posts', $filename);
                $data = [
                    'folder_id' => $this->request->getPost('folder'),
                    'uploaded_by' => $this->session->user_id,
                    'file_name' => $filename,
                    'name' => $this->request->getPost('filename'),
                    'size' => $attachment->getSize(),
                    'slug' => substr(sha1(time()), 32, 40),
                ];
                $this->file->save($data);
                return redirect()->to(base_url('/g-drive'))->with('success', 'File uploaded successfully.');
            } else {
                session()->setFlashdata("error", "<strong>Whoops!</strong> Choose a valid file to upload.");
                return redirect()->to(base_url('/g-drive'));
            }
        }


    }

    public function createFolder()
    {
        if ($this->request->getMethod() == 'POST') {
            helper(['form', 'url']);
          $inputs = $this->validate(
            [
              'folder_name' =>
                ['rules'=> 'required', 'label'=>'Folder name','errors' => [
                  'required' => 'Enter folder name']
                ],
              'parent_folder' =>
                ['rules'=> 'required', 'errors'=>
                  ['required'=>'Choose type']
                ],
              'visibility' => ['rules'=>'required', 'errors'=>['required'=>'Indicate folder visibility']],
            ]);
          if (!$inputs) {
            $data = [
              'files' => $this->file->getAllMyFiles($this->session->user_id),
              'my_folders' => $this->folder->getAllMyAndPublicFolders($this->session->user_id),
              'folders' => $this->folder->getAllMyAndPublicFolders($this->session->user_id),
              'users' => $this->user->getAllUsers(),
              'firstTime' => $this->session->firstTime,
              'username' => $this->session->username,
              'validation' => $this->validator,
            ];
            return view('pages/gdrive/index', $data);

          }else{
            $data = [
              'created_by' => $this->session->user_id,
              'parent_id' => $this->request->getPost('parent_folder'),
              'folder' => $this->request->getPost('folder_name'),
              'visibility' => $this->request->getPost('visibility'),
              'slug' => substr(sha1(time()), 32, 40)
            ];
            $this->folder->save($data);
            return redirect()->to(base_url('/g-drive'))->with('success', 'Folder created successfully.');
          }


        }
    }

    public function openFolder($id)
    {

        $files = $this->file->getFilesByFolderId($id);
        $folders = $this->folder->getAllFolders();
        //$folders = $this->folder->getFolderContentById($id);
        //if(!empty($files) || !empty($folders)){
        $folder = $this->folder->getFolderById($id);
        $data = [
            'files' => $files,
            'folders' => $folders,
            'parent_folder' => $id,
            'users' => $this->user->getAllUsers(),
            'firstTime' => $this->session->firstTime,
            'username' => $this->session->username,
            'folder' => $folder ?? [],
        ];
        //return print_r($data);
        return view('pages/gdrive/view', $data);
        /*}else{
            return "Hello";
        }*/

    }

    public function removeFile($id)
    {
        if (!empty($this->file->where('file_id', $id)->first())) {
            $this->file->where('file_id', $id)->delete();
            return redirect()->to(base_url('/g-drive'))->with('success', 'File deleted successfully.');
        } else {
            return redirect()->to(base_url('/g-drive'))->with('error', 'File could not be deleted.');
        }
    }

    public function shareFileWith()
    {
        if ($this->request->getMethod() == 'POST') {
            helper(['form', 'url']);
            $data = [
                'file_id' => $this->request->getPost('file_id'),
                'shared_by' => $this->session->user_id,
                'shared_with' => $this->request->getPost('user'),
            ];
            $this->sharedfile->save($data);
          $message = "A document was shared with you. Kindly login to access it.";
          $this->send_notification('Document sharing', $message, $this->request->getPost('user'), site_url('g-drive/'), 'click to view');
            return redirect()->to(base_url('/g-drive'))->with('success', 'File shared successfully.');
        }
    }
    public function renameFile()
    {
        if ($this->request->getMethod() == 'POST') {
            helper(['form', 'url']);
          $inputs = $this->validate(
            [
              'fileName' =>
                ['rules'=> 'required', 'label'=>'File name','errors' => [
                  'required' => 'Enter folder name']
                ],
              'file_id' =>
                ['rules'=> 'required', 'errors'=>
                  ['required'=>'']
                ],
            ]);
          if (!$inputs) {
            $data = [
              'files' => $this->file->getAllMyFiles($this->session->user_id),
              'my_folders' => $this->folder->getAllMyAndPublicFolders($this->session->user_id),
              'folders' => $this->folder->getAllMyAndPublicFolders($this->session->user_id),
              'users' => $this->user->getAllUsers(),
              'firstTime' => $this->session->firstTime,
              'username' => $this->session->username,
              'validation' => $this->validator,
            ];
            return view('pages/gdrive/index', $data);

          }else{
            $fileId = $this->request->getPost('file_id');

            $data = [
              'file_id' => $this->request->getPost('file_id'),
              'name' => $this->request->getPost('fileName'),

            ];
            $this->file->update($fileId,$data);
            return redirect()->to(base_url('/g-drive'))->with('success', 'File renamed!');
          }

        }
    }

  public function renameFolder()
  {
    if ($this->request->getMethod() == 'POST') {
      helper(['form', 'url']);
      $inputs = $this->validate(
        [
          'folderName' =>
            ['rules'=> 'required', 'label'=>'Folder name','errors' => [
              'required' => 'Enter folder name']
            ],
          'folder_id' =>
            ['rules'=> 'required', 'errors'=>
              ['required'=>'']
            ],
        ]);
      if (!$inputs) {
        $data = [
          'files' => $this->file->getAllMyFiles($this->session->user_id),
          'my_folders' => $this->folder->getAllMyAndPublicFolders($this->session->user_id),
          'folders' => $this->folder->getAllMyAndPublicFolders($this->session->user_id),
          'users' => $this->user->getAllUsers(),
          'firstTime' => $this->session->firstTime,
          'username' => $this->session->username,
          'validation' => $this->validator,
        ];
        return view('pages/gdrive/index', $data);

      }else{
        $folderId = $this->request->getPost('folder_id');

        $data = [
          'folder_id' => $this->request->getPost('folder_id'),
          'folder' => $this->request->getPost('folderName'),

        ];
        $this->folder->update($folderId,$data);
        return redirect()->to(base_url('/g-drive'))->with('success', 'Folder renamed!');
      }

    }
  }

    public function sharedFileWithMe()
    {
        //return dd($this->file->sharedWithMe($this->session->user_id));
        $data = [
            'files' => $this->file->sharedWithMe($this->session->user_id),
            'users' => $this->user->getAllUsers(),
            'folders' => $this->folder->getAllFolders()
        ];

        return view('pages/gdrive/shared-with-me', $data);
    }

    public function searchGDrive()
    {
        if ($this->request->getMethod() == 'POST') {
            helper(['form', 'url']);
            $search_params = $this->request->getPost('keyword');
            $folders = $this->folder->searchFolders($search_params, $this->session->user_id);
            $files = $this->file->searchFiles($search_params, $this->session->user_id);
            //return dd($files);
            $data = [
                'files' => $files,
                'users' => $this->user->getAllUsers(),
                'folders' => $folders,
                'keyword' => $search_params,
                'firstTime' => $this->session->firstTime,
                'username' => $this->session->username
            ];
            return view('pages/gdrive/search', $data);
        }
    }
}
