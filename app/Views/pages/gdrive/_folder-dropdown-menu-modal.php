<?php $validation = \Config\Services::validation(); ?>
<div class="btn-group dropdown">
  <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="javascript:void(0);" data-target="#renameFolderModal_<?=$folder['folder_id'] ?>" data-toggle="modal"><i class="mdi mdi-pencil mr-2 text-muted vertical-middle"></i>Rename</a>
    <a class="dropdown-item" href="/open-folder/<?= $folder['folder_id'] ?>" ><i class="mdi mdi-open mr-2 text-muted vertical-middle"></i>Open</a>
  </div>
</div>
<div id="renameFolderModal_<?=$folder['folder_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-center mt-2 mb-4">
          <h4 class="text-success">Rename Folder</h4>
        </div>
        <form action="<?= site_url('rename-folder') ?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group">
            <label for="">File name <sup class="text-danger">*</sup></label>
            <input type="text" value="<?= $folder['folder'] ?? '' ?>" name="folderName" class="form-control">
            <input type="hidden" name="folder_id" value="<?= $folder['folder_id'] ?>">
            <?php if($validation->getError('folderName')) {?>
              <div class='text-danger mt-2'>
                <?= $error = $validation->getError('folderName'); ?>
              </div>
            <?php }?>
          </div>
          <div class="form-group text-center">
            <button class="btn btn-primary text-white" type="submit">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
