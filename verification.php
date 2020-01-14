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
  					<h3>Verify phone number</h3>
  					<span>Enter the code sent to your number <a href="#">Code expiry in 60s</a></span>
  				</div>

  				<!-- Form -->
  				<form method="post" id="login-form">
  					<div class="input-with-icon-left">
  						<i class="icon-material-outline-textsms"></i>
  						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Verification code" required/>
  					</div>


  				</form>

  				<!-- Button -->
  				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Verify <i class="icon-material-outline-arrow-right-alt"></i></button>


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
