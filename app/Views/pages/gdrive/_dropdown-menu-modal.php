<?php $validation = \Config\Services::validation(); ?>
<div class="btn-group dropdown">
  <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="javascript:void(0);" data-target="#shareWithModal_<?=$file['file_id'] ?>" data-toggle="modal"><i class="mdi mdi-share-variant mr-2 text-muted vertical-middle"></i>Share with</a>
    <a class="dropdown-item" href="javascript:void(0);" data-target="#renameModal_<?=$file['file_id'] ?>" data-toggle="modal"><i class="mdi mdi-pencil mr-2 text-muted vertical-middle"></i>Rename</a>
    <a class="dropdown-item" href="/uploads/posts/<?= $file['file_name'] ?>" target="_blank"><i class="mdi mdi-download mr-2 text-muted vertical-middle"></i>Download</a>
    <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#removeFileModal_<?=$file['file_id'] ?>"><i class="mdi mdi-delete mr-2 text-muted vertical-middle"></i>Remove</a>
  </div>
</div>
<div id="removeFileModal_<?=$file['file_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-center mt-2 mb-4">
          <h4 class="text-danger">Are You Sure?</h4>
        </div>
        <p>This action cannot be undone. Are you sure you want to remove <strong><?= $file['name'] ?></strong> ? </p>
        <div class="form-group text-center">
          <a class="btn btn-danger text-white" href="<?= site_url('/remove-file/'.$file['file_id']) ?>">Yes, proceed.</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="shareWithModal_<?=$file['file_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-center mt-2 mb-4">
          <h4 class="text-success">Share with</h4>
        </div>
        <form action="<?= site_url('share-file-with') ?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group">
            <label for="">User</label>
            <select name="user" id="user"
                    class="form-control">
              <option selected disabled>--Select user--</option>
              <?php foreach($users as $user): ?>
                <option value="<?= $user['user_id'] ?>"><?= $user['user_name'] ?></option>
              <?php endforeach; ?>
            </select>
            <input type="hidden" name="file_id" value="<?= $file['file_id'] ?>">
          </div>
          <div class="form-group text-center">
            <button class="btn btn-primary text-white" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="renameModal_<?=$file['file_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-center mt-2 mb-4">
          <h4 class="text-success">Rename File</h4>
        </div>
        <form action="<?= site_url('rename-file') ?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group">
            <label for="">File name <sup class="text-danger">*</sup></label>
            <input type="text" value="<?= $file['name'] ?? '' ?>" name="fileName" class="form-control">
            <input type="hidden" name="file_id" value="<?= $file['file_id'] ?>">
            <?php if($validation->getError('fileName')) {?>
              <div class='text-danger mt-2'>
                <?= $error = $validation->getError('fileName'); ?>
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
