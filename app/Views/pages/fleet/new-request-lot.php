<?= $this->extend('layouts/master'); ?>
<?=$this->section('extra-styles'); ?>
  <link href="/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
  <link href="/assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
<?=$this->endSection() ?>
<?= $this->section('content'); ?>
  <div class="container-fluid">
    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Fleet</a></li>
              <li class="breadcrumb-item"><a href="<?=site_url('request-lot')?>">Request LOT</a></li>
              <li class="breadcrumb-item active">New Request LOT</li>
            </ol>
          </div>
          <h4 class="page-title">New Request LOT</h4>
        </div>
      </div>
    </div>
    <!-- end page title -->
    <div class="row mb-3">
      <div class="col-12">
        <div class="card-bo">
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
              <div class="text-lg-right mt-3 mt-lg-0">
                <a href="<?=site_url('request-lot')?>" type="button" class="btn btn-success waves-effect waves-light">Go Back</a>
              </div>
            </div><!-- end col-->
          </div> <!-- end row -->
        </div> <!-- end card-box -->
      </div><!-- end col-->
    </div>
    <?php $validation = \Config\Services::validation(); ?>
    <form action="<?= route_to('new-request-lot') ?>" method="post">
      <?= csrf_field() ?>
      <div class="row">
        <div class="col-12">
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
          <div class="card-box">
            <h5 class="text-uppercase modal-header mt-0 mb-3">Request LOT Details</h5>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fv-color">From</label><span style="color: red"> *</span>
                    <input type="datetime-local" class="form-control" id="from" name="from" required>
                    <?php if($validation->getError('from')) {?>
                      <div class='text-danger mt-2'>
                        <?= $error = $validation->getError('from'); ?>
                      </div>
                    <?php }?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fv-color">To</label><span style="color: red"> *</span>
                    <input type="datetime-local" class="form-control" id="to" name="to" required>
                    <?php if($validation->getError('to')) {?>
                      <div class='text-danger mt-2'>
                        <?= $error = $validation->getError('to'); ?>
                      </div>
                    <?php }?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fv-fvt-id">Responsible Person(s)<span style="color: red"> *</span></label>
                    <select class="form-control" multiple data-toggle="select2" id="persons" name="persons[]">
                      <option value="" selected disabled>Select</option>
                      <?php foreach ($employees as $employee): ?>
                        <option value="<?=$employee['employee_id']?>">
                          <?=$employee['employee_f_name'] ?? null ?> - <?=$employee['employee_l_name'] ?? null ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <?php if($validation->getError('persons')) {?>
                      <div class='text-danger mt-2'>
                        <?= $error = $validation->getError('persons'); ?>
                      </div>
                    <?php }?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fv-fvt-id">Vehicle<span style="color: red"> *</span></label>
                    <select class="form-control" data-toggle="select2" id="vehicle" name="vehicle">
                      <option value="" selected disabled>Select</option>
                      <?php foreach ($vehicles as $vehicle): ?>
                        <option value="<?=$vehicle['fv_id']?>">
                          <?=$vehicle['fv_maker'] ?? null ?> - <?=$vehicle['fv_plate_no'] ?? null ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <?php if($validation->getError('vehicle')) {?>
                      <div class='text-danger mt-2'>
                        <?= $error = $validation->getError('vehicle'); ?>
                      </div>
                    <?php }?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fv-fvt-id">Driver<span style="color: red"> *</span></label>
                    <select class="form-control" data-toggle="select2" id="driver" name="driver">
                      <option value="" selected disabled>Select</option>
                      <?php foreach ($drivers as $driver): ?>
                        <option value="<?=$driver['employee']['employee_id']?>">
                          <?=$driver['employee']['employee_f_name'] ?? null ?> <?=$driver['employee']['employee_l_name'] ?? null ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <?php if($validation->getError('driver')) {?>
                      <div class='text-danger mt-2'>
                        <?= $error = $validation->getError('driver'); ?>
                      </div>
                    <?php }?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fv-fvt-id">Note<span style="color: red"> *</span></label>
                    <textarea name="note" style="resize: none;" placeholder="Note may include destination, purpose among other vital information" class="form-control"></textarea>
                  </div>
                  <?php if($validation->getError('note')) {?>
                    <div class='text-danger mt-2'>
                      <?= $error = $validation->getError('note'); ?>
                    </div>
                  <?php }?>
                </div>
              </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle mr-1"></i> Submit</button>
          <a href="<?=site_url('request-lot')?>" type="button" class="btn btn-danger waves-effect waves-light m-1"><i class="fe-x mr-1"></i> Cancel</a>
        </div>
      </div>
    </form>
  </div>
<?= $this->endSection(); ?>
<?= $this->section('extra-scripts'); ?>
  <script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
  <script src="/assets/libs/dropify/js/dropify.min.js"></script>
  <!-- Loading buttons js -->
  <script src="/assets/libs/ladda/spin.min.js"></script>
  <script src="/assets/libs/ladda/ladda.min.js"></script>

  <!-- Buttons init js-->
  <!-- Init js-->
  <script src="/assets/js/pages/loading-btn.init.js"></script>
  <script src="/assets/js/pages/form-fileuploads.init.js"></script>
<?=view('pages/fleet/_fleet-scripts.php')?>
<?= $this->endSection(); ?>
