<?php
session_start();

include('regAction.php');
?>
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
          <?php if(isset($_SESSION['response'])){ ?>
       <div class="alert alert-<?=$_SESSION['res_type']?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?=$_SESSION['response']?>
      </div>
       <?php } unset($_SESSION['response']); ?>
  				<!-- Welcome Text -->
  				<div class="welcome-text">
  					<h3 style="font-size: 26px;">Let's create your account!</h3>
  					<span>Already have an account? <a href="login.php">Log In!</a></span>
  				</div>

  				

  				<!-- Form -->
  				<form method="post" id="register-account-form">
            <!-- Account Type -->
          <div class="account-type">
            <div>
              <input  type="radio" name="radiotype" id="freelancer-radio" class="account-type-radio" value="w" checked/>
              <label  for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Writer</label>
            </div>

            <div>
              <input type="radio" name="radiotype" id="employer-radio" class="account-type-radio" value="c" />
              <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Client</label>
            </div>
          </div>
            <div class="input-with-icon-left">
  						<i class="icon-feather-user"></i>
  						<input type="text" class="input-text with-border" name="name" id="name" placeholder="Full legal name" required/>
  					</div>

  					<div class="input-with-icon-left">
  						<i class="icon-line-awesome-mobile-phone"></i>
  						<input type="text" class="input-text with-border" name="phone" id="phone" placeholder="Phone number(M-pesa number)" required/>
  					</div>

            <div class="input-with-icon-left">
  						<i class="icon-material-baseline-mail-outline"></i>
  						<input type="email" class="input-text with-border" name="email" id="emailaddress" placeholder="Email address" required/>
              <span class="text-danger"></span>
  					</div>

  					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
  						<i class="icon-material-outline-lock"></i>
  						<input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Password" required/>
  					</div>


            <!-- Button -->
              <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" name="btn_action">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
  				</form>


  				<!-- Social Login -->
  				<div class="social-login-separator"><span>or</span></div>
  				<div class="social-login-buttons">
  					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
  					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
  				</div>
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
<script type="text/javascript">
 $('document').ready(function(){
 $('#tbl_category').DataTable();

 var state = false;
 $('#emailaddress').on('blur', function(){
  var emailaddress = $('#emailaddress').val();
  if (emailaddress == '') {
    state = false;
    return;
  }
  $.ajax({
    url: 'regAction.php',
    type: 'post',
    data: {
      'reg_check' : 1,
      'emailaddress' : emailaddress,
    },
    success: function(response){
      if (response == 'exist' ) {
        state = false;
        $('#emailaddress').siblings("span").text('Email exists');
      }else if (response == 'not_exist') {
        state = true;
        $('#emailaddress').siblings("span").text('');
      }
    }
  });
 });


  
 });
</script>