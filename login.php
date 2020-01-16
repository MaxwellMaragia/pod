<?php
session_start();
include_once 'functions/actions.php';



?>
<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title></title>
<?php include_once('includes/head.php') ?>

</head>
<body>

  <!-- Wrapper -->
  <div id="wrapper">

  <!-- Header Container
  ================================================== -->
<?php include_once('includes/outOfSessionHeader.php')?>

  <div class="clearfix"></div>
  <!-- Header Container / End -->



  <!-- Page Content
  ================================================== -->
  <div class="container">
  	<div class="row" style="margin-top:45px">
  		<div class="col-xl-5 offset-xl-3">


  			<div class="login-register-page">
  				<!-- Welcome Text -->
  				<div class="welcome-text">
  					<h3>Welcome back!</h3>
  					<span>Don't have an account? <a href="register.php">Sign Up!</a></span>
  				</div>

  				<!-- Form -->
  				<form method="post" id="login-form">
  					<div class="input-with-icon-left">
  						<i class="icon-material-baseline-mail-outline"></i>
  						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address/phone number" required/>
  					</div>

  					<div class="input-with-icon-left">
  						<i class="icon-material-outline-lock"></i>
  						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
  					</div>
  					<a href="#" class="forgot-password">Forgot Password?</a>
  				</form>

  				<!-- Button -->
  				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

  				<!-- Social Login -->
  				<div class="social-login-separator"><span>or</span></div>
  				<div class="social-login-buttons">
  					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
  					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
  				</div>
  			</div>

  		</div>
  	</div>
  </div>


<div class="margin-top-80"></div>



</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once('includes/foot.php') ?>

</body>
</html>
