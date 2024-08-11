<?php
echo view('templates/_headera.php');
$type = session()->get('type');
?>

<body data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": false}'>
<?php if ($firstTime): ?>
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
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                       href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ml-1">
                                   <?= ucfirst($username); ?> <i class="mdi mdi-chevron-down"></i>
                                </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>

                        <?php if ($type == 3): ?>
                            <a href="<?= site_url('/') ?>" class="dropdown-item notify-item">
                                <i class="fe-arrow-right"></i>
                                <span>Switch to User</span>
                            </a>
                        <?php endif ?>
                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="/logout" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="../assets/images/logo-sm.png" alt="" height="50">
								 <span class="logo-lg-text-light">iGov</span>
                            </span>
                    <span class="logo-lg">
                                <img src="../assets/images/logo-sm.png" alt="" height="50">
						 <span class="logo-lg-text-light">IG</span>
                            </span>
                </a>

                <a href="index.html" class="logo logo-light text-center">
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
                <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                     class="rounded-circle avatar-md">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                       data-toggle="dropdown">Geneva Kennedy</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user mr-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings mr-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock mr-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out mr-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </div>
                <p class="text-muted">Admin Head</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title">Navigation</li>


                    <li>
                        <a href="#generalSettings" data-toggle="collapse">
                            <i data-feather="airplay"></i>

                            <span> General Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="generalSettings">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= site_url('organization-profile'); ?>">Organizational Profile</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('departments'); ?>">Department</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('units'); ?>">Units</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('positions'); ?>">Position/Title</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li>
                        <a href="#messagingSettings" data-toggle="collapse">
                            <i data-feather="message-square"></i>

                            <span> Messaging Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="messagingSettings">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= site_url('notice-board'); ?>">Manage Notice Board</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('manage-stamp'); ?>">Manage Stamp</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#employeeSettings" data-toggle="collapse">
                            <i data-feather="users"></i>

                            <span> Employees </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="employeeSettings">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= site_url('new-employee'); ?>">New Employee</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('employees'); ?>">All Employees</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('permissions'); ?>">User Permissions</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#workflowSettings" data-toggle="collapse">
                            <i data-feather="settings"></i>

                            <span> Workflow Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="workflowSettings">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= site_url('/workflow/settings'); ?>">Settings</a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?= site_url('manage-registry') ?>">
                            <i data-feather="inbox"></i>
                            <span> Registry </span>
                        </a>
                    </li>
                    <li>
                        <a href="#fleet-settings" data-toggle="collapse">
                            <i data-feather="truck"></i>
                            <span> Fleet Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="fleet-settings">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= site_url('renewal-types'); ?>">Renewal Types</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('vehicle-types'); ?>">Vehicle Type</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('maintenance-types'); ?>">Maintenance Type</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?= route_to('chat') ?>">
                            <i data-feather="layout"></i>
                            <span> Forms </span>
                        </a>
                    </li>

                    <li>
                        <a href="apps-chat.html">
                            <i data-feather="log-in"></i>
                            <span> Meetings </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= site_url('trainings') ?>">
                            <i data-feather="bar-chart-2"></i>
                            <span> Trainings </span>
                        </a>
                    </li>
                    <li>
                        <a href="apps-chat.html">
                            <i data-feather="message-square"></i>
                            <span> Messaging </span>
                        </a>
                    </li>


                    <li>
                        <a href="#budgetSettings" data-toggle="collapse">
                            <i data-feather="settings"></i>

                            <span> Budget </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="budgetSettings">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= site_url('budget-setups'); ?>">Budget Profiles</a>
                                </li>

                                <li>
                                    <a href="<?= site_url('budget-categories'); ?>">Budget Categories</a>
                                </li>

                                <li>
                                    <a href="<?= site_url('budget-charts'); ?>">Budget Chart Setup</a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#projectMenu" data-toggle="collapse">
                            <i data-feather="briefcase"></i>

                            <span> Project </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="projectMenu">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= route_to('manage-projects') ?>">Manage Projects</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?= site_url('g-drive') ?>">
                            <i data-feather="folder-plus"></i>
                            <span> GDrive </span>
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
                                    <a href="<?= route_to('contract-categories'); ?>">Contract Category</a>
                                </li>
                                <li>
                                    <a href="<?= route_to('contractor-license-category'); ?>">License Category</a>
                                </li>
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
                        2015 -
                        <script>document.write(new Date().getFullYear())</script> &copy; iGov by <a href="">Conexxion
                            Telecom</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
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

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link py-2" data-toggle="tab" href="#chat-tab" role="tab">
                    <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2" data-toggle="tab" href="#tasks-tab" role="tab">
                    <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2 active" data-toggle="tab" href="#settings-tab" role="tab">
                    <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-0">
            <div class="tab-pane" id="chat-tab" role="tabpanel">

                <form class="search-bar p-3">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>

                <h6 class="font-weight-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                        <span class="mb-0 mt-1">App Development</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                        <span class="mb-0 mt-1">Office Work</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                        <span class="mb-0 mt-1">Personal Group</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                        <span class="mb-0 mt-1">Freelance</span>
                    </a>
                </div>

                <h6 class="font-weight-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);"
                                                                                      class="font-18 text-danger"><i
                                class="float-right mdi mdi-plus-circle"></i></a></h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-10.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-9.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status busy"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <h6 class="font-weight-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);"
                                                                                       class="font-18 text-danger"><i
                                class="float-right mdi mdi-plus-circle"></i></a></h6>

                <div class="p-2 pb-4">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-2.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-4.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-5.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">If several languages coalesce the grammar of the
                                        resulting.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-6.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-7.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status busy"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative mr-2">
                                <img src="../assets/images/users/user-8.jpg" class="rounded-circle avatar-sm"
                                     alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="text-center mt-3">
                        <a href="javascript:void(0);" class="btn btn-sm btn-white">
                            <i class="mdi mdi-spin mdi-loading mr-2"></i>
                            Load more
                        </a>
                    </div>
                </div>

            </div>

            <div class="tab-pane" id="tasks-tab" role="tabpanel">
                <h6 class="font-weight-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                <div class="px-2">
                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"
                                 aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>

                <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"
                                 aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 84%"
                                 aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>

                <div class="p-3 mt-2">
                    <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create
                        Task</a>
                </div>

            </div>
            <div class="tab-pane active" id="settings-tab" role="tabpanel">
                <h6 class="font-weight-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                    <span class="d-block py-1">Theme Settings</span>
                </h6>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                               id="light-mode-check" checked/>
                        <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                               id="dark-mode-check"/>
                        <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Width -->
                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check"
                               checked/>
                        <label class="custom-control-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check"/>
                        <label class="custom-control-label" for="boxed-check">Boxed</label>
                    </div>

                    <!-- Menu positions -->
                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="menus-position" value="fixed"
                               id="fixed-check"
                               checked/>
                        <label class="custom-control-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="menus-position" value="scrollable"
                               id="scrollable-check"/>
                        <label class="custom-control-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="leftsidebar-color" value="light"
                               id="light-check" checked/>
                        <label class="custom-control-label" for="light-check">Light</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="leftsidebar-color" value="dark"
                               id="dark-check"/>
                        <label class="custom-control-label" for="dark-check">Dark</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="leftsidebar-color" value="brand"
                               id="brand-check"/>
                        <label class="custom-control-label" for="brand-check">Brand</label>
                    </div>

                    <div class="custom-control custom-switch mb-3">
                        <input type="radio" class="custom-control-input" name="leftsidebar-color" value="gradient"
                               id="gradient-check"/>
                        <label class="custom-control-label" for="gradient-check">Gradient</label>
                    </div>

                    <!-- size -->
                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="leftsidebar-size" value="default"
                               id="default-size-check" checked/>
                        <label class="custom-control-label" for="default-size-check">Default</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="leftsidebar-size" value="condensed"
                               id="condensed-check"/>
                        <label class="custom-control-label" for="condensed-check">Condensed <small>(Extra Small
                                size)</small></label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="leftsidebar-size" value="compact"
                               id="compact-check"/>
                        <label class="custom-control-label" for="compact-check">Compact <small>(Small
                                size)</small></label>
                    </div>

                    <!-- User info -->
                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" name="leftsidebar-user" value="fixed"
                               id="sidebaruser-check"/>
                        <label class="custom-control-label" for="sidebaruser-check">Enable</label>
                    </div>


                    <!-- Topbar -->
                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="topbar-color" value="dark"
                               id="darktopbar-check"
                               checked/>
                        <label class="custom-control-label" for="darktopbar-check">Dark</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="topbar-color" value="light"
                               id="lighttopbar-check"/>
                        <label class="custom-control-label" for="lighttopbar-check">Light</label>
                    </div>


                    <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                    <a href="https://1.envato.market/uboldadmin"
                       class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i>
                        Purchase Now</a>

                </div>

            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->


<?php echo view('templates/_footera'); ?>
