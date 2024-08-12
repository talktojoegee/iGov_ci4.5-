<?= $this->extend('layouts/master'); ?>
<?= $this->section('content'); ?>
<?php
$permissions = session()->get('permissions');
$memo_permission = \App\Enums\Permissions::MEMO->value;
$memo_approval_permission = \App\Enums\Permissions::MEMO_APPROVAL->value;
?>
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
                        <li class="breadcrumb-item active">View Memo</li>
                    </ol>
                </div>
                <h4 class="page-title">View Memo</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row d-print-none">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-11">
                        <div class="text-lg-right">
                            <a href="javascript:window.print()" type="button"
                               class="btn btn-success waves-effect waves-light mr-2"><i class="mdi mdi-printer"></i></a>
                            <?php if ($memo['p_by'] == session()->user_id && $memo['p_status'] == 0 && in_array($memo_permission, $permissions)): ?>
                                <a href="<?= site_url('/edit-memo/') . $memo['p_id'] ?>" type="button"
                                   class="btn btn-success">Edit</a>
                            <?php endif; ?>
                            <?php if ($memo['p_signed_by'] == session()->user_id && $memo['p_status'] == 0): ?>
                                <button onclick="signDocument(<?= $memo['p_id'] ?>)" type="button"
                                        class="btn btn-success mr-1">Sign
                                </button>
                                <button onclick="declineDocument(<?= $memo['p_id'] ?>)" type="button"
                                        class="btn btn-danger mr-1">Decline
                                </button>
                            <?php endif; ?>
                            <a href="<?= site_url('/memos') ?>" type="button" class="btn btn-success">Go Back</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div><!-- end col-->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card d-block">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="auth-logo" style="margin: 0 auto">
                            <div class="logo logo-dark">
                <span class="logo-lg">
                  <img src="/uploads/organization/<?= $memo['organization']['org_logo'] ?>" height="100">
                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center" style="margin: 0 auto;">
                            <h3 class="mt-1"><?= $memo['organization']['org_name'] ?></h3>
                            <h5 class="mt-1"><?= $memo['organization']['org_address'] ?></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center" style="margin: 0 auto;">
                            <h3 class="text-uppercase">
                                <u>Memo</u>
                            </h3>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="float-left">
                                <h5 class="font-size-14">
                                    Reference No: <?= $memo['p_ref_no'] ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="float-right">
                                <h5 class="font-size-14">
                                    <?php
                                    $date = date_create($memo['p_date']);
                                    echo date_format($date, "d F Y");
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="float-left">
                                <h5 class="font-size-14 mb-0">From:</h5>
                                <?= esc($memo['written_by']['user_name']) ?>
                                (<?= esc($memo['written_by']['position']['pos_name']) ?>,
                                <?= esc($memo['written_by']['department']['dpt_name'] ?? 'N/A') ?>)
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="float-left">
                                <h5 class="font-size-14 mb-0">To:</h5>
                                <?php if (!empty($memo['recipients'])): ?>
                                    <?php foreach ($memo['recipients'] as $recipient): ?>
                                        <?= $recipient['user_name'] ?> - <?= $recipient['pos_name'] ?> (<?= $recipient['dpt_name'] ?>)
                                        <br>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <?php foreach ($memo['external_recipients'] as $external_recipient): ?>
                                        <?= $external_recipient ?> <br>
                                    <?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="float-left">
                                <h5 class="font-size-14 mb-0">Through:</h5>
                                <?php if (!empty($memo['reviewers'])): ?>
                                    <?php foreach ($memo['reviewers'] as $reviewer): ?>
                                        <?= $reviewer['user_name'] ?> - <?= $reviewer['pos_name'] ?> (<?= $reviewer['dpt_name'] ?>)
                                        <br>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p>N/A</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <h3 class="title text-center text-uppercase"><u><?= $memo['p_subject'] ?></u></h3>
                            <p>
                                <?= $memo['p_body'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 text-center">
                            <p class="mt-2 mb-1 text-muted">Signed By</p>
                            <?php if ($memo['p_status'] == 2 && $memo['p_signature']): ?>
                                <img src="/uploads/signatures/<?= $memo['p_signature'] ?>" height="80">
                                <h5 class="font-size-14">
                                    <?= $memo['signed_by']['user_name'] ?? '' ?> <br>
                                    (<?= $memo['signed_by']['position']['pos_name'] ?? '' ?>
                                    , <?= $memo['signed_by']['department']['dpt_name'] ?? '' ?>)
                                </h5>
                            <?php elseif ($memo['p_status'] == 4): ?>
                                <p class="mt-2 mb-1 text-muted">This memo is rejected</p>
                            <?php else: ?>
                                <p class="mt-2 mb-1 text-muted">This memo is unsigned</p>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-print-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-16 mb-3">Attachments</h5>
                    <?php if (!empty($memo['attachments'])):
                        foreach ($memo['attachments'] as $attachment):?>
                            <div class="card mb-1 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-sm">
                        <span class="avatar-title badge-soft-primary text-primary rounded">
                           <?php echo strtoupper(substr($attachment['pa_link'], strpos($attachment['pa_link'], ".") + 1)); ?>
                        </span>
                                            </div>
                                        </div>
                                        <div class="col pl-0">
                                            <a href="<?= '/uploads/posts/' . $attachment['pa_link']; ?>" target="_blank"
                                               class="mb-0 font-12"><?php
                                                $filename = 'uploads/posts/' . $attachment['pa_link'];
                                                //											$handle = fopen($filename, "r");
                                                //											$contents = fread($handle, filesize($filename));
                                                //echo $filename;
                                                $size = 0;// !file_exists('/uploads/posts/'.$attachment['pa_link']) ? round(filesize($filename)/(1024 * 1024), 2) : 0;
                                                echo $attachment['pa_link'] . '<br>';
                                                //echo $size."MB";
                                                //											fclose($handle);

                                                ?></a>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="<?= '/uploads/posts/' . $attachment['pa_link']; ?>"
                                               download="<?= $attachment['pa_link']; ?>" target="_blank"
                                               class="btn btn-link font-16 text-muted">
                                                <i class="dripicons-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; else: echo "No Attachments"; endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Alert Modal -->
    <div id="loading-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-information h1 text-info"></i>
                        <h4 class="mt-2" id="modalTitle">Sending Verification Code</h4>
                        <p class="mt-3" id="modalText">Please wait while we send you your document signing verification
                            code.</p>
                        <button type="submit" class="btn btn-info" disabled>
                            <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                            Please wait...
                        </button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="standard-modal-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
         aria-hidden="true" gt>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="verify-doc-signing-form" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Token Verification</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="ver-code">Document Signing Verification Code</label>
                                    <input type="password" class="form-control" name="ver_code" id="ver-code" required/>
                                    <div class="invalid-feedback">
                                        Token
                                    </div>
                                    <span class="help-block">
                                        <small>Verify it's you by entering your registered token.</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" onclick="verifyDocumentSigning()" class="btn btn-primary" id="save-btn">
                            Submit
                        </button>
                        <button type="submit" class="btn btn-primary" id="save-btn-loading" hidden disabled>
                            <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                            Please wait...
                        </button>
                    </div>
                    <input type="hidden" id="post-id">
                    <input type="hidden" id="e-signature">
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div id="tokenModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="upload-signature-form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Token Verification </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <h6>Enter your token</h6>
                        <p>Verify it's you by entering your registered token.</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Token <sup class="text-danger">*</sup></label>
                                    <input type="password" id="password" name="password" placeholder="Enter your token"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="confirmSecurityToken" id="save-btn">
                            Verify
                        </button>
                        <button type="submit" class="btn btn-primary" id="save-btn-loading" hidden disabled>
                            <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                            Please wait...
                        </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>
<?= $this->endSection(); ?>
<?= $this->section('extra-scripts'); ?>
<script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="/assets/libs/dropify/js/dropify.min.js"></script>
<?= view('pages/posts/memos/_memo-scripts.php') ?>
<?= view('pages/employee/_employee-scripts.php') ?>
<?= $this->endSection(); ?>

