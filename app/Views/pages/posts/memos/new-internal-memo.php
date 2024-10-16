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

<link rel="stylesheet" href="/assets/js/richtexteditor/res/style.css" />
<link rel="stylesheet" href="/assets/js/richtexteditor/rte_theme_default.css" />
<link href="/assets/js/richtexteditor/rte_theme_default.css" rel="stylesheet" type="text/css"/>
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
                        <li class="breadcrumb-item"><a href="<?= site_url('/memos') ?>">Memo Board</a></li>
                        <li class="breadcrumb-item active">New Internal Memo</li>
                    </ol>
                </div>
                <h4 class="page-title">New Internal Memo</h4>
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
                            <h4 class="header-title mt-2 mb-4">Create Internal Memo Form</h4>
                        </div>
                        <div class="col-lg-4">
                            <a href="<?= site_url('/memos') ?>" type="button" class="btn btn-success float-right">Go
                                Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" id="new-internal-memo-form" novalidate>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="ref-no">Reference No</label><span style="color: red"> *</span>
                                    <input readonly
                                           value="<?= $authDirectorate['dpt_ref_no'] ?? null ?>/<?= date('Y') ?>/<?= $counter ?? rand(9, 9999) ?>"
                                           placeholder="Reference No." type="text" class="form-control" id="ref-no"
                                           name="p_ref_no" required>
                                    <div class="invalid-feedback">
                                        Please enter a reference number.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="positions">To</label><span style="color: red"> *</span>
                                    <select class="form-control select2-multiple" id="positions" name="recipients[]"
                                            data-toggle="select2" multiple="multiple" required style="min-height: 38px">
                                        <?php foreach ($department_employees as $department => $employees): ?>
                                            <?php if (!empty($employees)): ?>
                                                <optgroup label="<?= $department ?>">
                                                    <?php foreach ($employees as $employee): ?>
                                                        <option value="<?= $employee['user']['user_id'] ?>">
                                                            <?= $employee['position']['pos_name'] . ' (' . $employee['user']['user_name'] . ')' ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select all applicable offices.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label><span style="color: red"> *</span>
                                    <input placeholder="Subject" type="text" id="subject" class="form-control"
                                           name="p_subject" required>
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
                                    <div id="rich-editor" class="form-control body" style="height: 300px;"></div>
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
                                        <h3>Drop all relevant attachments here...</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="reviewed-by">Through</label><span style="color: red"> *</span>
                                    <select class="form-control select2-multiple" id="reviewed-by"
                                            name="p_reviewers_id[]"
                                            data-toggle="select2" multiple="multiple" required>
                                        <option value="">Select user</option>
                                        <?php foreach ($hods as $department => $employees): ?>
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
                                        Please select the reviewers.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
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
                      <textarea name="" id="contentWrapper" style="display: none;"  cols="30" rows="10"></textarea>
                        <div class="row g-3">
                            <div class="col-lg-12 offset-lg-12">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-primary btn-block" id="submitMemo">Submit
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
<?= view('pages/posts/memos/_memo-scripts.php') ?>
<script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="/assets/libs/dropify/js/dropify.min.js"></script>
<script type="text/javascript" src="/assets/js/richtexteditor/rte.js"></script>
<script src="/assets/js/richtexteditor/plugins/all_plugins.js"></script>
<script>

  var editor1 = new RichTextEditor("#rich-editor");
  //editor1.setHTMLCode("Type your memo here...");

  editor1.attachEvent("change", function () {
    document.getElementById("contentWrapper").value = editor1.getHTMLCode()
  });

 /* $(document).ready(function(){
    editor1.attachEvent("change", function () {
      var textCount = editor1.getPlainText().trim().length;
      document.title = "textCount:" + textCount;
    });
    $('#rich-editor').on('blur', function(e){
      e.preventDefault();
      let text = editor1.getText();
      console.log(text);
      //$('#contentWrapper').val($(this).val())
      //alert('Leaving...')
    });
  });*/
</script>
<?= $this->endSection(); ?>
