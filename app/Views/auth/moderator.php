<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Choose Account | iGov</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/logo-sm.png">
    <!-- Loading button css -->
    <link href="/assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css"/>
    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet"/>
    <link href="/assets/css/app.css" rel="stylesheet" type="text/css" id="app-default-stylesheet"/>

    <link href="/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled/>
    <link href="/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled/>

    <!-- icons -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>

</head>

<body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row" style="margin-top: 200px">
            <div class="col-md-3 col-lg-3 col-xl-3 offset-3">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <a href="<?= site_url(); ?>" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="/assetsa/images/user.png" alt="" height="100">
                                            </span>
                                </a>

                                <a href="<?= site_url(); ?>" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="/assetsa/images/user.png" alt="" height="100">
                                            </span>
                                </a>
                            </div>
                            <p class="text-muted mb-4 mt-3"> User Account</p>
                        </div>


                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->


                <!-- end row -->

            </div> <!-- end col -->

            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <a href="<?= site_url('office'); ?>" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="/assetsa/images/settings.png" alt="" height="100">
                                            </span>
                                </a>

                                <a href="<?= site_url('office'); ?>" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="/assetsa/images/settings.png" alt="" height="100">
                                            </span>
                                </a>
                            </div>
                            <p class="text-muted mb-4 mt-3"> Admin Account</p>


                        </div>


                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->


                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<footer class="footer footer-alt">
    <script>document.write(new Date().getFullYear())</script> &copy; iGov by <a href="" class="text-white-50">Connexxion
        Telecom</a>
</footer>

<!-- Vendor js -->
<script src="/assets/js/vendor.min.js"></script>

<script src="/assets/libs/ladda/spin.min.js"></script>
<script src="/assets/libs/ladda/ladda.min.js"></script>

<!-- Buttons init js-->
<script src="/assets/js/pages/loading-btn.init.js"></script>
<!-- App js -->
<script src="/assets/js/app.min.js"></script>
</body>
</html>
