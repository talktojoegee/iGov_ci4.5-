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
            <li class="breadcrumb-item active">Request LOT</li>
          </ol>
        </div>
        <h4 class="page-title">Request LOT</h4>
      </div>
    </div>
  </div>
  <!-- end page title -->
  <div class="row">
    <div class="col-12">
      <div class="card-box">
        <div class="row">
          <div class="col-lg-8">
            <h4 class="header-title">All LOT Requests</h4>
            <p class="text-muted font-13">
              Below are the active vehicles registered on iGov.
            </p>
          </div>
          <div class="col-lg-4">
            <?php if (in_array($fleet_setup_permission, $permissions)): ?>
              <div class="text-lg-right mt-3 mt-lg-0">
                <a href="<?= site_url('/new-request-lot') ?>" type="button"
                   class="btn btn-success waves-effect waves-light"><i
                    class="mdi mdi-plus-circle mr-1"></i>
                  New Request LOT
                </a>
              </div>
            <?php endif; ?>

          </div><!-- end col-->
        </div> <!-- end row -->
        <div class="row">
          <div class="col-12">
            <table id="datatable-buttons"
                   class="table table-striped table-bordered dt-responsive nowrap w-100">
              <thead>
              <tr>
                <th class="text-center" style="width: 5%">S/n</th>
                <th>From</th>
                <th>To</th>
                <th style="width: 10%">Driver</th>
                <th style="width: 10%">Vehicle</th>
                <th style="width: 10%">Status</th>
                <th class="text-center" style="width: 5%">Actions</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($requests as $key=> $request): ?>
                <tr>
                  <td><?= $key +1 ?></td>
                  <td><?= date('d M, Y h:ia', strtotime($request['rl_from'])) ?></td>
                  <td><?= date('d M, Y h:ia', strtotime($request['rl_to'])) ?></td>
                  <td><?= $request['employee_f_name'] ?? '' ?> <?= $request['employee_l_name'] ?? '' ?></td>
                  <td><?= $request['fv_maker'] ?? '' ?> - <?= $request['fv_plate_no'] ?? '' ?></td>
                  <td><?php
                      if($request['rl_status'] == 0){
                        echo "Pending";
                      }else if($request['rl_status'] == 1){
                        echo "Approved";
                      }else{
                        echo "Declined";
                      }
                    ?></td>
                  <td>
                    <a href="<?= route_to('show-request-lot-details', $request['rl_id']) ?>"
                       data-toggle="tooltip" data-placement="left" title data-original-title=" Details">
                      <i data-feather="list" class="icon-dual"></i>.
                    </a>
                  </td>
                </tr>

              <?php endforeach; ?>
              </tbody>
            </table>
          </div> <!-- end card -->
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('extra-scripts'); ?>

<!-- third party js -->
<script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="/assets/js/pages/datatables.init.js"></script>
<?= view('pages/fleet/_fleet-scripts.php') ?>
<?= $this->endSection(); ?>
