<?= $this->extend('layouts/master'); ?>
<?= $this->section('extra-styles') ?>
<link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

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
                        <li class="breadcrumb-item active">Submit New Cash Retirement</li>
                    </ol>
                </div>
                <h4 class="page-title">Submit Cash Retirement</h4>
            </div>
        </div>
    </div>
  <div class="row">
    <div class="col-lg-12 d-flex justify-content-end">
      <a href="<?=route_to('cash-retirement')?>" type="button" class="btn btn-sm btn-primary float-right"> Go Back</a>
    </div>
  </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="modal-header mt-2 mb-4">Submit New Cash Retirement </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-lg-8">
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
                        </div>
                    </div>
                    <?php $validation = \Config\Services::validation(); ?>
                    <form enctype="multipart/form-data" id="training-form" class="needs-validation"  action="<?= route_to('store-cash-retirement') ?>" method="post" novalidate>
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" placeholder="Subject" id="title" class="form-control" name="subject">
                                    <div class="invalid-feedback">
                                        Please enter a title
                                    </div>
                                    <?php if($validation->getError('subject')) {?>
                                        <div class='text-danger mt-2'>
                                            <?= $error = $validation->getError('subject'); ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="subject">Being Retirement of</label>
                                    <select name="type" id="type" class="form-control" >
                                        <option selected disabled>--Select --</option>
                                      <option value="1">Cash Advance</option>
                                      <option value="2">Impress</option>
                                      <option value="3">Others</option>
                                    </select>
                                    <div class="invalid-feedback">
                                      Type
                                    </div>
                                    <?php if($validation->getError('type')) {?>
                                        <div class='text-danger mt-2'>
                                            <?= $error = $validation->getError('type'); ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="subject">Amount Obtained</label>
                                    <input type="number" step="0.01" placeholder="Amount Obtained" name="amount_obtained" class="form-control" >
                                    <div class="invalid-feedback">
                                        Please enter a amount
                                    </div>
                                    <?php if($validation->getError('amount_obtained')) {?>
                                        <div class='text-danger mt-2'>
                                            <?= $error = $validation->getError('amount_obtained'); ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                          <div class="col-4">
                                <div class="form-group">
                                    <label for="subject">Total Amount being retired</label>
                                    <input type="number" step="0.01" placeholder="Total Amount being retired" name="amount_retired" class="form-control" >
                                    <div class="invalid-feedback">
                                        Please enter a amount
                                    </div>
                                    <?php if($validation->getError('amount_retired')) {?>
                                        <div class='text-danger mt-2'>
                                            <?= $error = $validation->getError('amount_retired'); ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                          <div class="col-4">
                                <div class="form-group">
                                    <label for="subject">Balance <small>(If any)</small> </label>
                                    <input type="number" step="0.01" placeholder="Balance" name="balance" class="form-control" >
                                    <div class="invalid-feedback">
                                        Please enter a amount
                                    </div>
                                    <?php if($validation->getError('balance')) {?>
                                        <div class='text-danger mt-2'>
                                            <?= $error = $validation->getError('balance'); ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="subject">Attachment(s)</label>
                                    <input type="file" name="attachments[]" multiple class="form-control-file">
                                    <div class="invalid-feedback">
                                        Please enter a amount
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="snow-editor">Purpose</label>
                            <div id="snow-editor" class="form-control body" style="height: 100px;"></div>
                            <div class="invalid-feedback">
                              Please enter a description.
                            </div>
                            <?php if($validation->getError('purpose')) {?>
                              <div class='text-danger mt-2'>
                                <?= $error = $validation->getError('purpose'); ?>
                              </div>
                            <?php }?>
                            <textarea name="purpose" style="display:none" id="hiddenArea"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3 contractor-container">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                          <button class="btn btn-sm btn-primary add-line"> <i class="ti-plus mr-2"></i> Add Line</button>
                        </div>
                      </div>
                      <div class="row mb-2 contractor-container" id="products">
                        <div class="item col-md-12">
                          <i class="ti-trash text-danger float-right remove-line" style="cursor: pointer;"></i>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">Receipt No.</label>
                                <input type="text" placeholder="Receipt No" name="receiptNo[]" class="form-control">
                                <?php if ($validation->getError('receiptNo')): ?>
                                  <div class="text-danger">
                                    <?= $validation->getError('receiptNo') ?>
                                  </div>
                                <?php endif; ?>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="date[]" class="form-control">
                                <?php if ($validation->getError('date')): ?>
                                  <div class="text-danger">
                                    <?= $validation->getError('date') ?>
                                  </div>
                                <?php endif; ?>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">Amount</label>
                                <input placeholder="Amount" type="number" step="0.01" name="amount[]" class="form-control">
                                <?php if ($validation->getError('amount')): ?>
                                  <div class="text-danger">
                                    <?= $validation->getError('amount') ?>
                                  </div>
                                <?php endif; ?>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">Remark</label>
                                <textarea placeholder="Remark" name="remark[]" style="resize: none;" class="form-control"></textarea>
                                <?php if ($validation->getError('remark')): ?>
                                  <div class="text-danger">
                                    <?= $validation->getError('remark') ?>
                                  </div>
                                <?php endif; ?>
                              </div>
                            </div>

                          </div>


                        </div>
                      </div>

                        <div class="row g-3">
                            <div class="col-lg-12 offset-lg-12 d-flex justify-content-center">
                                <div class="form-group mt-2">
                                    <button type="submit" class="ladda-button ladda-button-demo btn-block btn btn-primary " dir="ltr" data-style="zoom-in"">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('extra-scripts'); ?>
<script src="/assets/libs/select2/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        let quill = new Quill ();
      $(document).on('click', '.add-line', function(e){
        e.preventDefault();
        let new_selection = $('.item').first().clone();
        $('#products').append(new_selection);
        //$(".select-contractor").select2();
        $('.select-contractor').attr('data-toggle', 'select2');
      });

      $(document).on('click', '.remove-line', function(e){
        e.preventDefault();
        $(this).closest('.item').remove();
      });

        $("#training-form").on("submit",function(){
          let editor = document.querySelector('#snow-editor');
          let html = editor.children[0].innerHTML;
          $("#hiddenArea").val(html);
        })
    });
</script>
<?= $this->endSection(); ?>




