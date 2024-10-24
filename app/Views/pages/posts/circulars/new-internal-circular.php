<?= $this->extend('layouts/master'); ?>
<?= $this->section('extra-styles'); ?>
<link href="/assets/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
<link href="/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css"/>
<link href="/assets/libs/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css"/>

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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Messaging</a></li>
                        <li class="breadcrumb-item"><a href="<?= site_url('/circulars') ?>">Circular Board</a></li>
                        <li class="breadcrumb-item active">New Internal Circular</li>
                    </ol>
                </div>
                <h4 class="page-title">New Internal Circular</h4>
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
                            <h4 class="header-title mt-2 mb-4">Create Internal Circular Form</h4>
                        </div>
                        <div class="col-lg-4">
                            <a href="<?= site_url('/circulars') ?>" type="button" class="btn btn-success float-right">Go
                                Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" id="new-internal-circular-form" novalidate>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="ref-no">Reference No</label><span style="color: red"> *</span>
                                    <input readonly value="<?= $authDirectorate['dpt_ref_no'] ?? null ?>/<?= date('Y') ?>/<?= $counter ?? rand(9,9999) ?>"  placeholder="Reference No." type="text" class="form-control" id="ref-no" name="p_ref_no" required>
                                    <div class="invalid-feedback">
                                        Please enter a reference number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group" id="department">
                                    <label for="departments">Departments</label><span style="color: red"> *</span>
                                    <select class="form-control select2-multiple" id="departments" data-toggle="select2"
                                            multiple="multiple" data-placeholder="Choose Department ..."
                                            name="p_recipients_id[]" required>
                                        <?php foreach ($departments as $department): ?>
                                            <option value="<?= $department['dpt_id']; ?>"> <?= $department['dpt_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select all applicable departments.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-0">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="all_department"
                                               value="1" id="allDepartment">
                                        <label class="custom-control-label" for="allDepartment">Select All
                                            Departments</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label><span style="color: red"> *</span>
                                    <input placeholder="Subject" type="text" id="subject" class="form-control" name="p_subject" required>
                                    <div class="invalid-feedback">
                                        Please enter a subject.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="snow-editor">Body</label><span style="color: red"> *</span>
                                    <div id="snow-editor" class="form-control body" style="height: 300px;"></div>
                                    <!-- end Snow-editor-->
                                    <div class="invalid-feedback">
                                        Please enter a body.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div id="myId" class="dropzone">
                                    <div class="dz-message needsclick">
                                        <i class="hi text-muted dripicons-cloud-upload"></i>
                                        <h3>Drop all other relevant attachments here...</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="signed-by">From (Signatory)</label><span style="color: red"> *</span>
                                    <select class="form-control" id="signed-by" name="p_signed_by" data-toggle="select2"
                                            required>
                                        <option value="">Select user</option>
                                        <?php foreach ($department_hods as $department => $employees): ?>
                                            <?php if (!empty($employees)): ?>
                                                <optgroup label="<?= $department ?>">
                                                    <?php foreach ($employees as $employee): ?>
                                                        <option value="<?= $employee['user_id'] ?>">
                                                            <?= $employee['pos_name'] . ' (' . $employee['user_name'] . ')' ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select the signer.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-12 offset-lg-12">
                                <div class="form-group mt-2">
                                    <button type="submit" id="submitCircular" class="btn btn-primary btn-block">Submit</button>
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
<?= view('pages/posts/circulars/_circular-scripts.php') ?>
<script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="/assets/libs/dropify/js/dropify.min.js"></script>
<script>
    $("#allDepartment").click(function () {
        if ($("#allDepartment").is(':checked')) {
            $("#department").hide();
        } else {
            $("#department").show();
        }
    });
</script>
<?= $this->endSection(); ?>
