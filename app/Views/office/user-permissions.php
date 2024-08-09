<?=
$this->extend('layouts/admin')
?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= site_url('office') ?>">iGov</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                <h4 class="page-title">Users</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row" style="margin-top: -50px">
        <div class="col-xl-12">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Directorate</th>
                            <th>Unit</th>
                            <th>Status</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php if ($users):
                            $sn = 1;
                            foreach ($users as $user):
                                ?>
                                <tr>
                                    <td><?= $sn++; ?> </td>
                                    <td> <?= $user['user_username'] ?></td>
                                    <td> <?= $user['user_name'] ?></td>
                                    <td> <?= $user['user_email'] ?></td>
                                    <td><?= $user['employee'][0]['dpt_name'] ?></td>
                                    <td><?= $user['employee'][0]['pos_name'] ?></td>
                                    <td> <?= $user['user_status'] == 1 ? 'ACTIVE' : 'INACTIVE' ?></td>
                                    <td>
                                        <?php
                                        switch ($user['user_type']) {
                                            case 1:
                                                echo 'ADMIN';
                                                break;
                                            case 2:
                                                echo 'EMPLOYEE';
                                                break;
                                            default:
                                                echo 'MODERATOR';
                                        }
                                        ?>
                                    </td>
                                    <td style="width: max-content">
                                        <button type="button" class="btn btn-sm btn-secondary waves-effect waves-light"
                                                data-toggle="modal"
                                                data-target="#reset-password-modal-<?= $user['user_id'] ?>">
                                            Reset Password
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary waves-effect waves-light"
                                                data-toggle="modal"
                                                data-target="#user-permissions-modal-<?= $user['user_id'] ?>">
                                            Update Permissions
                                        </button>
                                    </td>
                                </tr>

                            <?php endforeach; endif; ?>
                        </tbody>
                    </table>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

    <?php foreach ($users as $user): ?>
        <div class="modal fade" id="reset-password-modal-<?= $user['user_id'] ?>" data-backdrop="static"
             data-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Reset Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong>
                            Are you sure you want to reset password for <?= $user['user_name'] ?>?
                        </strong>
                        <p>
                            A random password will be generated and sent to <?= $user['user_name'] ?>'s email.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="<?= site_url('reset-password') ?>?user_id=<?= $user['user_id'] ?>"
                           class="btn btn-success">Yes, Reset Password</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="user-permissions-modal-<?= $user['user_id'] ?>" data-backdrop="static"
             data-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <form action="<?= site_url('permissions') ?>" method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Manage Permissions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <strong>Modify permissions for <?= $user['user_name'] ?> below.</strong>
                        </p>
                        <div class="row">
                            <?php foreach ($permissions as $permission): ?>
                                <div class="col-lg-6">
                                    <div class="custom-control custom-checkbox">
                                        <input name="permissions[]" type="checkbox" class="custom-control-input"
                                               id="<?= $user['user_id'] . '-' . $permission->value ?>"
                                               value="<?= $permission->value ?>" <?php if (in_array($permission->value, $user['permissions'])) echo 'checked'; ?>>
                                        <label class="custom-control-label"
                                               for="<?= $user['user_id'] . '-' . $permission->value ?>">
                                            <?= $permission->label ?>
                                        </label>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>

<?= $this->section('extra-scripts') ?>
<?= $this->endSection() ?>
