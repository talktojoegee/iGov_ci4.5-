<?= $this->extend('layouts/master'); ?>
<?= $this->section('content'); ?>
<?php
$permissions = session()->get('permissions');
$fleet_setup_permission = \App\Enums\Permissions::FLEET_SETUP->value;
?>
<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box">
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Fleet</a></li>
            <li class="breadcrumb-item active">Request LOT Details</li>
          </ol>
        </div>
        <h4 class="page-title">Request LOT Details</h4>
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
    <?php if($request->rl_status == 0): ?>
    <div class="col-md-12 d-flex justify-content-end mb-2">
      <div class="btn-group">
        <button data-toggle="modal" data-target="#approveModal" type="button" class="btn btn-success">Approve</button>
        <button data-toggle="modal" data-target="#declineModal" type="button" class="btn btn-danger">Decline</button>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <!-- end page title -->
  <div class="row">
    <div class="col-8">
      <div class="card">
        <div class="modal-header" >Request LOT Details</div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-md-6">
                  <h4>From: <small><?= date('d M, Y h:ia', strtotime($request->rl_from)) ?></small></h4>
                </div>
                <div class="col-md-6">
                  <h4>To: <small><?= date('d M, Y h:ia', strtotime($request->rl_to)) ?></small></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h4>Submitted By: <small><?= $submitted_by['employee_f_name'] ?? null  ?> <?= $submitted_by['employee_l_name'] ?? null  ?></small></h4>
                </div>
                <div class="col-md-6">
                  <h4>Status: <small>
                      <?php
                      if($request->rl_status == 0){
                        echo "Pending";
                      }else if($request->rl_status == 1){
                        echo "Approved";
                      }else{
                        echo "Declined";
                      }
                      ?>
                    </small></h4>
                </div>
              </div>
              <?php if($request->rl_status > 0): ?>
              <div class="row">
                <div class="col-md-6">
                  <h4>Actioned By: <small><?= $actioned_by['employee_f_name'] ?? null ?> <?= $actioned_by['employee_l_name'] ?? null ?></small></h4>
                </div>
                <div class="col-md-6">
                  <h4>Date Actioned: <small><?= date('d M, Y', strtotime($request->rl_date_actioned)) ?></small></h4>
                </div>
              </div>
              <?php endif; ?>
              <div class="row">
                <div class="col-md-12">
                  <h4>Note:</h4>
                  <small><?= $request->rl_note ?? null   ?></small>
                </div>
              </div>

            </div> <!-- end card -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="modal-header" >Driver</div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2"><?= $request->employee_f_name ?? null ?> <?= $request->employee_f_name ?? null ?></span></p>
              <p class="text-muted mb-2 font-13"><strong>Means of ID.:</strong> <span class="ms-2"><?php
                  if($request->fd_moi == 1){
                    echo "Driver's License";
                  }else if($request->fd_moi == 2){
                    echo "International Passport";
                  }else if($request->fd_moi == 3){
                    echo "National ID";
                  }else{
                    echo "Others";
                  }
                  ?></span></p>
              <p class="text-muted mb-2 font-13"><strong>MOI Expiry:</strong> <span class="ms-2"><?= date('d M, Y', strtotime($request->fd_moi_expiry)) ?? null ?> </span></p>
            </div> <!-- end card -->
          </div>
        </div>
      </div>
      <div class="card">
        <div class="modal-header" >Vehicle Details</div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <p class="text-muted mb-2 font-13"><strong>Make :</strong> <span class="ms-2"><?= $request->fv_maker ?? null ?> </span></p>
              <p class="text-muted mb-2 font-13"><strong>Brand :</strong> <span class="ms-2"><?= $request->fv_brand ?? null ?> </span></p>
              <p class="text-muted mb-2 font-13"><strong>Engine Type :</strong> <span class="ms-2"><?= $request->fv_engine_type ?? null ?> </span></p>
              <p class="text-muted mb-2 font-13"><strong>Mileage :</strong> <span class="ms-2"><?= $request->fv_mileage ?? null ?> </span></p>
              <p class="text-muted mb-2 font-13"><strong>Plate No. :</strong> <span class="ms-2"><?= $request->fv_plate_no ?? null ?></span></p>
              <p class="text-muted mb-2 font-13"><strong>Chassis No. :</strong> <span class="ms-2"><?= $request->fv_chassis_no ?? null ?> </span></p>
              <p class="text-muted mb-2 font-13"><strong>Tank Capacity. :</strong> <span class="ms-2"><?= $request->fv_tank_capacity ?? null ?> </span></p>
              <p class="text-muted mb-2 font-13"><strong>Color. :</strong> <span class="ms-2"><?= $request->fv_color ?? null ?> </span></p>
            </div> <!-- end card -->
          </div>
        </div>
      </div>
      <div class="card">
        <div class="modal-header" >Responsible Person(s)</div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
            <?php foreach ($persons as $key=> $person): ?>
              <p class="text-muted mb-2 font-13"><span class="text-danger"><?= $key +1  ?>. </span><strong><?= $person['employee_f_name'] ?? '' ?> <?= $person['employee_l_name'] ?? '' ?></strong></p>
            <?php endforeach; ?>
            </div> <!-- end card -->
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="card">
        <h5 class="modal-header pb-1">Approve Request?</h5>
        <div class="card-body">
          <form action="<?= site_url('/action-request-lot') ?>" method="post">
            <p><strong>Note:</strong> This action cannot be undone. Are you sure you want to approve this request?</p>
            <div class="form-group">
              <input type="hidden" name="request" value="<?= $request->rl_id ?>" class="form-control">
              <input type="hidden" name="action" value="1" class="form-control">
              <button class="btn btn-block btn-success">Approve</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="card">
        <h5 class="modal-header pb-1">Decline Request?</h5>
        <div class="card-body">
          <form action="<?= site_url('/action-request-lot') ?>" method="post">
            <p><strong>Note:</strong> This action cannot be undone. Are you sure you want to decline this request?</p>
            <div class="form-group">
              <input type="hidden" name="request" value="<?= $request->rl_id ?>" class="form-control">
              <input type="hidden" name="action" value="2" class="form-control">
              <button class="btn btn-block btn-danger">Decline</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('extra-scripts'); ?>

<!-- third party js ends -->

<!-- Datatables init -->
<script src="/assets/js/pages/datatables.init.js"></script>
<?= view('pages/fleet/_fleet-scripts.php') ?>
<?= $this->endSection(); ?>
