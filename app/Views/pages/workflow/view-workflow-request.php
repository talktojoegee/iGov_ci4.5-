<?= $this->extend('layouts/master'); ?>

<?= $this->section('extra-styles') ?>
<link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/assets/libs/owl.carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/libs/owl.carousel/assets/owl.theme.default.min.css">
<?= $this->endsection() ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
                        <li class="breadcrumb-item"><a href="<?= site_url('/workflow-requests')?>">Workflow Requests</a></li>
                        <li class="breadcrumb-item active">Workflow Request Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Workflow Request Details</h4>
            </div>
        </div>
    </div>
  <?php if(count($requests) > 0): ?>
    <!-- Request trail start -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="modal-header">

            <div class="modal-title text-uppercase">Request Trail
            </div>
          </div>
          <div class="card-body">
            <div class="hori-timeline">
              <div class="owl-carousel owl-theme navs-carousel events owl-loaded owl-drag"
                   id="timeline-carousel">
                <div class="owl-stage-outer">
                  <div class="owl-stage"
                       style="transform: translate3d(-587px, 0px, 0px); transition: all 0.25s ease 0s; width: 1761px;">
                    <div class="owl-item" style="width: 293.5px;">
                      <div class="item event-list">
                        <div>
                          <div class="event-date">
                            <div class="text-primary mb-1">Submitted By</div>
                            <h5 class="mb-4">
                              <?= $requested_by->employee_f_name ?? '' ?> <?= $requested_by->employee_l_name ?? '' ?> <?= $requested_by->employee_o_name ?? '' ?>
                            </h5>
                          </div>
                          <div class="d-flex justify-content-center">
                            <img src="/assets/images/users/<?= $requested_by->employee_avatar ?? 'avatar.png' ?>"
                                 style="height: 64px; width: 64px;" alt=""
                                 class="rounded-circle avatar-sm">
                            <i class="bx bx-right-arrow-circle font-size-22"
                               style="margin-top: 15px; margin-left: 10px;"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php foreach($requests as $key => $auth): ?>
                      <?php $pendStatus = $auth->rc_status ?>
                      <?php $currentDeskId = $auth->rc_emp_id ?>
                      <?php if($key+1 ==  count($requests) ): ?>
                        <div class="owl-item " style="width: 293.5px;">
                          <div class="item event-list <?=  $auth->rc_status == 0 ? 'active' : null ?>">
                            <div>
                              <div class="event-date">
                                <div class="text-primary mb-1"><?= date('d M, Y h:ia', strtotime($auth->created_at)) ?></div>
                                <h5 class="mb-4">
                                  <?= $auth->employee_f_name ?? '' ?> <?= $auth->employee_l_name ?? '' ?> <?= $auth->employee_o_name ?? '' ?>
                                  <br>
                                  <small>( <?= $auth->pos_name ?? '' ?>, <?= $auth->dpt_name ?? '' ?>)</small>
                                </h5>
                              </div>
                              <div class="event-down-icon">
                                <?php if($auth->rc_status == 0) :?>
                                  <i class="bx bxs-hourglass-top h1 text-secondary down-arrow-icon"></i>
                                  <?php $pendingId = $auth->rc_id ?? 0 ?>

                                <?php elseif($auth->rc_status == 1) : ?>
                                  <i class="bx bx-check-circle h1 text-success down-arrow-icon"></i>
                                <?php else : ?>
                                  <i class="bx bx-x-circle h1 text-warning down-arrow-icon"></i>
                                <?php endif; ?>
                              </div>
                              <div class="d-flex justify-content-center">
                                <img src="/assets/images/users/<?= $auth->employee_avatar ?? 'avatar.png' ?>"
                                     style="height: 64px; width: 64px;" alt=""
                                     class="rounded-circle avatar-sm">
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php else : ?>
                        <div class="owl-item " style="width: 293.5px;">
                          <div class="item event-list">
                            <div>
                              <div class="event-date">
                                <div class="text-primary mb-1"> <?= date('d M, Y h:ia', strtotime($auth->created_at)) ?></div>
                                <h5 class="mb-4">
                                  <?= $auth->employee_f_name ?? '' ?> <?= $auth->employee_l_name ?? '' ?> <?= $auth->employee_o_name ?? '' ?>
                                  <br>
                                  <small>( <?= $auth->pos_name ?? '' ?>, <?= $auth->dpt_name ?? '' ?>)</small>
                                </h5>
                              </div>
                              <div class="event-down-icon">
                                <?php if($auth->rc_status == 0): ?>
                                  <i class="bx bxs-hourglass-top h1 text-secondary down-arrow-icon"></i>
                                  <?php $pendingId = $auth->rc_id ?>
                                <?php elseif($auth->rc_status == 1): ?>
                                  <i class="bx bx-check-circle h1 text-success down-arrow-icon"></i>
                                <?php else: ?>
                                  <i class="bx bx-x-circle h1 text-warning down-arrow-icon"></i>
                                <?php endif; ?>
                              </div>
                              <div class="d-flex justify-content-center">
                                <img src="/assets/images/users/avatar.png"
                                     style="height: 64px; width: 64px;" alt=""
                                     class="rounded-circle avatar-sm">
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endif; ?>
                    <?php endforeach; ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end card -->
      </div>
    </div>
    <!-- Request trail end -->
  <?php endif; ?>
  <div class="row">

    <div class="col-lg-12 col-md-12">
      <div class=" d-flex justify-content-end">
        <div class="btn-group">

          <?php if(($workflow_request->request_status == 0) && ($workflow_request->requested_by == $empId) && ($pendingRequestStatus)): ?>
            <button data-toggle="modal" data-target="#reportModal" type="button" class="btn btn-sm btn-success ">Request for Approval</button>
          <?php endif; ?>

          <?php if(count($requests) > 0): ?>
            <?php if( ($currentDeskId == $empId) && ($workflow_request->request_status ==  0) ) : ?>
              <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#approvalModal"> Approve  </button>
              <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#declineModal">  Decline</button>
            <?php endif; ?>

          <?php endif; ?>
          <a href="<?=site_url('/workflow-requests')?>" type="button" class="btn btn-sm btn-primary ">Go Back</a>
        </div>

      </div>
    </div>


  </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
              <h4 class="header-title mt-2 modal-header mb-0">Workflow Request Details</h4>
              <div class="card-body">
                  <div class="row">
                      <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-12">
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

                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                  <div class="col-md-8 col-lg-8">
                    <div class="card d-block">
                      <div class="card-body">

                        <!-- project title-->
                        <h3 class="mt-0 font-20">
                          <?= $workflow_request->request_title ?? '' ?>
                        </h3>
                        <?php if($workflow_request->request_status == 0): ?>
                          <div class="badge badge-warning text-white mb-3">Pending</div>
                        <?php elseif ($workflow_request->request_status == 1) : ?>
                          <div class="badge badge-success mb-3">Approved</div>
                        <?php elseif ($workflow_request->request_status == 2): ?>
                          <div class="badge badge-danger mb-3">Declined</div>
                        <?php endif; ?>
                        <h5>Overview:</h5>

                        <?= $workflow_request->request_description ?? '' ?>

                        <div class="row">
                          <div class="col-md-4">
                            <div class="mb-4">
                              <h5> <i class="fe-calendar"></i> Date</h5>
                              <p><?= date('d M, Y', strtotime($workflow_request->created_at)) ?></p>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-4">
                              <h5> <i class="fe-credit-card"></i> Amount</h5>
                              <p>  <?=  env('APP_CURRENCY').''.number_format($workflow_request->amount,2) ?></p>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-4">
                              <h5> <i class="fe-shield"></i> Type</h5>
                              <p><?= $workflow_request->workflow_type_name ?></p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-xl-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-3">Supporting Document(s)</h5>
                        <?php foreach($workflow_attachments as $attachment): ?>
                          <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <div class="avatar-sm">
                                        <span class="avatar-title badge-soft-primary text-primary rounded">
                                            ZIP
                                        </span>
                                  </div>
                                </div>
                                <div class="col pl-0">
                                  <a href="/uploads/posts/<?= $attachment['attachment'] ?>" target="_blank" class="text-muted font-weight-bold"><?= strlen($attachment['attachment']) > 30 ? substr($attachment['attachment'],0,30).'...' : $attachment['attachment'] ?></a>
                                </div>
                                <div class="col-auto">
                                  <!-- Button -->
                                  <a href="/uploads/posts/<?= $attachment['attachment'] ?>" target="_blank" class="btn btn-link btn-lg text-muted">
                                    <i class="dripicons-download"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>

                      </div>
                    </div>
                  </div>
                </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <!-- project card -->
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 mb-3">Comments</h4>
                    <form action="<?= site_url('/workflow-requests/leave-comment') ?>" method="post">
                        <?= csrf_field() ?>
                        <textarea style="resize:none;" class="form-control form-control-light mb-2" placeholder="Leave comment..." id="comment-box" name="leave_comment" rows="3"></textarea>
                        <div class="text-right">
                            <div class="btn-group mb-2 ml-2">
                                <input type="hidden" name="workflow_comment" value="<?= $workflow_request->workflow_request_id ?>">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>

                    <?php foreach($comments as $comment): ?>
                    <div class="mt-2">
                        <div class="media">
                            <img class="mr-2 avatar-sm rounded-circle" src="/assets/images/users/<?= $comment['employee_avatar'] ?>"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">
                                    <a href="#" class="text-reset"><?= $comment['employee_f_name'] ?> <?= $comment['employee_l_name'] ?> </a> <small class="text-muted"><?= date('d M, Y h:ia', strtotime($comment['created_at'])) ?></small></h5>
                                <?= $comment['comment'] ?>
                                <br/>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="card">
        <h5 class="modal-header pb-1">Request For Approval</h5>
        <div class="card-body">
          <form action="<?= site_url('/request-for-approval') ?>" method="post">
            <div class="form-group">
              <label for="">Choose Authorizing Person</label>
              <input type="hidden" name="type" value="workflow">
              <input type="hidden" name="itemId" value="<?= $workflow_request->workflow_request_id ?>">
              <select name="authPerson" id="" class="form-control" data-toggle="select2" required>

                <?php foreach ($hods as $department => $employees): ?>
                  <?php if (!empty($employees)): ?>
                    <optgroup label="<?= $department ?>">
                      <?php foreach ($employees as $employee): ?>
                        <option value="<?= $employee['user_employee_id'] ?>">
                          <?= $employee['pos_name'] . ' (' . $employee['user_name'] . ')' ?>
                        </option>
                      <?php endforeach; ?>
                    </optgroup>
                  <?php endif; ?>
                <?php endforeach; ?>

              </select>
            </div>
            <div class="form-group">
              <button class="btn btn-block btn-success">Submit Request</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if(count($requests) > 0): ?>
  <?php if(($currentDeskId == $empId) && ($workflow_request->request_status == 0)) : ?>
    <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLabel">Are you sure?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="text-white">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= site_url('/action-request') ?>" method="post" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <p>This action cannot be undone. Are you sure you want to <code>approve</code> this request?</p>
                  </div>
                  <div class="form-group">
                    <label for="">Should your action be marked as final?</label>
                    <select name="final" id="appFinal" class="form-control">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>
                  </div>
                  <div class="form-group nextAuth" id="">
                    <label for="">Next Authorizing Person</label>
                    <select name="authPerson"  class="form-control" data-toggle="select2" required>
                      <?php foreach ($hods as $department => $employees): ?>
                        <?php if (!empty($employees)): ?>
                          <optgroup label="<?= $department ?>">
                            <?php foreach ($employees as $employee): ?>
                              <option value="<?= $employee['user_employee_id'] ?>">
                                <?= $employee['pos_name'] . ' (' . $employee['user_name'] . ')' ?>
                              </option>
                            <?php endforeach; ?>
                          </optgroup>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                  <input type="hidden" name="itemId" value="<?= $workflow_request->workflow_request_id ?>">
                  <input type="hidden" name="requestId" value="<?= $pendingId ?>">
                  <input type="hidden" name="decision" value="approve">
                  <input type="hidden" name="type" value="workflow">
                  <div class="form-group">
                    <div class="btn-group">
                      <button class="btn btn-secondary btn-sm" type="button">Cancel</button>
                      <button class="btn btn-sm btn-primary" type="submit">Yes, proceed</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>

<?php if(count($requests) > 0): ?>
  <?php if(($currentDeskId == $empId) && ($workflow_request->request_status == 0)) : ?>
    <div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLabel">Are you sure?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="text-white">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= site_url('/action-request') ?>" method="post" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <p>This action cannot be undone. Are you sure you want to <code>decline</code> this request?</p>
                  </div>
                  <div class="form-group">
                    <label for="">Should your action be marked as final?</label>
                    <select name="final" id="final" class="form-control">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>
                  </div>
                  <div class="form-group nextAuth" id="">
                    <label for="">Next Authorizing Person</label>
                    <select name="authPerson"  class="form-control" data-toggle="select2" required>
                      <?php foreach ($hods as $department => $employees): ?>
                        <?php if (!empty($employees)): ?>
                          <optgroup label="<?= $department ?>">
                            <?php foreach ($employees as $employee): ?>
                              <option value="<?= $employee['user_employee_id'] ?>">
                                <?= $employee['pos_name'] . ' (' . $employee['user_name'] . ')' ?>
                              </option>
                            <?php endforeach; ?>
                          </optgroup>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                  <input type="hidden" name="itemId" value="<?= $workflow_request->workflow_request_id ?>">
                  <input type="hidden" name="requestId" value="<?= $pendingId ?>">
                  <input type="hidden" name="decision" value="decline">
                  <input type="hidden" name="type" value="workflow">
                  <div class="form-group">
                    <div class="btn-group">
                      <button class="btn btn-secondary btn-sm" type="button">Cancel</button>
                      <button class="btn btn-sm btn-primary" type="submit">Yes, proceed</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>

<?= $this->endSection(); ?>
<?= $this->section('extra-scripts'); ?>
<?= view('pages/program-activities/_request-trail-scripts.php') ?>
<script>
    $(document).ready(function(){
        var quill = new Quill ();
        $("#training-form").on("submit",function(){
          let editor = document.querySelector('#snow-editor');
          let html = editor.children[0].innerHTML;
          $("#hiddenArea").val(html);
        })

      $('#final').on('change',function(e){
        e.preventDefault();
        let val = $(this).val();
        if(parseInt(val) === 1){
          $('.nextAuth').hide();
        }else{
          $('.nextAuth').show();
        }
      })
      $('#appFinal').on('change',function(e){
        e.preventDefault();
        let val = $(this).val();
        if(parseInt(val) === 1){
          $('.nextAuth').hide();
        }else{
          $('.nextAuth').show();
        }
      })

    });
</script>
<?= $this->endSection(); ?>
