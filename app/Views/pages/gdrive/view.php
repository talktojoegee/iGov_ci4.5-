<?= $this->extend('layouts/master'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">GDrive</li>
                    </ol>
                </div>
                <h4 class="page-title">GDrive</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <?php echo view('pages/gdrive/_sidebar'); ?>

                <div class="inbox-rightbar">
                    <?php echo view('pages/gdrive/_search-form') ?>

                    <div class="mt-3">
                        <h5 class="mb-2"><?= $folder['folder'] ?? 'Folder' ?></h5>
                        <?php if(session()->has('error')): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?= session()->get('error') ?>
                            </div>
                        <?php endif; ?>

                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?= session()->get('success') ?>
                            </div>
                        <?php endif; ?>
                        <div class="row mx-n1 no-gutters">
                            <?php foreach($folders as $fold1): ?>
                                <?php if($fold1['parent_id'] == $parent_folder) : ?>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card m-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <img height="32" width="32" src=<?= $fold1['visibility'] == 1 ? '/assets/formats/private-folder.png' : '/assets/formats/folder.png' ?> alt="<?= $fold1['folder'] ?>">
                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-0">
                                                        <a href="/open-folder/<?= $fold1['folder_id'] ?>" class="text-muted font-weight-bold"><?= $fold1['folder'] ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <?php foreach($files as $file): ?>
                                <?php if($file['folder_id'] == $parent_folder) :?>
                                    <?php if(pathinfo($file['file_name'], PATHINFO_EXTENSION) == 'pdf'): ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <img height="32" width="32" src="/assets/formats/pdf.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="javascript:void(0);"  class="text-muted font-weight-bold"><?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div> <!-- end row -->
                                                </div> <!-- end .p-2-->
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div>
                                        </div>
                                    <?php elseif(pathinfo($file['file_name'], PATHINFO_EXTENSION) == 'ppt'): ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded">
                                                        <img height="32" width="32" src="/assets/formats/ppt.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="/uploads/posts/<?= $file['file_name'] ?>" class="text-muted font-weight-bold"> <?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div>
                                        </div>

                                    <?php elseif(pathinfo($file['file_name'], PATHINFO_EXTENSION) == 'doc'): ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <img height="32" width="32" src="/assets/formats/doc.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="/uploads/posts/<?= $file['file_name'] ?>" class="text-muted font-weight-bold"><?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div> <!-- end row -->
                                                </div> <!-- end .p-2-->
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div>
                                        </div>
                                    <?php elseif(pathinfo($file['file_name'], PATHINFO_EXTENSION) == 'docx'): ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <img height="32" width="32" src="/assets/formats/doc.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="/uploads/posts/<?= $file['file_name'] ?>" class="text-muted font-weight-bold"><?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div>
                                        </div>
                                    <?php elseif(pathinfo($file['file_name'], PATHINFO_EXTENSION) == 'jpg'): ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                       <img height="32" width="32" src="/assets/formats/jpg.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="/uploads/posts/<?= $file['file_name'] ?>" class="text-muted font-weight-bold"><?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div> <!-- end row -->
                                                </div> <!-- end .p-2-->
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div> <!-- end col -->
                                        </div>
                                    <?php elseif(pathinfo($file['file_name'], PATHINFO_EXTENSION) == 'jpeg'): ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <img height="32" width="32" src="/assets/formats/jpg.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="/uploads/posts/<?= $file['file_name'] ?>" class="text-muted font-weight-bold"><?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div> <!-- end row -->
                                                </div> <!-- end .p-2-->
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div> <!-- end col -->
                                        </div>

                                    <?php elseif(pathinfo($file['file_name'], PATHINFO_EXTENSION) == 'xlsx'): ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <img height="32" width="32" src="/assets/formats/xls.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="/uploads/posts/<?= $file['file_name'] ?>" class="text-muted font-weight-bold"><?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div> <!-- end row -->
                                                </div> <!-- end .p-2-->
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div>
                                        </div>
                                    <?php elseif(pathinfo($file['file_name'], PATHINFO_EXTENSION) == 'pptx'): ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <img height="32" width="32" src="/assets/formats/ppt.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="/uploads/posts/<?= $file['file_name'] ?>" class="text-muted font-weight-bold"><?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div> <!-- end row -->
                                                </div> <!-- end .p-2-->
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card m-1 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <img height="32" width="32" src="/assets/formats/file.png" alt="<?= $file['file_name'] ?>">
                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="/uploads/posts/<?= $file['file_name'] ?>" class="text-muted font-weight-bold"><?= strlen($file['name']) > 12 ? substr($file['name'],0,12).'...' : $file['name'] ?></a>
                                                            <p class="mb-0 font-13">
                                                                <?php if($file['size'] >= 1073741824):
                                                                    echo number_format($file['size'] / 1073741824, 2) . ' GB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1048576):
                                                                    echo number_format($file['size'] / 1048576, 2) . ' MB';
                                                                    ?>
                                                                <?php elseif($file['size'] >= 1024):
                                                                    echo number_format($file['size'] / 1024, 2) . ' KB';
                                                                    ?>
                                                                <?php elseif($file['size'] > 1):
                                                                    echo $file['size'] . ' bytes';
                                                                    ?>
                                                                <?php elseif($file['size'] == 1):
                                                                    echo $file['size'] . ' byte';
                                                                    ?>
                                                                <?php else:
                                                                    echo '0 bytes';
                                                                    ?>
                                                                <?php endif;  ?>
                                                            </p>
                                                        </div>
                                                    </div> <!-- end row -->
                                                </div> <!-- end .p-2-->
                                              <?php echo view('pages/gdrive/_dropdown-menu-modal', ['file'=>$file]) ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div> <!-- end card-box -->

        </div> <!-- end Col -->
    </div><!-- End row -->

</div> <!-- container -->
<div id="fileUploadModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Upload Attachment</h4>
                <form method="post" action="<?= site_url('/process-upload') ?>" enctype="multipart/form-data" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="">File Name</label>
                        <input type="text" placeholder="File Name" name="filename" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Attachment</label>
                        <input type="file" name="attachments" multiple class="form-control-file">
                        <input type="hidden" name="folder" value="<?= $parent_folder ?>">
                    </div>
                    <hr>
                    <div class="form-group d-flex justify-content-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div id="folderModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Create New Folder</h4>
                <form method="post" action="<?= site_url('/create-folder') ?>" enctype="multipart/form-data" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="">Folder Name</label>
                        <input type="text" placeholder="Folder Name" name="folder_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Parent Folder</label>
                        <select name="parent_folder" id="parent_folder" class="form-control">
                            <option value="0" selected>Default</option>
                            <?php foreach($folders as $folder): ?>
                                <option value="<?= $folder['folder_id'] ?>"><?= $folder['folder'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Visibility</label>
                        <select name="visibility" id="visibility" class="form-control">
                            <option value="1">Private</option>
                            <option value="2">Public</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group d-flex justify-content-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

