<?= $this->extend('layouts/master'); ?>
<?= $this->section('content'); ?>
<?php
$permissions = session()->get('permissions');
$workflow_permission = \App\Enums\Permissions::WORKFLOW->value;
?>
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
                        <li class="breadcrumb-item active">Workflow Requests</li>
                    </ol>
                </div>
                <h4 class="page-title">Workflow Requests</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">

            <?php if (session()->has('error')): ?>
                <div class="card-box">
                    <div class="alert alert-warning" role="alert">
                        <i class="mdi mdi-alert-outline mr-2"></i> <?= session()->get('error') ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (session()->has('success')): ?>
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
            <div class="card-box">
                <?php if (in_array($workflow_permission, $permissions)): ?>
                    <a href="<?= site_url('/workflow-requests/new-request') ?>"
                       class="btn btn-sm btn-blue waves-effect waves-light float-right">
                        <i class="mdi mdi-plus-circle"></i> Add New Request
                    </a>
                <?php endif; ?>

                <h4 class="header-title mb-4">My Workflow Requests</h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                    <thead>
                    <tr>
                        <th>
                            S/No.
                        </th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th class="hidden-sm">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $serial = 1; ?>
                    <?php foreach ($my_requests as $request): ?>
                        <tr>
                            <td><?= $serial++ ?></td>
                            <td><?= date('d M, Y', strtotime($request['c_at'])) ?></td>
                            <td class="text-right"><?= number_format($request['amount'], 2) ?></td>
                            <td><?= $request['request_title'] ?></td>
                            <td><?= strlen(strip_tags($request['request_description'])) > 35 ? substr(strip_tags($request['request_description']), 0, 35) . '...' : strip_tags($request['request_description']) ?></td>
                            <td><?= $request['workflow_type_name'] ?></td>
                            <td>
                                <a href="<?= site_url('/workflow-requests/view/' . $request['workflow_request_id']) ?>"
                                   class="btn btn-info btn-sm">View</a>
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

