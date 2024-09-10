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
            <li class="breadcrumb-item active">Manage Employee</li>
          </ol>

        </div>
        <h4 class="page-title">Manage Employee</h4>
      </div>
    </div>
  </div>
  <!-- end page title -->

  <div class="row" style="margin-top: -50px">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <h5 class="modal-header">Edit <?= $employee['employee_f_name'] ?? null  ?>'s Profile</h5>

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
          <form action="<?= site_url('update-employee-profile') ?>" method="post">
            <?php $validation = \Config\Services::validation(); ?>
            <?= csrf_field() ?>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Surname <sup class="text-danger">*</sup></label>
                  <input type="text" name="surname" placeholder="Surname" value="<?= $employee['employee_l_name'] ?? null  ?>" class="form-control">
                  <?php if ($validation->getError('surname')): ?>
                    <div class="text-danger">
                      <?= $validation->getError('surname') ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">First Name <sup class="text-danger">*</sup></label>
                  <input type="text" name="firstName" placeholder="First Name" value="<?= $employee['employee_f_name'] ?? null  ?>" class="form-control">
                  <?php if ($validation->getError('firstName')): ?>
                    <div class="text-danger">
                      <?= $validation->getError('firstName') ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Other Names <sup class="text-danger">*</sup></label>
                  <input type="text" name="otherNames" placeholder="Other Names" value="<?= $employee['employee_o_name'] ?? null  ?>" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Gender <sup class="text-danger">*</sup></label>
                  <div class="form-check mb-2 form-check-success">
                    <input  name="gender" class="form-check-input" value="Male" type="radio" <?= $employee['employee_sex'] == 'Male' ? 'checked' : null  ?> >
                    <label class="form-check-label" >Male</label>
                  </div>
                  <div class="form-check mb-2 form-check-success">
                    <input   name="gender" class="form-check-input" value="Female" type="radio" <?= $employee['employee_sex'] == 'Female' ? 'checked' : null  ?> >
                    <label class="form-check-label" >Female</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Date of Birth <sup class="text-danger">*</sup></label>
                  <input type="date" name="dateOfBirth" placeholder="Date of Birth" value="<?= isset($employee['employee_dob']) ?  date('Y-m-d', strtotime($employee['employee_dob'])) : date('Y-m-d')  ?>" class="form-control">
                  <?php if ($validation->getError('dateOfBirth')): ?>
                    <div class="text-danger">
                      <?= $validation->getError('dateOfBirth') ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Email Address <sup class="text-danger">*</sup></label>
                  <input readonly type="email" name="email" placeholder="Email Address" value="<?= $employee['employee_mail'] ?? null   ?>" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Mobile No. <sup class="text-danger">*</sup></label>
                  <input type="text" name="mobileNo" placeholder="Mobile No." value="<?= $employee['employee_phone'] ?? ''  ?>" class="form-control">

                  <?php if ($validation->getError('mobileNo')): ?>
                    <div class="text-danger">
                      <?= $validation->getError('mobileNo') ?>
                    </div>
                  <?php endif; ?></div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label for="">Address <sup class="text-danger">*</sup></label>
                  <textarea name="address" style="resize: none;" placeholder="Address" class="form-control"><?= $employee['employee_address'] ?? null  ?></textarea>
                  <?php if ($validation->getError('address')): ?>
                    <div class="text-danger">
                      <?= $validation->getError('address') ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">User Type <sup class="text-danger">*</sup></label>
                  <select name="userType"  class="form-control">
                    <option value="1"  <?= $employee['user_type'] == 1 ? 'selected' : null  ?>  >Employee</option>
                    <option value="2" <?= $employee['user_type'] == 2 ? 'selected' : null  ?> >Moderator</option>
                  </select>
                  <?php if ($validation->getError('userType')): ?>
                    <div class="text-danger">
                      <?= $validation->getError('userType') ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Directorate <sup class="text-danger">*</sup></label>
                  <select name="directorate"  class="form-control" id="department" onchange="get_positions()">
                    <option disabled selected>--Select--</option>
                    <?php foreach ($departments as $department):  ?>
                      <option value="<?= $department['dpt_id'] ?>" <?= $employee['employee_department_id'] == $department['dpt_id'] ? 'selected' : null  ?>><?= $department['dpt_name'] ?? null  ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?php if ($validation->getError('directorate')): ?>
                    <div class="text-danger">
                      <?= $validation->getError('directorate') ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Position/Title/Section <sup class="text-danger">*</sup></label>
                  <select name="section"  class="form-control" id="position">
                    <option disabled selected>--Select--</option>
                    <?php foreach ($positions as $position):  ?>
                      <option value="<?= $position['pos_id'] ?>" <?= $employee['employee_position_id'] == $position['pos_id'] ? 'selected' : null  ?>><?= $position['pos_name'] ?? null  ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?php if ($validation->getError('section')): ?>
                    <div class="text-danger">
                      <?= $validation->getError('section') ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 d-flex justify-content-center">
                <input type="hidden" name="employee" value="<?= $employee['employee_id'] ?>">
                <button class="btn-primary btn" type="submit">Save changes</button>
              </div>
            </div>
          </form>




        </div> <!-- end card-body -->
      </div> <!-- end card-->
    </div> <!-- end col -->


  </div>







  <?= $this->endSection() ?>

  <?= $this->section('extra-scripts') ?>

  <script>
    $(document).ready(function(){


    });
    function get_positions(){
      let department_id =  $("#department").val();
      $.ajax({
        url: '<?php echo site_url('fetch-positions') ?>',
        type: 'post',
        data: {
          'dpt_id': department_id,
        },
        dataType: 'json',
        success:function(response){
          $("#position").empty();
          $("#position").append('<option selected disabled> </option>');
          for (var i=0; i<response.length; i++) {
            $("#position").append('<option value="' + response[i].pos_id + '">' + response[i].pos_name + '</option>');
          }
        }
      });

    }
  </script>
  <?= $this->endSection() ?>
