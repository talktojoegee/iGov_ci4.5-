<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Log In | iGov</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="/assets/images/logo-sm.png">
	
	<!-- App css -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	<link href="/assets/css/app.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
	
	<link href="/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
	<link href="/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
	
	<!-- icons -->
	<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-6 col-xl-5">
				<div class="card bg-pattern">
					
					<div class="card-body p-4">
						
						<div class="text-center w-75 m-auto">
							<div class="auth-logo">
								<a href="/" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="/assets/images/logo-sm.png" alt="" height="100">
                                            </span>
								</a>
								
								<a href="/" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="/assets/images/logo-sm.png" alt="" height="100">
                                            </span>
								</a>
							</div>
							<p class="text-muted mb-4 mt-3"> Enter your username and password to access account.</p>
							<?php if($errors):  ?>
							
							<div class="alert alert-danger" role="alert">
								<i class="mdi mdi-block-helper mr-2"></i>  <strong><?=$errors; ?></strong>
							</div>
							
							<?php endif; ?>
							
						</div>
						
						<form action="" method="post">
							<input type="hidden" name="url" value="<?=$url; ?>">
							<div class="form-group mb-3">
								<label for="emailaddress">Username</label>
								<input class="form-control" type="text" id="emailaddress" name="username" required="" placeholder="Enter your username">
							</div>
							
							<div class="form-group mb-3">
								<label for="password">Password</label>
								<div class="input-group input-group-merge">
									<input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
									<div class="input-group-append" data-password="false">
										<div class="input-group-text">
											<span class="password-eye"></span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-group mb-3">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
									<label class="custom-control-label" for="checkbox-signin">Remember me</label>
								</div>
							</div>
							
							<div class="form-group mb-0 text-center">
								<button class="btn btn-primary btn-block" type="submit"> Log In </button>
							</div>
						
						</form>
						

					
					</div> <!-- end card-body -->
				</div>
				<!-- end card -->
				
				<div class="row mt-3">
					<div class="col-12 text-center">
						<p> <a href="#" class="text-white-50 ml-1">Forgot your password?</a></p>
						
					</div> <!-- end col -->
				</div>
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

<!-- App js -->
<script src="/assets/js/app.min.js"></script>

</body>

</html>
