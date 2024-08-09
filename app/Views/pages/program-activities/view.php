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

          <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?= session()->get('success') ?>
            </div>
          <?php endif; ?>
          <?php if(session()->has('error')): ?>
            <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?= session()->get('error') ?>
            </div>
          <?php endif; ?>
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Program Details</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Program Detail</h4>
            </div>

        </div>
    </div>

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
                          <img src="/assets/images/users/avatar.png"
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



  <div class="row">
    <div class="col-md-6 col-xl-3">
      <div class="widget-rounded-circle card-box">
        <div class="row">
          <div class="col-6">
            <div class="avatar-lg rounded-circle bg-light">
              <i class="fe-list font-26 avatar-title text-primary"></i>
            </div>
          </div>
          <div class="col-6">
            <div class="text-right">
              <h4 class="text-dark mt-1"><?= env('APP_CURRENCY') ?><span data-plugin="counterup"><?= number_format($program->program_budget  ?? 0) ?></span></h4>
              <p class="text-muted mb-1 text-truncate">Estimated Budget</p>
            </div>
          </div>
        </div> <!-- end row-->
      </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
      <div class="widget-rounded-circle card-box">
        <div class="row">
          <div class="col-6">
            <div class="avatar-lg rounded-circle bg-light">
              <i class="fe-check-square font-26 avatar-title text-success"></i>
            </div>
          </div>
          <div class="col-6">
            <div class="text-right">
              <h4 class="text-dark mt-1"><span data-plugin="counterup">0</span></h4>
              <p class="text-muted mb-1 text-truncate">Expenses</p>
            </div>
          </div>
        </div> <!-- end row-->
      </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
      <div class="widget-rounded-circle card-box">
        <div class="row">
          <div class="col-6">
            <div class="avatar-lg rounded-circle bg-light">
              <i class="fe-users font-26 avatar-title text-info"></i>
            </div>
          </div>
          <div class="col-6">
            <div class="text-right">
              <h4 class="text-dark mt-1"><span data-plugin="counterup"><?= count($participants ) ?></span></h4>
              <p class="text-muted mb-1 text-truncate">Team Size</p>
            </div>
          </div>
        </div> <!-- end row-->
      </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
      <div class="widget-rounded-circle card-box">
        <div class="row">
          <div class="col-6">
            <div class="avatar-lg rounded-circle bg-light">
              <i class="fe-clock font-26 avatar-title text-warning"></i>
            </div>
          </div>
          <div class="col-6">
            <div class="text-right">
              <h4 class="text-dark mt-1"><span data-plugin="counterup"><?= intval(abs(strtotime($program->program_end_date) - strtotime($program->program_start_date))/86400) ?></span></h4>
              <p class="text-muted mb-1 text-truncate">Days left</p>
            </div>
          </div>
        </div> <!-- end row-->
      </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
  </div>

    <!-- end page title -->
    <div class="row">
      <div class="col-md-12 col-lg-12 mb-3">
          <div class="float-right">
           <div class="btn-group">
             <?php if(count($requests) > 0): ?>
                <?php if(($currentDeskId == $empId) && ($program->program_status == 0)) : ?>
                 <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#approvalModal"> Approve  </button>
                 <button class="btn btn-danger btn-sm">  Decline</button>
               <?php endif; ?>
             <?php endif; ?>
             <div class="dropdown">
               <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fe-align-justify"></i> Manage Program
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#reportModal">Submit Report</a>
                 <a class="dropdown-item" href="#">Update Status</a>
               </div>
             </div>
           </div>
          </div>
      </div>
        <div class="col-12">
          <div class="row">
            <div class="col-xl-8 col-lg-6">
              <!-- project card -->
              <div class="card d-block">
                <div class="card-body">
                  <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                      <i class="dripicons-dots-3"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil mr-1"></i>Edit</a>
                    </div>
                  </div>
                  <!-- project title-->
                  <h3 class="mt-0 font-20">
                    <?= $program->program_name ?? ''?>
                  </h3>
                  <div class="">
                    <?php if($program->program_status == 0): ?>
                      <label for="" class="badge badge-secondary">Pending</label>
                    <?php elseif ($program->program_status == 1): ?>
                      <label for="" class="badge badge-primary">Started</label>
                    <?php elseif ($program->program_status == 2): ?>
                      <label for="" class="badge badge-warning">In-progress</label>
                    <?php elseif ($program->program_status == 3): ?>
                      <label for="" class="badge badge-success">Completed</label>
                    <?php elseif ($program->program_status == 4): ?>
                      <label for="" class="badge badge-danger">Cancelled</label>
                    <?php endif; ?>
                  </div>

                  <h5>Program Overview:</h5>

                  <?= $program->program_description ?? '' ?>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="mb-4">
                        <h5>Start Date</h5>
                        <p><?= date('d M, Y', strtotime($program->program_start_date)) ?> <small class="text-muted"><?= date('h:i a', strtotime($program->program_start_date)) ?></small></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-4">
                        <h5>End Date</h5>
                        <p><?= date('d M, Y', strtotime($program->program_end_date)) ?> <small class="text-muted"><?= date('h:i a', strtotime($program->program_end_date)) ?></small></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-4">
                        <h5>Estimated Budget</h5>
                        <p><?= env('APP_CURRENCY') ?><?= number_format($program->program_budget ?? 0) ?></p>
                      </div>
                    </div>
                  </div>

                  <div>
                    <h5>Team Members:</h5>
                    <?php foreach ($participants as $participant): ?>
                      <a href="<?= route_to('view-profile',  $participant->employee_id) ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?= $participant->employee_f_name ?? '' ?> <?= $participant->employee_l_name ?? '' ?>" class="d-inline-block">
                        <img src="/assets/images/users/<?= $participant->employee_avatar ?? 'avatar.png'  ?>" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                      </a>
                    <?php endforeach; ?>

                  </div>

                </div> <!-- end card-body-->

              </div> <!-- end card-->

              <div class="card">
                <div class="card-body">
                  <h4 class="mt-0 mb-3">Comments (<?= number_format(count($conversations)) ?>)</h4>
                  <form action="<?= site_url('/leave-program-comment') ?>" method="post">
                    <?= csrf_field() ?>
                    <textarea name="comment" class="form-control form-control-light mb-2" style="resize:none;" placeholder="Write message" id="example-textarea" rows="3"></textarea>
                    <div class="text-right">
                      <input type="hidden" name="convo_project_id" value="<?= $program->program_id ?>">
                      <div class="btn-group mb-2 ml-2">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="mt-2">
                  <?php foreach ($conversations as $conversation): ?>
                    <div class="media mb-2 p-2">
                      <img class="mr-2 avatar-sm rounded-circle" src="../assets/images/users/<?=$conversation->employee_avatar ?? 'avatar.png' ?>" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0">
                          <a href="<?= route_to('view-profile',  $conversation->employee_id) ?>" class="text-reset">
                            <?= $conversation->employee_f_name ?? '' ?> <?= $conversation->employee_l_name ?? '' ?></a> <small class="text-muted"><?= date('d M, Y h:i a', strtotime($conversation->created_at)) ?></small>
                          <br> <small>( <?= $conversation->pos_name ?? '' ?>, <?= $conversation->dpt_name ?? '' ?>)</small>
                        </h5>

                        <?= $conversation->pc_body ?? '' ?>
                        <br>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="mt-0 mb-3">Report(s)</h4>
                  <div id="accordion" class="mb-3">
                    <?php foreach ($reports as $report): ?>
                      <div class="card mb-1">
                        <div class="card-header" id="heading_<?= $report->project_report_id  ?? '' ?>">
                          <h5 class="m-0">
                            <a class="text-dark collapsed" data-toggle="collapse" href="#collapse_<?= $report->project_report_id  ?? '' ?>" aria-expanded="false">
                              <i class=" mr-1 text-primary"></i>
                              <?= $report->project_report_subject ?? '' ?>
                            </a>
                          </h5>
                        </div>

                        <div id="collapse_<?= $report->project_report_id  ?? '' ?>" class="collapse" aria-labelledby="heading_<?= $report->project_report_id  ?? '' ?>" data-parent="#accordion" style="">
                          <div class="card-body">
                            <?= $report->project_report_content ?? '' ?>
                          </div>
                          <?php foreach ($report_attachments as $report_attachment): ?>
                            <?php if($report_attachment->project_report_attachment_report_id == $report->project_report_id): ?>
                              <a href="/uploads/posts/<?= $report_attachment->project_report_attachment ?>" target="_blank" class="btn btn-primary btn-sm">Download</a>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>


              </div>
            </div>

            <div class="col-lg-6 col-xl-4">
            <?php if(($program->program_status == 0) && ($program->program_created_by == $empId) && ($pendingRequestStatus)): ?>
              <div class="card " id="seekApprovalCard">
                <h5 class="modal-header pb-1">Request For Approval</h5>
                <div class="card-body">
                  <form action="<?= site_url('/request-for-approval') ?>" method="post">
                    <div class="form-group">
                      <label for="">Choose Authorizing Person</label>
                      <input type="hidden" name="type" value="program">
                      <input type="hidden" name="itemId" value="<?= $program->program_id ?? '' ?>">
                      <select name="authPerson" id="" class="form-control" data-toggle="select2" required>
                        <?php foreach($hods as $hod) :?>
                        <option value="<?= $hod['employee_id'] ?>"><?= $hod['employee_f_name'] ?? ''  ?> <?= $hod['employee_l_name'] ?? ''  ?> <?= $hod['employee_o_name'] ?? ''  ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-block btn-success">Submit Request</button>
                    </div>
                  </form>
                </div>
              </div>
              <?php endif; ?>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-3">Files</h5>
                  <?php if(count($attachments) > 0): ?>
                    <?php foreach($attachments as $attachment):?>
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
                              <a href="javascript:void(0);" class="text-muted font-weight-bold"><?= substr($program->program_name,0,23) ?></a>
                            </div>
                            <div class="col-auto">
                              <!-- Button -->
                              <a target="_blank" href="/uploads/posts/<?=$attachment->pa_attachment ?>" class="btn btn-link btn-lg text-muted">
                                <i class="dripicons-download"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <h5 class="text-center">No attachments</h5>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Submit Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= route_to('submit-project-report') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <input type="text" placeholder="Subject" name="subject" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Attachment(s)</label>
                                    <input type="file"  placeholder="Attachments" name="attachments[]" multiple class="form-control-file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Report</label>
                                    <textarea name="report"  id="report" class="form-control" placeholder="Type report here..." cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <input type="hidden" name="project_report" value="<?= $program->program_id ?>">
                                <div class="form-group">
                                    <div class="btn-group">
                                        <button class="btn btn-secondary btn-sm" type="button">Cancel</button>
                                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <?php if(count($requests) > 0): ?>
      <?php if(($currentDeskId == $empId) && ($program->program_status == 0)) : ?>
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
                        <form action="<?= route_to('action-request') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <p>This action cannot be undone. Are you sure you want to <code>approve</code> this request?</p>
                                  </div>
                                    <div class="form-group">
                                        <label for="">Should your action be marked as final?</label>
                                      <select name="final" id="final" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                      </select>
                                    </div>
                                 <div class="form-group">
                                   <label for="">Next Authorizing Person</label>
                                   <select name="authPerson" id="" class="form-control" data-toggle="select2" required>
                                     <?php foreach($hods as $h) :?>
                                       <option value="<?= $h['employee_id'] ?>"><?= $h['employee_f_name'] ?? ''  ?> <?= $h['employee_l_name'] ?? ''  ?> <?= $h['employee_o_name'] ?? ''  ?></option>
                                     <?php endforeach; ?>
                                   </select>
                                 </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <input type="hidden" name="itemId" value="<?= $program->program_id ?>">
                                    <input type="hidden" name="requestId" value="<?= $pendingId ?>">
                                    <input type="hidden" name="decision" value="approve">
                                    <input type="hidden" name="type" value="program">
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
</div>
<?= $this->endSection(); ?>
<?= $this->section('extra-scripts'); ?>
<script src="/assets/libs/select2/js/select2.min.js"></script>
<script src="/assets/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="/assets/js/pages/timeline.init.js"></script>
<script>
  $(document).ready(function(){
    //$('#seekApprovalCard').hide();

    $('#seekApprovalHandlef').on('click',function(e){
      $('#seekApprovalCard').toggle();
    })

  });
</script>
<?= $this->endSection(); ?>
