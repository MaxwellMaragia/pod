<?php
session_start();
include_once 'functions/actions.php';
$obj = new DataOperations();
$error = '';
if(isset($_POST['login']))
{
    $email = $obj->con->real_escape_string($_POST['email']);
    $password = md5($_POST['password']);

    $where = array('email'=>$email,'password'=>$password);
    $get_account = $obj->fetch_records('users',$where);
    if($get_account){
        if(!empty($_POST['remember']))
        {
            setcookie("email",$email,time()+(10*365*24*60*60));
            setcookie("password",$_POST['password'],time()+(10*365*24*60*60));
        }
        else{
            if(isset($_COOKIE['username'])){
                setcookie('email','');
            }
            if(isset($_COOKIE['password'])){
                setcookie('password','');
            }
        }

        foreach($get_account as $row){

            //check if logged in user is writer or client
            $user = $row['user'];
            $name = $row['name'];
            $mobile = $row['mobile'];

            //check if account is active or not
            $account = $row['account'];
            if($account == 1){

                //check if its client or writer
                if($user=='c')
                {
                    $_SESSION['client']=array($name,$email,$mobile);
                    header('location:client');
                }
                else if($user=='w')
                {
                    $_SESSION['writer']=array($name,$email,$mobile);
                    header('location:writer');
                }

            }
            else{
                $error = "Your account is not activated";
            }
        }
    }
    else{
        $error = "Wrong username or password";
    }
}



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
  					<span>Don't have an account? <a href="register.php">Swift Sign Up!</a></span>
  				</div>

  				<!-- Form -->
  				<form method="post" id="login-form" action="">
                    <?php
                    if($error){
                        $obj->errorDisplay($error);
                    }

                        ?>
  					<div class="input-with-icon-left">
  						<i class="icon-material-baseline-mail-outline"></i>
  						<input type="text" class="input-text with-border" name="email" id="emailaddress" placeholder="Email Address" required value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];}?>" />
  					</div>

  					<div class="input-with-icon-left">
  						<i class="icon-material-outline-lock"></i>
  						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>"/>
  					</div>
            <div class="row">
  					<a href="#" class="forgot-password col-xl-7">Forgot Password?</a>
            <div class="checkbox col-xl-5">
              <input type="checkbox" id="two-step" name="remember" <?php if(isset($_COOKIE['email'])){?> checked <?php }?>>
              <label for="two-step"><span class="checkbox-icon"></span>Remember me</label>
            </div>
          </div>


  				<!-- Button -->
  				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" name="login" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

  				<!-- Social Login -->
  				<!-- <div class="social-login-separator"><span>or</span></div> -->
                </form>

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
