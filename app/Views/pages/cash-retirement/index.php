<?= $this->extend('layouts/master'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
                        <li class="breadcrumb-item active">Cash Retirement</li>
                    </ol>
                </div>
                <h4 class="page-title">Cash Retirement</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="avatar-sm bg-blue rounded">
                <i class="fe-layers avatar-title font-22 text-white"></i>
              </div>
            </div>
            <div class="col-6">
              <div class="text-end">
                <h5 class="my-1"><?= env('APP_CURRENCY') ?><span data-plugin="counterup"><?= number_format($overallAmount,2) ?></span></h5>
                <p class="text-muted mb-1 text-truncate">Overall</p>
              </div>
            </div>
          </div>
          <div class="mt-3">
            <h6 class="text-uppercase">Total: <span class="float-end"><strong><?= number_format($overall ?? 0) ?></strong></span></h6>
          </div>
        </div>
      </div> <!-- end card-->
    </div>

    <div class="col-md-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="avatar-sm bg-primary rounded">
                <i class="fe-loader avatar-title font-22 text-white"></i>
              </div>
            </div>
            <div class="col-6">
              <div class="text-end">
                <h5 class="my-1"><?= env('APP_CURRENCY') ?><span data-plugin="counterup"><?= number_format($authorizedAmount,2) ?></span></h5>
                <p class="text-muted mb-1 text-truncate">Authorized</p>
              </div>
            </div>
          </div>
          <div class="mt-3">
            <h6 class="text-uppercase">Total: <span class="float-end"><strong><?= number_format($authorized ?? 0) ?></strong></span></h6>
          </div>
        </div>
      </div> <!-- end card-->
    </div>

    <div class="col-md-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="avatar-sm bg-success rounded">
                <i class="fe-repeat avatar-title font-22 text-white"></i>
              </div>
            </div>
            <div class="col-6">
              <div class="text-end">
                <h5 class="my-1"><?= env('APP_CURRENCY') ?><span data-plugin="counterup"><?= number_format($approvedAmount,2) ?></span></h5>
                <p class="text-muted mb-1 text-truncate">Approved</p>
              </div>
            </div>
          </div>
          <div class="mt-3">
            <h6 class="text-uppercase">Total: <span class="float-end"><strong><?= number_format($approved ?? 0) ?></strong></span></h6>
          </div>
        </div>
      </div> <!-- end card-->
    </div>

    <div class="col-md-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="avatar-sm bg-info rounded">
                <i class="fe-loader avatar-title font-22 text-white"></i>
              </div>
            </div>
            <div class="col-6">
              <div class="text-end">
                <h5 class="my-1"><?= env('APP_CURRENCY') ?><span data-plugin="counterup"><?= number_format($pendingAmount,2) ?></span></h5>
                <p class="text-muted mb-1 text-truncate">Pending</p>
              </div>
            </div>
          </div>
          <div class="mt-3">
            <h6 class="text-uppercase">Total: <span class="float-end"><strong><?= number_format($pending ?? 0) ?></strong></span></h6>
          </div>
        </div>
      </div> <!-- end card-->
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 mb-3">
      <a href="<?= route_to('new-cash-retirement') ?>" class="btn btn-sm btn-blue waves-effect waves-light float-right">
        <i class="mdi mdi-plus-circle"></i> Add New Cash Retirement
      </a>
    </div>
  </div>
    <div class="row">
      <div class="col-12">

          <?php if(session()->has('error')): ?>
            <div class="card-box">
                <div class="alert alert-warning" role="alert">
                  <i class="mdi mdi-alert-outline mr-2"></i> <?= session()->get('error') ?>
                </div>
            </div>
          <?php endif; ?>

          <?php if(session()->has('success')): ?>
            <div class="card-box">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <?= session()->get('success') ?>
                </div>
            </div>
          <?php endif; ?>
      </div>
        <div class="col-12">
            <div class="card">
              <div class="modal-header mb-4">My Cash Retirement</div>
              <div class="card-body">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                  <thead>
                  <tr>
                    <th>
                      S/No.
                    </th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th style="text-align: right;">Amount(<?= env('APP_CURRENCY') ?>)</th>
                    <th class="hidden-sm">Action</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php foreach($my_requests as $key => $request): ?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $request['crm_subject'] ?? ''  ?></td>
                      <td><?= date('d M, Y', strtotime($request['created_at'])) ?? ''  ?></td>
                      <td>
                        <?php
                        if ($request['crm_status'] == 0) echo '<span class="badge badge-soft-primary badge-pill">Pending</span>';
                        elseif ($request['crm_status'] == 1) echo '<span class="badge badge-soft-secondary badge-pill">Authorized</span>';
                        elseif ($request['crm_status'] == 2) echo '<span class="badge badge-soft-success badge-pill">Approved</span>';
                        ?>
                      </td>
                      <td style="text-align: right;"><?= number_format($request['crm_amount_obtained'] ?? 0,2) ?? ''  ?></td>
                      <td>
                        <a href="<?= route_to('show-cash-retirement-details', $request['crm_url']) ?>" data-toggle="tooltip" data-placement="left" title data-original-title=" Details">
                          <i data-feather="list" class="icon-dual"></i>.
                        </a>
                      </td>
                    </tr>

                  <?php endforeach; ?>

                  </tbody>
                </table>

              </div>




            </div>
        </div><!-- end col -->
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('extra-scripts') ?>
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
<?= $this->endSection() ?>

