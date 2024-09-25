<?php
echo view('templates/_header.php');
$type = session()->get('type');
$permissions = session()->get('permissions');
$g_can_send_to_dg_permission = \App\Enums\Permissions::CAN_SEND_TO_DG->value;
?>

<?= $this->extend('layouts/master'); ?>
<?= $this->section('extra-styles'); ?>
    <link href="/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css"/>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">e-Office</a></li>
                            <li class="breadcrumb-item"><a href="<?= site_url('/g-docs') ?>">G-Docs</a></li>
                            <li class="breadcrumb-item active">New Document Upload</li>
                        </ol>
                    </div>
                    <h4 class="page-title">New Document Upload</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="header-title mt-2 mb-4">Document Upload Form</h4>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?= site_url('/g-docs') ?>" type="button" class="btn btn-success float-right">
                                    Go Back
                                </a>
                            </div>
                        </div>
                        <form class="needs-validation" id="new-document-upload-form" novalidate>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="ref-no">Reference No</label><span
                                                        style="color: red"> *</span>
                                                <input placeholder="Reference No." type="text" class="form-control"
                                                       id="ref-no" name="g_doc_ref" required>
                                                <div class="invalid-feedback">
                                                    Please enter a reference number.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="title">Title</label><span style="color: red"> *</span>
                                                <input placeholder="Title" type="text" id="title"
                                                       class="form-control" name="g_doc_title" required>
                                                <div class="invalid-feedback">
                                                    Please enter a subject.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="comment">Comment</label><span style="color: red"> *</span>
                                                <textarea name="g_doc_comment" id="comment" rows="10"
                                                          class="form-control" required></textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a comment.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="authorizers">Authorizers</label><span
                                                        style="color: red"> *</span>
                                                <select class="form-control select2-multiple" id="authorizers"
                                                        name="authorizers[]"
                                                        data-toggle="select2" multiple="multiple" required>
                                                    <option value="">Select authorizers</option>
                                                    <?php foreach ($hods as $department => $employees): ?>
                                                        <?php if (!empty($employees)): ?>
                                                            <optgroup label="<?= $department ?>">
                                                                <?php foreach ($employees as $employee): ?>

                                                                  <?php if(($employee['employee_position_id'] == 11 ) && (in_array($g_can_send_to_dg_permission, $permissions ?? [])) ): ?>
                                                                      <option value="<?= $employee['user_id'] ?>">
                                                                          <?= $employee['pos_name'] . ' (' . $employee['user_name'] . ')' ?>
                                                                      </option>
                                                                  <?php endif; ?>

                                                                <?php endforeach; ?>
                                                            </optgroup>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select the reviewers.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--upload section-->
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="file">PDF Upload</label>
                                                <div class="form-control-wrap">
                                                    <input
                                                            id="file"
                                                            type="file"
                                                            data-plugins="dropify"
                                                            name="file"
                                                            data-allowed-file-extensions="pdf"
                                                            data-max-file-size="3M"
                                                            accept=".pdf"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-lg-12 offset-lg-12">
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary btn-block"
                                                id="submitDocumentUpload">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>

<?= $this->section('extra-scripts'); ?>
    <script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="/assets/libs/dropify/js/dropify.min.js"></script>

    <script src="/assets/js/pages/form-fileuploads.init.js"></script>
<?= view('pages/g-doc/_g-doc-scripts.php') ?>
<?= $this->endSection(); ?>
