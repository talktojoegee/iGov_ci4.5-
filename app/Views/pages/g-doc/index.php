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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">e-Office</a></li>
                        <li class="breadcrumb-item active">G-Docs</li>
                    </ol>
                </div>
                <h4 class="page-title">G-Docs</h4>
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
                            <h4 class="header-title">My Documents</h4>
                            <p class="text-muted font-13">
                                Below are all the incoming documents that require your attention as an authorizer in the
                                document process created.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-lg-right mt-lg-0">
                                <a href="<?= site_url('g-docs/new-doc-upload') ?>" class="btn btn-success">
                                    <i class="mdi mdi-plus-circle mr-1"></i>
                                    New Document Upload
                                </a>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">S/n</th>
                            <th style="width: 10%">Ref</th>
                            <th>Title</th>
                            <th style="width: 12%">Uploaded By</th>
                            <th style="width: 10%">Document Status</th>
                            <th style="width: 10%">Authorization Status</th>
                            <th style="width: 10%">Added</th>
                            <th class="text-center" style="width: 10%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                        foreach ($my_docs as $doc): ?>
                            <tr>
                                <td>
                                    <?= $i;
                                    $i++; ?>
                                </td>
                                <td><?= $doc['g_doc_ref'] ?></td>
                                <td><?= $doc['g_doc_title'] ?></td>
                                <td><?= $doc['user_name'] ?></td>
                                <td>
                                    <?php
                                    if ($doc['g_doc_status'] == 1) echo 'Active';
                                    elseif ($doc['g_doc_status'] == 0) echo 'Inactive';
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($doc['g_doc_auth_status'] == 1) {
                                        echo '<span class="badge badge-danger">Cancelled</span>';
                                    } elseif ($doc['g_doc_auth_status'] == 0) {
                                        echo '<span class="badge badge-warning">Pending</span>';
                                    } elseif ($doc['g_doc_auth_status'] == 2) {
                                        echo '<span class="badge badge-success">Reviewed</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php $date = date_create($doc['g_doc_auth_status_at']);
                                    echo date_format($date, "d M Y h:i a");
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= site_url('/manage-doc/' . $doc['g_doc_id']) ?>"
                                       class="btn btn-sm btn-outline-info" title="Edit">
                                        Manage
                                    </a>
                                    <a href="<?= base_url('uploads/g-docs/' . $doc['g_doc_upload']) ?>"
                                       class="btn btn-sm btn-outline-success"
                                       title="<?= $doc['g_doc_title'] ?>" download>
                                        Download
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
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
<?= $this->endSection(); ?>
