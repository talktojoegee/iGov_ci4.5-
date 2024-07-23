<?= $this->extend('layouts/master'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- start page title -->
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

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
                        <li class="breadcrumb-item active">Trainings</li>
                    </ol>
                </div>
                <h4 class="page-title">Trainings</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <a href="<?= site_url('add-new-training') ?>" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                    <i class="mdi mdi-plus-circle"></i> Add New Training
                </a>
                <h4 class="header-title mb-4">Manage Trainings</h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                    <thead>
                    <tr>
                        <th>
                            S/No.
                        </th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Posted By</th>
                        <th>Date</th>
                        <th class="hidden-sm">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php  $serial = 1; ?>
                    <?php foreach($trainings as $training): ?>
                    <tr>
                        <td><?= $serial++ ?> </td>
                        <td>
                           <?= strlen($training['title']) > 35 ? substr($training['title'],0,35).'...' :  $training['title'] ?>
                        </td>

                        <td>
                            <?= strip_tags(strlen($training['description'])) > 35 ? substr(strip_tags($training['description']),0,35).'...' : strip_tags($training['description']) ?>
                        </td>

                        <td>
                            <?= $training['employee_f_name'] ?? ''  ?>  <?= $training['employee_l_name'] ?? ''  ?>
                        </td>

                        <td>
                           <?= date('d M, Y', strtotime($training['created_at'])) ?>
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <?php if($authId == $training['author']): ?>
                                    <a class="dropdown-item" href="<?= site_url('/edit-training/'.$training['slug']) ?>"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Training</a>
                                  <?php endif;  ?>
                                    <a class="dropdown-item" href="<?= site_url('/trainings/'.$training['slug']) ?>"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>View Training</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
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

