<div class="d-flex justify-content-between align-items-center">
    <form class="search-bar col-md-8" method="post" action="<?= site_url('/search-g-drive') ?>">
        <?= csrf_field() ?>
        <div class="position-relative">
            <input type="text" name="keyword" class="form-control form-control-light" placeholder="Search files...">
            <span class="mdi mdi-magnify"></span>
        </div>
    </form>
  <div>
    <a href="<?= site_url('/my-files') ?>" class="btn btn-sm btn-white"><i class="mdi mdi-format-list-bulleted"></i></a>
    <a href="<?= site_url('/g-drive') ?>" class="btn btn-sm btn-white"><i class="mdi mdi-view-grid"></i></a>
    <a href="<?= site_url('shared-with-me') ?>" class="btn btn-sm btn-white"><i class="mdi mdi-information-outline"></i></a>
  </div>
</div>
