<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="modal-header">

        <div class="modal-title text-uppercase">Request Trail
        </div>
      </div>
      <div class="card-body">
        <div class="hori-timeline">
          <div class="owl-carousel owl-theme navs-carousel events owl-loaded owl-drag"
               id="timeline-carousel">
            <div class="owl-stage-outer">
              <div class="owl-stage"
                   style="transform: translate3d(-587px, 0px, 0px); transition: all 0.25s ease 0s; width: 1761px;">
                <div class="owl-item" style="width: 293.5px;">
                  <div class="item event-list">
                    <div>
                      <div class="event-date">
                        <div class="text-primary mb-1">Submitted By</div>
                        <h5 class="mb-4">
                          <?= $requested_by->employee_f_name ?? '' ?> <?= $requested_by->employee_l_name ?? '' ?> <?= $requested_by->employee_o_name ?? '' ?>
                        </h5>
                      </div>
                      <div class="d-flex justify-content-center">
                        <img src="/assets/images/users/<?= $requested_by->employee_avatar ?? 'avatar.png' ?>"
                             style="height: 64px; width: 64px;" alt=""
                             class="rounded-circle avatar-sm">
                        <i class="bx bx-right-arrow-circle font-size-22"
                           style="margin-top: 15px; margin-left: 10px;"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <?php foreach($requests as $key => $auth): ?>
                  <?php $pendStatus = $auth->rc_status ?>
                  <?php $currentDeskId = $auth->rc_emp_id ?>
                  <?php if($key+1 ==  count($requests) ): ?>
                    <div class="owl-item " style="width: 293.5px;">
                      <div class="item event-list <?=  $auth->rc_status == 0 ? 'active' : null ?>">
                        <div>
                          <div class="event-date">
                            <div class="text-primary mb-1"><?= date('d M, Y h:ia', strtotime($auth->created_at)) ?></div>
                            <h5 class="mb-4">
                              <?= $auth->employee_f_name ?? '' ?> <?= $auth->employee_l_name ?? '' ?> <?= $auth->employee_o_name ?? '' ?>
                              <br>
                              <small>( <?= $auth->pos_name ?? '' ?>, <?= $auth->dpt_name ?? '' ?>)</small>
                            </h5>
                          </div>
                          <div class="event-down-icon">
                            <?php if($auth->rc_status == 0) :?>
                              <i class="bx bxs-hourglass-top h1 text-secondary down-arrow-icon"></i>
                              <?php $pendingId = $auth->rc_id ?? 0 ?>

                            <?php elseif($auth->rc_status == 1) : ?>
                              <i class="bx bx-check-circle h1 text-success down-arrow-icon"></i>
                            <?php else : ?>
                              <i class="bx bx-x-circle h1 text-warning down-arrow-icon"></i>
                            <?php endif; ?>
                          </div>
                          <div class="d-flex justify-content-center">
                            <img src="/assets/images/users/avatar.png"
                                 style="height: 64px; width: 64px;" alt=""
                                 class="rounded-circle avatar-sm">
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php else : ?>
                    <div class="owl-item " style="width: 293.5px;">
                      <div class="item event-list">
                        <div>
                          <div class="event-date">
                            <div class="text-primary mb-1"> <?= date('d M, Y h:ia', strtotime($auth->created_at)) ?></div>
                            <h5 class="mb-4">
                              <?= $auth->employee_f_name ?? '' ?> <?= $auth->employee_l_name ?? '' ?> <?= $auth->employee_o_name ?? '' ?>
                              <br>
                              <small>( <?= $auth->pos_name ?? '' ?>, <?= $auth->dpt_name ?? '' ?>)</small>
                            </h5>
                          </div>
                          <div class="event-down-icon">
                            <?php if($auth->rc_status == 0): ?>
                              <i class="bx bxs-hourglass-top h1 text-secondary down-arrow-icon"></i>
                              <?php $pendingId = $auth->rc_id ?>
                            <?php elseif($auth->rc_status == 1): ?>
                              <i class="bx bx-check-circle h1 text-success down-arrow-icon"></i>
                            <?php else: ?>
                              <i class="bx bx-x-circle h1 text-warning down-arrow-icon"></i>
                            <?php endif; ?>
                          </div>
                          <div class="d-flex justify-content-center">
                            <img src="/assets/images/users/avatar.png"
                                 style="height: 64px; width: 64px;" alt=""
                                 class="rounded-circle avatar-sm">
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end card -->
  </div>
</div>
