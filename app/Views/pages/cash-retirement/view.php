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
            <li class="breadcrumb-item"><a href="<?= route_to('cash-retirement')?>">Cash Retirement</a></li>
            <li class="breadcrumb-item active">Cash Retirement Details</li>
          </ol>
        </div>
        <h4 class="page-title">Cash Retirement Details</h4>
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

  <!-- end page title -->
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class=" d-flex justify-content-end">
        <div class="btn-group">
          <?php if(($record->crm_status == 0) && ($record->crm_payable_to == $empId) && ($pendingRequestStatus)): ?>
          <button data-toggle="modal" data-target="#reportModal" type="button" class="btn btn-sm btn-success ">Request for Approval</button>
          <?php endif; ?>
          <?php if(count($requests) > 0): ?>
            <?php if(($currentDeskId == $empId) && ($record->crm_status == 0)) : ?>
              <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#approvalModal"> Approve  </button>
              <button class="btn btn-danger btn-sm">  Decline</button>
            <?php endif; ?>
          <?php endif; ?>
          <a href="<?=route_to('cash-retirement')?>" type="button" class="btn btn-sm btn-primary ">Go Back</a>
        </div>

      </div>
    </div>


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


    <div class="col-12">
      <div class="card">
        <div class="modal-header mt-2 mb-4">Cash Retirement Details</div>
        <div class="card-body">
          <div class="row" style="margin-top: -20px;">
            <div class="col-lg-6 col-md-6">
              <h5 class="header-title mb-3"><?= $record->crm_subject ?? '' ?></h5>
              <p class="mb-2"><strong class="fw-semibold me-2">Type:</strong> Cash Retirement</p>
              <p class="mb-2"><strong class="fw-semibold me-2">Amount Obtained(<?= env('APP_CURRENCY') ?>):</strong> <?= number_format($record->crm_amount_obtained ?? 0,2) ?></p>
              <p class="mb-2"><strong class="fw-semibold me-2">Amount Retired(<?= env('APP_CURRENCY') ?>):</strong> <?= number_format($record->crm_amount_retired ?? 0,2) ?></p>
              <p class="mb-2"><strong class="fw-semibold me-2">Balance(<?= env('APP_CURRENCY') ?>):</strong> <?= number_format($record->crm_balance ?? 0,2) ?></p>
              <p class="mb-0"><strong class="fw-semibold me-2">Payable To:</strong> <?= $record->employee_f_name ?? '' ?> <?= $record->employee_l_name ?? '' ?> <?= $record->employee_o_name ?? '' ?>
                <span class="text-info">(<?= $record->pos_name ?? '' ?>, <?= $record->dpt_name ?? '' ?>)</span>
              </p>
              <p class="mb-0"><strong class="fw-semibold me-2">Status:</strong>
                <?php
                if ($record->crm_status == 0) echo '<span class="badge badge-primary">Pending</span>';
                elseif ($record->crm_status == 1) echo '<span class="badge badge-warning">Authorized</span>';
                elseif ($record->crm_status == 2) echo '<span class="badge badge-success">Approved</span>';
                ?>
              </p>
              <p class="mb-0"><strong class="fw-semibold me-2">Purpose:</strong></p>
              <div class="ml-3 text-muted">
                <?= $record->crm_purpose ?? '' ?>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <h4 class="header-title">Expenditure Breakdown</h4>
                <div class="table-responsive">
                  <table class="table table-striped mb-0">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Receipt No.</th>
                      <th>Date</th>
                      <th style="text-align: right;">Amount(<?= env('APP_CURRENCY') ?>)</th>
                      <th>Remarks</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($items as $key => $item): ?>
                    <tr>
                      <th scope="row"><?= $key + 1 ?></th>
                      <td><?= $item['crd_receipt_no'] ?? '' ?></td>
                      <td><?= date('d M, Y', strtotime($item['crd_date'])) ?? '' ?></td>
                      <td style="text-align: right;"><?= number_format($item['crd_amount'],2) ?? '' ?></td>
                      <td><?= $item['crd_remark'] ?? '' ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              <h4 class="header-title mt-3">Attachments</h4>
              <?php if(count($attachments) > 0): ?>
                <?php foreach($attachments as $key => $attachment):?>
                  <div class="card mb-1 shadow-none border">
                    <div class="p-2">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                FILE
                                                            </span>
                          </div>
                        </div>
                        <div class="col pl-0">
                          <a href="javascript:void(0);" class="text-muted font-weight-bold"><?= substr($record->crm_subject,0,23) ?></a>
                        </div>
                        <div class="col-auto">
                          <!-- Button -->
                          <a target="_blank" href="/uploads/posts/<?=$attachment['cra_attachment'] ?? '' ?>" class="btn btn-link btn-lg text-muted">
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
        <div class="card">
          <h5 class="modal-header pb-1">Request For Approval</h5>
          <div class="card-body">
            <form action="<?= site_url('/request-for-approval') ?>" method="post">
              <div class="form-group">
                <label for="">Choose Authorizing Person</label>
                <input type="hidden" name="type" value="retirement">
                <input type="hidden" name="itemId" value="<?= $record->crm_id ?? '' ?>">
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
      </div>
    </div>
  </div>
  <?php if(count($requests) > 0): ?>
    <?php if(($currentDeskId == $empId) && ($record->crm_status == 0)) : ?>
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
                    <input type="hidden" name="itemId" value="<?= $record->crm_id ?>">
                    <input type="hidden" name="requestId" value="<?= $pendingId ?>">
                    <input type="hidden" name="decision" value="approve">
                    <input type="hidden" name="type" value="retirement">
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
<?= view('pages/program-activities/_request-trail-scripts.php') ?>
<script>
  $(document).ready(function(){
    var quill = new Quill ();
    $("#training-form").on("submit",function(){
      let editor = document.querySelector('#snow-editor');
      let html = editor.children[0].innerHTML;
      $("#hiddenArea").val(html);
    })
  });
</script>
<?= $this->endSection(); ?>




