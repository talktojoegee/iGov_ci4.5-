<?php
echo view('templates/_header.php');
$type = session()->get('type');
$permissions = session()->get('permissions');
$g_drive_permission = \App\Enums\Permissions::G_DRIVE->value;
$fleet_setup_permission = \App\Enums\Permissions::FLEET_SETUP->value;
$fleet_maintenance_permission = \App\Enums\Permissions::FLEET_MAINTENANCE->value;
$procurement_permission = \App\Enums\Permissions::PROCUREMENT->value;
$contractors_permission = \App\Enums\Permissions::CONTRACTORS->value;
$finance_permission = \App\Enums\Permissions::FINANCE->value;
$cash_retirement_permission = \App\Enums\Permissions::CASH_RETIREMENT->value;
$programs_permission = \App\Enums\Permissions::PROGRAMS->value;
$projects_permission = \App\Enums\Permissions::PROJECTS->value;
?>


<body data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": false}'>
<?php $firstTime = null;
if ($firstTime): ?>
  <div class="se-pre-con"></div>
<?php endif; ?>
<!-- Begin page -->
<div id="wrapper">

  <!-- Topbar Start -->
  <div class="navbar-custom">
    <div class="container-fluid">
      <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown d-inline-block d-lg-none">
          <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown"
             href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i class="fe-search noti-icon"></i>
          </a>
          <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
            <form class="p-3">
              <input type="text" class="form-control" placeholder="Search ..."
                     aria-label="Recipient's username">
            </form>
          </div>
        </li>
        <li class="dropdown d-none d-lg-inline-block">
          <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
             href="#">
            <i class="fe-maximize noti-icon"></i>
          </a>
        </li>
        <li class="dropdown notification-list topbar-dropdown">
          <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"
             role="button" aria-haspopup="false" aria-expanded="false">
            <i class="fe-bell noti-icon"></i>
            <span id="count" class="badge badge-danger rounded-circle noti-icon-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-lg">
            <!-- item-->
            <div class="dropdown-item noti-title">
              <h5 class="m-0">
                <span class="float-right">
                </span>
                Notifications
              </h5>
            </div>
            <div id="unseen-notifications" class="noti-scroll" data-simplebar
                 style="max-height: 20em; overflow-y: auto"></div>
        </li>
        <li class="dropdown notification-list topbar-dropdown">
          <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
             href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <!--						<img src="../assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">-->
            <img src="/assets/images/users/<?= $_SESSION['avatar'] ?? 'avatar.png' ?>" alt="user-image"
                 class="rounded-circle">
            <span class="pro-user-name ml-1"><?= $username ?? '' ?> <i
                class="mdi mdi-chevron-down"></i></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
            <!-- item-->
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>

            <!-- item-->
            <a href="<?= site_url('profile/' . $_SESSION['user_employee_id']) ?>"
               class="dropdown-item notify-item">
              <i class="fe-user"></i>
              <span>My Account</span>
            </a>
            <?php if ($type == 3): ?>
              <a href="<?= site_url('office') ?>" class="dropdown-item notify-item">
                <i class="fe-arrow-left"></i>
                <span>Switch to Admin</span>
              </a>
            <?php endif ?>
            <div class="dropdown-divider"></div>

            <!-- item-->
            <a href="/logout" class="dropdown-item notify-item text-danger">
              <i class="fe-log-out"></i>
              <span>Logout</span>
            </a>

          </div>
        </li>
        <!--				<li class="dropdown notification-list">-->
        <!--					<a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">-->
        <!--						<i class="fe-settings noti-icon"></i>-->
        <!--					</a>-->
        <!--				</li>-->
      </ul>

      <!-- LOGO -->
      <div class="logo-box">
        <a href="/" class="logo logo-dark text-center">
          <span class="logo-sm">
            <img src="../assets/images/logo-sm.png" alt="" height="50">
            <span class="logo-lg-text-light">iGov</span>
          </span>
          <span class="logo-lg">
            <img src="../assets/images/logo-sm.png" alt="" height="50">
            <span class="logo-lg-text-light">IG</span>
          </span>
        </a>
        <a href="/" class="logo logo-light text-center">
          <span class="logo-sm">
            <img src="../assets/images/logo-sm.png" alt="" height="50">
          </span>
          <span class="logo-lg">
            <img src="../assets/images/logo-sm.png" alt="" height="50">
          </span>
        </a>
      </div>
      <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
          <button class="button-menu-mobile waves-effect waves-light">
            <i class="fe-menu"></i>
          </button>
        </li>
        <li>
          <!-- Mobile menu toggle (Horizontal Layout)-->
          <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
            <div class="lines">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
          <!-- End mobile menu toggle-->
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- end Topbar -->

  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">

    <div class="h-100" data-simplebar>

      <!-- User box -->
      <div class="user-box text-center">
        <!--				<img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"-->
        <!--					 class="rounded-circle avatar-md">-->
        <div class="dropdown">
          <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
             data-toggle="dropdown">
            <span class="pro-user-name ml-1"><?= ucfirst($username ?? ''); ?></span>
          </a>

          <div class="dropdown-menu user-pro-dropdown">

            <!-- item-->
            <a href="<?= site_url('my-account') ?>" class="dropdown-item notify-item">
              <i class="fe-user mr-1"></i>
              <span>My Account</span>
            </a>
            <?php if ($type == 3): ?>
              <a href="<?= site_url('office') ?>" class="dropdown-item notify-item">
                <i class="fe-arrow-left"></i>
                <span>Switch to Admin</span>
              </a>
            <?php endif ?>

            <!-- item-->
            <a href="/logout" class="dropdown-item notify-item">
              <i class="fe-log-out mr-1"></i>
              <span>Logout</span>
            </a>

          </div>
        </div>
      </div>

      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <ul id="side-menu">
          <li class="menu-title">Menu</li>
          <li>
            <a href="/">
              <i data-feather="airplay"></i>
              <span> Dashboard </span>
            </a>
          </li>
          <li>
            <a href="#messaging" data-toggle="collapse">
              <i data-feather="message-square"></i>
              <span> e-Messaging </span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="messaging">
              <ul class="nav-second-level">
                <li><a href="<?= site_url('memos'); ?>">Memo</a></li>
                <li><a href="<?= site_url('circulars'); ?>">Circular</a></li>
                <li><a href="<?= site_url('notices') ?>">Notice Board</a></li>

                <li><a href="<?= route_to('chat') ?>">Chat</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#office" data-toggle="collapse">
              <i data-feather="briefcase"></i>
              <span> e-Office </span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="office">
              <ul class="nav-second-level">
                <?php if (in_array($cash_retirement_permission, $permissions ?? [])): ?>
                  <li><a href="<?= route_to('cash-retirement'); ?>">Cash Retirement</a>
                  </li>
                <?php endif; ?>
                <li><a href="<?= site_url('/workflow-requests'); ?>">Workflow</a></li>
                <li><a href="<?= site_url('tasks'); ?>">Tasks</a></li>
                <li><a href="<?= site_url('trainings') ?>">Trainings</a></li>
                <li><a href="<?= site_url('correspondence') ?>">Correspondence</a></li>
              </ul>
            </div>
          </li>

          <?php if (in_array($fleet_setup_permission, $permissions ?? []) || in_array($fleet_maintenance_permission, $permissions ?? [])): ?>
            <li>
              <a href="#fleet" data-toggle="collapse">
                <i data-feather="truck"></i>
                <span>Manage Fleet</span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="fleet">
                <ul class="nav-second-level">
                  <?php if (in_array($fleet_setup_permission, $permissions ?? [])): ?>
                    <li><a href="<?= site_url('active-vehicles') ?>">Active Vehicles</a></li>
                    <li><a href="<?= site_url('drivers') ?>">Drivers</a></li>
                  <?php endif; ?>
                  <?php if (in_array($fleet_maintenance_permission, $permissions ?? [])): ?>
                    <li><a href="<?= site_url('renewal-schedules'); ?>">Renewal Schedule</a></li>
                    <li><a href="<?= site_url('maintenance-schedules'); ?>">Maintenance Schedule</a>
                    </li>
                    <li><a href="#">Disposed Vehicles</a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </li>
          <?php endif; ?>

          <?php if (session()->has_registry_access): ?>
            <li>
              <a href="<?= site_url('registry') ?>">
                <i data-feather="inbox"></i>
                <span> Registry </span>
              </a>
            </li>
          <?php endif; ?>

          <li>
            <a href="<?= route_to('reminder') ?>">
              <i data-feather="calendar"></i>
              <span> Reminders </span>
            </a>
          </li>
          <?php if (in_array($g_drive_permission, $permissions ?? [])): ?>
            <li>
              <a href="<?= site_url('g-drive') ?>">
                <i data-feather="cloud"></i>
                <span> GDrive </span>
              </a>
            </li>
          <?php endif; ?>

          <li>
            <a href="<?= route_to('manage-programs') ?>">
              <i data-feather="calendar"></i>
              <span>Programs & Activities</span>
            </a>
          </li>
          <li>
            <a href="#procurementMenu" data-toggle="collapse">
              <i data-feather="grid"></i>
              <span> Procurement </span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="procurementMenu">
              <ul class="nav-second-level">
                <li>
                  <a href="<?= route_to('manage-projects') ?>">Projects</a>
                </li>
                <!--<li>
                  <a href="route_to('manage-products') ?>">Manage Products</a>
                </li> -->
                <?php if (in_array($contractors_permission, $permissions ?? [])): ?>
                  <li>
                    <a href="<?= route_to('manage-contractors') ?>">Contractors</a>
                  </li>
                <?php endif; ?>
                <?php if (in_array($projects_permission, $permissions ?? [])): ?>
                  <li>
                    <a href="<?= route_to('all-contracts'); ?>">All Contracts</a>
                  </li>
                <?php endif; ?>
                <!--<li>
                    <a href="</*= route_to('manage-bids'); */?>">Bids</a>
                </li>-->

              </ul>
            </div>
          </li>
          <?php if (in_array($finance_permission, $permissions ?? [])): ?>
            <li>
              <a href="#budget" data-toggle="collapse">
                <i data-feather="book"></i>
                <span> Finance </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="budget">
                <ul class="nav-second-level">
                  <li><a href="<?= site_url('/budget-input') ?>">Budget Chart</a></li>
                </ul>
              </div>
            </li>
          <?php endif ?>
          <li>
            <a href="#settings" data-toggle="collapse">
              <i data-feather="settings"></i>
              <span> Settings </span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="settings">
              <ul class="nav-second-level">
                <li><a href="<?= route_to('view-profile', $_SESSION['user_employee_id']) ?>">My Account</a></li>
                <li><a href="<?= site_url('/email-settings') ?>">Email Settings</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- End Sidebar -->
      <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
  </div>
  <!-- Left Sidebar End -->
  <!-- ============================================================== -->
  <!-- Start Page Content here -->
  <!-- ============================================================== -->
  <div class="content-page">
    <div class="content">
      <!-- Start Content-->
      <?= $this->renderSection('content') ?>
    </div> <!-- content -->
    <!-- Footer Start -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            Copyright
            <script>document.write(new Date().getFullYear())</script> &copy; iGov. Powered by <a
              href="https://telecom.connexxiongroup.com" target="_blank">Connexxion Telecom</a>
          </div>
          <div class="col-md-6">
            <div class="text-md-right footer-links d-none d-sm-block">
              <a href="https://telecom.connexxiongroup.com/contact-us">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->

  </div>

  <!-- ============================================================== -->
  <!-- End Page content -->
  <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<?php echo view('templates/_footer'); ?>

<script>
  $(document).ready(() => {
    getNotifications()
  })

  function getNotifications() {
    $.ajax({
      url: '<?=site_url('get-unseen-notifications')?>',
      type: 'get',
      success: response => {
        let {notifications} = response
        $('#unseen-notifications').empty()
        if (typeof notifications === 'object') {
          notifications = Object.values(notifications)
        }
        $('#count').html(notifications.length)
        notifications.forEach(notification => {
          $('#unseen-notifications').append(`
            <a href="javascript:void(0)" onclick="viewNotification(\`` + notification.notification_id + `\`)" class="dropdown-item notify-item">
              <div class="notify-icon">
                <span class="avatar-title bg-soft-secondary text-secondary rounded-circle">
                  <i class="fe-bell noti-icon"></i>
                </span>
              </div>
              <p class="notify-details">${notification.subject}</p>
              <p class="text-muted mb-0 user-msg">
                <small>${notification.body}</small>
              </p>
            </a>
          `)
        })
      },
      cache: false,
      contentType: false,
      processData: false
    })
    setTimeout(getNotifications, 5000)
  }

  function viewNotification(notificationID) {
    $.ajax({
      url: '<?=site_url('view-notification/')?>' + notificationID,
      type: 'get',
      success: response => {
        let {success, link} = response
        location.href = link
      }
    })
  }
</script>


