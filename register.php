<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title></title>
<?php include_once('includes/head.php') ?>
<style>
	.client{
		background:#F75235;
	}

</style>
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
  					<h3 style="font-size: 26px;">Let's create your account!</h3>
  					<span>Already have an account? <a href="login.php">Log In!</a></span>
  				</div>

  				<!-- Account Type -->
  				<div class="account-type">
  					<div>
  						<input  type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
  						<label  for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Writer</label>
  					</div>

  					<div>
  						<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
  						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Client</label>
  					</div>
  				</div>

  				<!-- Form -->
  				<form method="post" id="register-account-form">
            <div class="input-with-icon-left">
  						<i class="icon-feather-user"></i>
  						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Full legal name" required/>
  					</div>

  					<div class="input-with-icon-left">
  						<i class="icon-line-awesome-mobile-phone"></i>
  						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Phone number(M-pesa number)" required/>
  					</div>

            <div class="input-with-icon-left">
  						<i class="icon-material-baseline-mail-outline"></i>
  						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email address" required/>
  					</div>

            <div class="input-with-icon-left">
  						<i class="icon-line-awesome-quote-right"></i>
  						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Username" required/>
  					</div>

  					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
  						<i class="icon-material-outline-lock"></i>
  						<input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required/>
  					</div>


            <!-- Button -->
    				<a href="client.php">
              <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
            </a>
  				</form>


  				
  			</div>

  		</div>
  	</div>
  </div>


<div class="margin-top-80"></div>

<!-- Footer
================================================== -->
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once('includes/foot.php') ?>

</body>
</html>
