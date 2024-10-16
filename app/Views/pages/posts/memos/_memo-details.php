<div class="col-12" id="internalMemoWrapper">
  <div class="card d-block">
    <div class="card-body">
      <div class="row mb-3">
        <div class="auth-logo" style="margin: 0 auto">
          <div class="logo logo-dark">
                <span class="logo-lg">
                  <img src="/uploads/organization/<?= $memo['organization']['org_logo'] ?>" height="100">
                </span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="text-center" style="margin: 0 auto;">
          <h3 class="mt-1"><?= $memo['organization']['org_name'] ?></h3>
          <h5 class="mt-1"><?= $memo['organization']['org_address'] ?></h5>
        </div>
      </div>
      <div class="row">
        <div class="text-center" style="margin: 0 auto;">
          <h3 class="text-uppercase">
            <u>Internal Memo</u>
          </h3>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-6">
          <div class="float-left">
            <h5 class="font-size-14">
              Reference No: <?= $memo['p_ref_no'] ?>
            </h5>
          </div>
        </div>
        <div class="col-6">
          <div class="float-right">
            <h5 class="font-size-14">
              <?php
              $date = date_create($memo['p_date']);
              echo date_format($date, "d F Y");
              ?>
            </h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="float-left">
            <h5 class="font-size-14 mb-0">From:</h5>
            <?= esc($memo['written_by']['user_name']) ?>
            (<?= esc($memo['written_by']['position']['pos_name']) ?>,
            <?= esc($memo['written_by']['department']['dpt_name'] ?? 'N/A') ?>)
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="float-left">
            <h5 class="font-size-14 mb-0">To:</h5>
            <?php if (!empty($memo['recipients'])): ?>
              <?php foreach ($memo['recipients'] as $recipient): ?>
                <?= $recipient['user_name'] ?> - <?= $recipient['pos_name'] ?> (<?= $recipient['dpt_name'] ?>)
                <br>
              <?php endforeach; ?>
            <?php else: ?>
              <?php foreach ($memo['external_recipients'] as $external_recipient): ?>
                <?= $external_recipient ?> <br>
              <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="float-left">
            <h5 class="font-size-14 mb-0">Through:</h5>
            <?php if (!empty($memo['reviewers'])): ?>
              <?php foreach ($memo['reviewers'] as $reviewer): ?>
                <?= $reviewer['user_name'] ?> - <?= $reviewer['pos_name'] ?> (<?= $reviewer['dpt_name'] ?>)
                <br>
              <?php endforeach; ?>
            <?php else: ?>
              <p>N/A</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <h3 class="title text-center text-uppercase"><u><?= $memo['p_subject'] ?></u></h3>
          <p>
            <?= $memo['p_body'] ?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 text-left">
          <p class="mt-2 mb-1 text-muted">Signed By</p>
          <?php if ($memo['p_status'] == 2 && $memo['p_signature']): ?>
            <img src="/uploads/signatures/<?= $memo['p_signature'] ?>" height="80">
            <h5 class="font-size-14">
              <?= $memo['signed_by']['user_name'] ?? '' ?> <br>
              (<?= $memo['signed_by']['position']['pos_name'] ?? '' ?>
              , <?= $memo['signed_by']['department']['dpt_name'] ?? '' ?>)
            </h5>
          <?php elseif ($memo['p_status'] == 4): ?>
            <p class="mt-2 mb-1 text-muted">This memo is rejected</p>
          <?php else: ?>
            <p class="mt-2 mb-1 text-muted">This memo is unsigned</p>
          <?php endif; ?>
        </div>
        <div class="col-lg-4"></div>

        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>
</div>
