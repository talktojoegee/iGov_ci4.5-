<?=$this->extend('layouts/master');?>
<?=$this->section('extra-styles'); ?>
<link href="/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
<?=$this->endSection() ?>
<?=$this->section('content');?>
<div class="container-fluid">
  <?php $validation =  \Config\Services::validation(); ?>
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box">
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div>
        <h4 class="page-title">Profile</h4>
      </div>
    </div>
  </div>
  <!-- end page title -->



  <div class="row">
    <div class="col-md-12 col-sm-12">
      <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?= session()->get('success') ?>
        </div>
      <?php endif; ?>
      <?php if(session()->has('error')): ?>
        <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?= session()->get('error') ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-lg-4 col-xl-4">
      <div class="card">
        <div class="card-body">
          <div class="text-center">
            <img src="/assets/images/users/<?= $user['employee']['employee_avatar'] ?? 'avatar.png' ?>" class="rounded-circle avatar-lg img-thumbnail"
                 alt="profile-image">

            <h4 class="mb-0"><?=$user['user_name']?></h4>
            <p class="text-muted"><?=$user['position']['pos_name'] ?? '' ?>, <?=$user['department']['dpt_name'] ?? '' ?></p>
          </div>

          <div class="text-end mt-3">
            <h4 class="font-13 text-uppercase">Information :</h4>
            <p class="text-muted mb-2 font-13"><strong>Directorate :</strong> <span class="ms-2"><?=$user['department']['dpt_name']?></span></p>
            <p class="text-muted mb-2 font-13"><strong>Section/Unit :</strong> <span class="ms-2"><?=$user['position']['pos_name']?></span></p>
            <p class="text-muted mb-2 font-13"><strong>Sub-section :</strong> <span class="ms-2"><?=$user['position']['pos_name']?></span></p>

            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2"><?=$user['employee']['employee_phone']?></span></p>

            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2"><?=$user['employee']['employee_mail']?></span></p>
            <p class="text-muted mb-2 font-13"><strong>Date of Birth :</strong> <span class="ms-2"> <?php $date = date_create($user['employee']['employee_dob']);
                echo date_format($date,"d F");
                ?></span></p>

            <p class="text-muted mb-1 font-13"><strong>Address :</strong> <span class="ms-2"><?=$user['employee']['employee_address']?></span></p>
            <p class="text-muted mb-1 font-13"><strong>Date Added :</strong> <span class="ms-2"><?php $date = date_create($user['employee']['employee_date']);
                echo date_format($date,"d F Y");
                ?></span></p>
          </div>
        </div>
      </div> <!-- end card -->

    </div> <!-- end col-->
<?php if($_SESSION['user_id'] == $user['user_id']): ?>
    <div class="col-lg-8 col-xl-8">
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs nav-bordered nav-justified" >
            <li class="nav-item" onclick="showSignature()">
              <a href="#home-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link active" >
                e-Signature
              </a>
            </li>
            <li class="nav-item" onclick="showToken()">
              <a href="#profile2" data-bs-toggle="tab" aria-expanded="false" class="nav-link" >
                e-Token
              </a>
            </li>
            <li class="nav-item" onclick="showOfficialStamps()">
              <a href="javascript:void(0);" data-bs-toggle="tab" aria-expanded="false" class="nav-link" >
                Official Stamps
              </a>
            </li>
            <li class="nav-item" onclick="showSecurity()">
              <a href="#security" data-bs-toggle="tab" aria-expanded="false" class="nav-link" >
                Security
              </a>
            </li>
            <li class="nav-item" onclick="showSettings()">
              <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link " >
                Settings
              </a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="signature" role="tabpanel">
              <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4">
                  <div class="form-group">
                    <h6 class="mt-3" style="color: #ff0000;">Important Notice </h6>
                    <p>By using this to create your digital signature, you agree to the following:</p>
                    <ol>
                      <li>Legally Binding: Your digital signature is legally equivalent to your handwritten signature.</li>
                      <li>Authorization: You authorize its use for all relevant transactions and documents within this application.</li>
                      <li>Confidentiality: Your signature will be securely stored; protect your account to prevent unauthorized use.</li>
                      <li>Verification: Actions signed with your digital signature are presumed authorized by you.</li>
                      <li>Irrevocability: Digital signatures cannot be easily revoked or altered; review carefully before signing.</li>
                      <li>Compliance: Ensure your use complies with all applicable laws.</li>
                    </ol>
                    <p>By proceeding, you accept these terms and conditions.</p>
                  </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-8">
                  <?php if ($user['employee']['employee_signature']): ?>
                    <div class="card mb-1 shadow-none border" >
                      <a href="javascript:void(0)" class="text-center" data-toggle="modal" data-target="#standard-modal">
                        <img src="/uploads/signatures/<?=$user['employee']['employee_signature']?>" alt="image" class="img-fluid rounded p-1" width="200">
                      </a>
                    </div>
                      <?php if ($user['signature_ver'] && $user['signature_ver']['ver_status'] == 0):?>
                        <div class="alert alert-warning mt-3" role="alert">
                          <i class="mdi mdi-alert-circle-outline mr-2"></i>
                          Verify your signature by entering your e-signature token. Click <a href="javascript:void(0)" class="alert-link" data-toggle="modal" data-target="#standard-modal-2">here</a> to enter the code.
                        </div>
                      <?php else:?>
                        <div class="alert alert-success mt-3" role="alert">
                          <i class="mdi mdi-check-all mr-2"></i>
                          Your E-Signature is verified.
                        </div>
                      <?php endif;?>
                  <?php else:?>
                    <div class="card mb-1 shadow-none border">
                      <a href="javascript:void(0)" class="p-2 text-center" data-toggle="modal" data-target="#standard-modal">
                        No E-Signature Set Up
                      </a>
                    </div>
                  <?php endif;?>

                  <p class="mt-3 ml-4">Kindly use the blank space surrounded by the dotted lines to draw your signature.</p>

                  <form action="#" method="post" enctype="multipart/form-data" class="mt-4">

                    <div class="form-group mt-3">
                      <div class="form-group d-flex justify-content-start" style="margin-left: 100px;">
                        <label for="">Choose Pen Color</label>
                        <input type="color"  id="penColor">
                      </div>
                      <div class="d-flex justify-content-center ">
                       <p></p>
                        <div class="form-group">
                          <canvas id="signaturePad" style="border: 1px dotted #000000; padding: 5px;"></canvas>
                          <input type="hidden" name="image" id="image">
                        </div>
                      </div>

                    </div>
                    <div class="form-group mt-3 d-flex justify-content-center">
                      <div class="btn-group">
                        <button type="button" id="clearPad"  class="btn btn-danger">Clear <i class="bx bxs-eraser"></i> </button>
                        <button type="button" id="saveSignature"  class="btn btn-primary">Submit Signature <i class="bx bx-edit-alt"></i> </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane " id="token">
              <div>
                <form  class="form" id="manage-token-form" class="needs-validation" novalidate onsubmit="submitToken(); return false;">
                    <div class="form-group">
                      <label for="token-symbol">Token </label>
                      <input type="password" placeholder="Choose e-signature token" value="<?= !empty($user['token']['token_symbol']) ? $user['token']['token_symbol'] : null ?>" class="form-control" name="token_symbol" id="token-symbol" required/>
                      <div class="invalid-feedback">
                        Please enter a token symbol.
                      </div>
                      <span class="help-block">
                        <small>Please enter e-signature token you can use in place of the OTP verification code.</small>
                      </span>
                    </div>
                  <div class="col-12 mt-0">
                    <button class="btn btn-success waves-effect waves-light btn-sm">Submit Token</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane " id="officialStamps">
              <?php if (!empty($official_stamps)): ?>
                <div class="card-box">
                  <h5 class="card-title font-16 mb-3">Official Stamps</h5>
                  <?php foreach ($official_stamps as $stamp): ?>
                    <div class="card mb-0 mt-3 shadow-none border" >
                      <a href="javascript:void(0)" class="text-center">
                        <img src="/uploads/stamps/<?=$stamp['stamp_image']?>" alt="image" class="img-fluid rounded p-1" width="200">
                      </a>
                    </div>
                    <span class="help-block">
                      <small><?=$stamp['stamp_type']?></small>
                    </span>
                  <?php endforeach;?>
                </div>
              <?php endif; ?>
            </div><div class="tab-pane " id="security">

              <form action="<?= site_url('change-password') ?>" method="post">
                <?= csrf_field() ?>
                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-lock me-1"></i> Change Password</h5>
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label for="firstname" class="form-label">Current Password</label>
                      <input name="currentPassword" type="password" class="form-control"  placeholder="Enter Current Password">
                      <?php if ($validation->getError('currentPassword')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('currentPassword') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="lastname" class="form-label">New Password</label>
                      <input type="password" name="newPassword" class="form-control"  placeholder="Choose New Password">
                      <?php if ($validation->getError('newPassword')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('newPassword') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="lastname" class="form-label">Re-type Chosen Password</label>
                      <input type="password" name="reTypePassword" class="form-control"  placeholder="Re-type Password">
                      <?php if ($validation->getError('reTypePassword')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('reTypePassword') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Change Password</button>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="profileUpdate">
              <form action="<?= route_to('update-profile') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="firstname" class="form-label">First Name</label>
                      <input readonly type="text" class="form-control" name="firstName" value="<?= $user['employee']['employee_f_name'] ?? ''  ?>" placeholder="Enter first name">
                      <?php if ($validation->getError('firstName')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('firstName') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="lastname" class="form-label">Last Name</label>
                      <input readonly type="text" class="form-control" name="lastName" value="<?= $user['employee']['employee_l_name'] ?? ''  ?>" placeholder="Enter last name">
                      <?php if ($validation->getError('lastName')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('lastName') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="lastname" class="form-label">Other Names</label>
                      <input readonly type="text" class="form-control" name="otherNames" value="<?= $user['employee']['employee_o_name'] ?? ''  ?>" placeholder="Enter other names">
                      <?php if ($validation->getError('otherNames')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('otherNames') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="lastname" class="form-label">Mobile No.</label>
                      <input type="text" class="form-control" name="mobileNo" value="<?= $user['employee']['employee_phone'] ?? ''  ?>" placeholder="Enter other names">
                      <?php if ($validation->getError('mobileNo')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('mobileNo') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="dob" class="form-label">Date of Birth</label>
                      <input readonly type="date" class="form-control" name="dob" value="<?php $date = date_create($user['employee']['employee_dob']);
                      echo date_format($date,"Y-m-d");
                      ?>" placeholder="DOB">
                      <?php if ($validation->getError('dob')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('dob') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="lastname" class="form-label">Profile Picture</label>
                      <input type="file" class="form-control-file" name="file" accept="image/png, image/gif, image/jpeg">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="mb-3">
                      <label for="userbio" class="form-label">Address</label>
                      <textarea name="address" class="form-control" rows="4" placeholder="Type your address here..."><?= $user['employee']['employee_address'] ?? '' ?></textarea>
                      <?php if ($validation->getError('address')): ?>
                        <div class="text-danger">
                          <?= $validation->getError('address') ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                </div>
              </form>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>


  </div>





</div>
<!-- Standard modal content -->
<div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form id="upload-signature-form">
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">E-Signature Setup</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <h6>Signature Scan</h6>
          <p>To setup your digital signature, please upload a clear scan of your signature against a white plain background below.</p>
          <hr>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <div class="form-control-wrap">
                  <input id="file" type="file" data-plugins="dropify" name="file" accept=".tif,.tiff,.bmp,.jpg,.jpeg,.gif,.png"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="save-btn">Save Changes</button>
          <button type="submit" class="btn btn-primary" id="save-btn-loading" hidden disabled>
            <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Please wait...
          </button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="standard-modal-2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="verify-signature-form" class="needs-validation" novalidate>
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">Verify E-Signature</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="ver-code">E-Signature Token or OTP</label>
                <input type="password" placeholder="Enter e-signature token" class="form-control" name="ver_code" id="ver-code" required/>
                <div class="invalid-feedback">
                  Please enter e-signature token.
                </div>
                <!--<span class="help-block">
                  <small>You can also generate a new verification code <a href="javascript:void(0)">here</a>.</small>
                </span> -->
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="save-btn">Submit</button>
          <button type="submit" class="btn btn-primary" id="save-btn-loading" hidden disabled>
            <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Please wait...
          </button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="standard-modal-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="confirm-security-token-form" class="needs-validation" novalidate>
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">Confirm Security Token</h4>
          <!--            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="password">IGOV Password</label>
                <input type="password" class="form-control" name="password" id="password" required/>
                <div class="invalid-feedback">
                  Please enter your password.
                </div>
                <span class="help-block">
                    <small>Please enter your password to confirm it is you creating this token.</small>
                  </span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer"
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <button type="button" onclick="confirmSecurityToken()" class="btn btn-primary" id="save-btn">Submit</button>
    </div>
    <input type="hidden" id="post-id">
    <input type="hidden" id="e-signature">
    </form>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<div class="modal fade" id="transactionPasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger" style="border-radius: 0px;">
        <h4 class="modal-title text-center " id="myModalLabel2">Confirm You're the one.</h4>
        <button type="button"  class="btn-close text-white" style="margin: 0px; padding: 0px;" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form autocomplete="off" action="#" method="post" id="addNewUser" data-parsley-validate="">
          @csrf
          <div class="form-group">
            <p class="text-wrap">Our system thinks someone else is trying to change your digital signature. Kindly confirm that you're the one carrying out this operation by entering your transaction password.</p>
          </div>
          <div class="form-group mt-1">
            <label for="">Transaction Password</label>
            <input type="password" id="transactionPassword" name="transactionPassword" placeholder="
Enter Transaction Password" class="form-control">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
            <button type="button" id="confirmTransactionPassword" class="btn btn-danger waves-effect waves-light">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
</div><!-- /.modal -->

</div>

<?=$this->endSection();?>
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
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
<script src="/assets/js/axios.min.js"></script>
<?=view('pages/employee/_employee-scripts.php')?>
<script>
  let canvas = document.querySelector("canvas");
  let canvasHandler = document.getElementById('signaturePad');
  let colorPicker = document.getElementById('penColor');
  let signaturePad = new SignaturePad(canvas);
  let url = "<?= route_to('digital-signature') ?>";
  let base64String = signaturePad.toDataURL();//.split(',')[1];
  let signature = null;
  let currentColor = colorPicker.value;
  signaturePad.penColor = currentColor;

  signaturePad.addEventListener('beginStroke', ()=>{
    colorPicker = document.getElementById('penColor');
     currentColor = colorPicker.value;
    signaturePad.penColor = currentColor;
    //console.log("Signature started");
  }, { once: true });
/*
  colorPicker.addEventListener('input', (event) => {
    currentColor = event.target.value;
  });
  canvasHandler.addEventListener('mousedown', (event) => {
    alert('Hello');
    signaturePad.penColor = currentColor; // Set the pen color before starting to draw

  });

  // Override the default pen color when drawing
  signaturePad.onBegin = () => {
    console.log('Begin')
    signaturePad.penColor = currentColor;
  };
  //colorPicker.addEventListener();*/

  $(document).ready(function(){

    $('#saveSignature').on('click', function(){
      if (signaturePad.isEmpty()) {
        Swal.fire('Invalid Submission!', 'You have not signed. Use your mouse to sign within the dotted box.', 'error')
        //$('#transactionPasswordModal').modal('hide');
      }else{
       // signaturePad.addEventListener("beginStroke", () => {
          penColor = document.getElementById('penColor').value;
          signaturePad.penColor = penColor;
       // }, { once: true });

        Swal.fire({
          title: 'Token',
          text: "Our system thinks someone else is trying to change your e-signature. Kindly enter your token to confirm that you're the one.",
          input: 'password',
          showCancelButton: true,
          confirmButtonText: 'Confirm',
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
        }).then(confirm => {
          if (confirm.value) {
            //alert(confirm.value)

            let formData = new FormData()
            formData.append('token', confirm.value)
            jQuery.noConflict()
            $('#loading-modal').modal('toggle');
            $('#modalTitle').text('Processing request')
            $('#modalText').text('Hold on while we get this done.')
            $.ajax({
              url: '<?=site_url('/verify-token')?>',
              type: 'post',
              data: formData,
              success: response => {
                if (response.success) {
                  //submit e-signature
                  saveSignature();
                  //Swal.fire('Confirmed!', response.message, 'success').then(() => location.reload())
                } /*else {
                  Swal.fire('Sorry!', response.message, 'error')
                }*/
              },
              cache: false,
              contentType: false,
              processData: false,
            })

          }
        })
      }
    })




    $('#clearPad').on('click', function(){
      signaturePad.clear();
    })



    let currentImagePath = "{{url('storage/'.$user->image)}}";
    $('#clientAssignmentWrapper').hide();
    $("#clientAssignmentToggler").click(function(){
      $("#clientAssignmentWrapper").toggle();
    });


    $("#avatarPlaceholderHandler").on("change", function(e){
      e.preventDefault();
      let file = this.files[0];
      if (file) {
        let reader = new FileReader();
        reader.onload = function (event) {
          $("#avatarPlaceholder")
            .attr("src", event.target.result);
        };
        reader.readAsDataURL(file);
      }
    });


  });


  function saveSignature(){
    base64String = signaturePad.toDataURL();
    let formData = new FormData()
    formData.append('file', base64String)
    $.ajax({
      url: '<?=site_url('/submit-digitally-signed-signature')?>',
      type: 'post',
      data: formData,
      success: response => {
        if (response.success) {
          //submit e-signature
          Swal.fire('Confirmed!', response.message, 'success').then(() => location.reload())
        } else {
                  Swal.fire('Sorry!', response.message, 'error')
                }
      },
      cache: false,
      contentType: false,
      processData: false,
    })

  }

  function uploadCanvasImage() {
    const base64String = canvas.toDataURL('image/png').split(',')[1];

    if (!base64String) {
      alert('Canvas is empty or invalid image data.');
      return;
    }

    axios.post(url, { image: signaturePad })
      .then(response => {
        //console.log(response.data);
      })
      .catch(error => {
        //console.error(error);
      });
  }
  function showSignature(){
    $('#signature').show();
    $('#token').hide();
    $('#security').hide();
    $('#officialStamps').hide();
    $('#profileUpdate').hide();
  }
  function showToken(){
    $('#signature').hide();
    $('#token').show();
    $('#security').hide();
    $('#officialStamps').hide();
    $('#profileUpdate').hide();
  }
  function showOfficialStamps(){
    $('#signature').hide();
    $('#token').hide();
    $('#security').hide();
    $('#officialStamps').show();
    $('#profileUpdate').hide();
  }
  function showSecurity(){
    $('#signature').hide();
    $('#token').hide();
    $('#security').show();
    $('#officialStamps').hide();
    $('#profileUpdate').hide();
  }
  function showSettings(){
    $('#signature').hide();
    $('#token').hide();
    $('#security').hide();
    $('#officialStamps').hide();
    $('#profileUpdate').show();
  }


</script>

<?=view('pages/employee/_employee-scripts.php')?>
<?= $this->endSection(); ?>
