<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Choose Account | iGov</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="/assets/images/logo-sm.png">
	<!-- Loading button css -->
	<link href="/assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
	<!-- App css -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	<link href="/assets/css/app.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
	
	<link href="/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
	<link href="/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
	
	<!-- icons -->
	<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5" >
	<div class="container">
		<div class="row" style="margin-top: 200px">
			<div class="col-md-3 col-lg-3 col-xl-3 offset-3">
				<div class="card bg-pattern">
					
					<div class="card-body p-4">
						
						<div class="text-center w-75 m-auto">
							<div class="auth-logo">
								<a href="<?=site_url(); ?>" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="/assetsa/images/user.png" alt="" height="100">
                                            </span>
								</a>
								
								<a href="<?=site_url(); ?>" class="logo logo-light text-center">
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
								<a href="<?=site_url('office'); ?>" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="/assetsa/images/settings.png" alt="" height="100">
                                            </span>
								</a>
								
								<a href="<?=site_url('office'); ?>" class="logo logo-light text-center">
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
 <script>document.write(new Date().getFullYear())</script> &copy; iGov by <a href="" class="text-white-50">Connexxion Telecom</a>
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


<!--<body class="auth-fluid-pages pb-0">-->
<!---->
<!--<div class="auth-fluid">-->
<!--	<!--Auth fluid left content -->-->
<!--	<div class="auth-fluid-form-box">-->
<!--		<div class="align-items-center d-flex h-100">-->
<!--			<div class="card-body">-->
<!--				-->
<!--				<!-- Logo -->-->
<!--				<div class="auth-brand text-center text-lg-left">-->
<!--					<div class="auth-logo">-->
<!--						<a href="index.html" class="logo logo-dark text-center">-->
<!--                                    <span class="logo-lg">-->
<!--                                        <img src="../assets/images/logo-dark.png" alt="" height="22">-->
<!--                                    </span>-->
<!--						</a>-->
<!--						-->
<!--						<a href="index.html" class="logo logo-light text-center">-->
<!--                                    <span class="logo-lg">-->
<!--                                        <img src="../assets/images/logo-light.png" alt="" height="22">-->
<!--                                    </span>-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				-->
<!--				<!-- title-->-->
<!--				<h4 class="mt-0">Sign In</h4>-->
<!--				<p class="text-muted mb-4">Enter your email address and password to access account.</p>-->
<!--				-->
<!--				<!-- form -->-->
<!--				<form action="#">-->
<!--					<div class="form-group">-->
<!--						<label for="emailaddress">Email address</label>-->
<!--						<input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">-->
<!--					</div>-->
<!--					<div class="form-group">-->
<!--						<a href="auth-recoverpw-2.html" class="text-muted float-right"><small>Forgot your password?</small></a>-->
<!--						<label for="password">Password</label>-->
<!--						<div class="input-group input-group-merge">-->
<!--							<input type="password" id="password" class="form-control" placeholder="Enter your password">-->
<!--							<div class="input-group-append" data-password="false">-->
<!--								<div class="input-group-text">-->
<!--									<span class="password-eye"></span>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					-->
<!--					<div class="form-group mb-3">-->
<!--						<div class="custom-control custom-checkbox">-->
<!--							<input type="checkbox" class="custom-control-input" id="checkbox-signin">-->
<!--							<label class="custom-control-label" for="checkbox-signin">Remember me</label>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="form-group mb-0 text-center">-->
<!--						<button class="btn btn-primary btn-block" type="submit">Log In </button>-->
<!--					</div>-->
<!--					<!-- social-->-->
<!--					<div class="text-center mt-4">-->
<!--						<p class="text-muted font-16">Sign in with</p>-->
<!--						<ul class="social-list list-inline mt-3">-->
<!--							<li class="list-inline-item">-->
<!--								<a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>-->
<!--							</li>-->
<!--							<li class="list-inline-item">-->
<!--								<a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>-->
<!--							</li>-->
<!--							<li class="list-inline-item">-->
<!--								<a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>-->
<!--							</li>-->
<!--							<li class="list-inline-item">-->
<!--								<a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</form>-->
<!--				<!-- end form-->-->
<!--				-->
<!--				<!-- Footer-->-->
<!--				<footer class="footer footer-alt">-->
<!--					<p class="text-muted">Don't have an account? <a href="auth-register-2.html" class="text-muted ml-1"><b>Sign Up</b></a></p>-->
<!--				</footer>-->
<!--			-->
<!--			</div> <!-- end .card-body -->-->
<!--		</div> <!-- end .align-items-center.d-flex.h-100-->-->
<!--	</div>-->
<!--	<!-- end auth-fluid-form-box-->-->
<!--	-->
<!--	<!-- Auth fluid right content -->-->
<!--	<div class="auth-fluid-right text-center">-->
<!--		<div class="auth-user-testimonial">-->
<!--			<h2 class="mb-3 text-white">I love the color!</h2>-->
<!--			<p class="lead"><i class="mdi mdi-format-quote-open"></i> I've been using your theme from the previous developer for our web app, once I knew new version is out, I immediately bought with no hesitation. Great themes, good documentation with lots of customization available and sample app that really fit our need. <i class="mdi mdi-format-quote-close"></i>-->
<!--			</p>-->
<!--			<h5 class="text-white">-->
<!--				- Fadlisaad (Ubold Admin User)-->
<!--			</h5>-->
<!--		</div> <!-- end auth-user-testimonial-->-->
<!--	</div>-->
<!--	<!-- end Auth fluid right content -->-->
<!--</div>-->
<!--<!-- end auth-fluid-->-->
<!---->
<!--<!-- Vendor js -->-->
<!--<script src="../assets/js/vendor.min.js"></script>-->
<!---->
<!--<!-- App js -->-->
<!--<script src="../assets/js/app.min.js"></script>-->
<!---->
<!--</body>-->
</html>