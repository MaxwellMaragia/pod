<?php
session_start();
if(!$_SESSION['client_login']){
    header('location:login');
}

include_once 'includes/config.php';

?>
<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once('includes/header.php') ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Titlebar
================================================== -->
<div class="single-page-header gradient">
	<div class="container">
		<div class="row" >
			<div class="col-md-12 ">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-details">
							<!-- <h4>Description</h4> -->
							<h2>Order 277904: Leverage agile frameworks to provide a robust synopsis for high level overviews.</h2></br>
              <!-- <h5>About the Employer</h5> -->

							<div class="freelancer-details-list">
							<ul>
								<li>Type <strong>Essay</strong></li>
                <li>Volume <strong>6 pages</strong></li>
								<li>Subject <strong> IT</strong></li>
								<li>Price <strong>Ksh 600</strong></li>
								<li>Deadline <strong>2/12/2020 18:30 </strong></li>

							</ul>
						</div>
						</div>
					</div>
					<!-- <div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Due date 12/12/2020 18:30  </div>
							<div class="salary-amount">0 days left</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<!-- Container -->
<div class="container">
	<div class="row">
		<div class="col-xl-8 col-lg-8 content-right-offset">

			<!-- Hedline -->
			<!-- <h3 class="margin-top-1">Payment Method<small><img style="height:60px" src="images/mpesa.png" alt=""></small></h3> -->

			<!-- Payment Methods Accordion -->
			<div class="payment margin-top-3">

				<div class="payment-tab payment-tab-active">
					<div class="payment-tab-trigger">
						<input checked id="paypal" name="cardType" type="radio" value="paypal">
						<label for="paypal">Mpesa STK push</label>
						<img class="payment-logo paypal" src="images/mpesa.png" alt="">
					</div>

					<div class="payment-tab-content">
						<p>Recieve auto billing to our mpesa via STK push to the number below or enter another number</p>
							<span class="row container">
								<input class="col-xl-2" type="text" value="07121212121" placeholder="mpesa phone number">
								<div class="checkbox margin-top-1 col-xl-5">
									<input type="checkbox" id="two-step">
									<label for="two-step"><span class="checkbox-icon"></span>  I agree to the <a href="#">Terms and Conditions</a> and the <a href="#">Automatic Renewal Terms</a></label>
								</div>
							</span>

						<button class="button ripple-effect">Pay</button>
					</div>
				</div>


				<div class="payment-tab">
					<div class="payment-tab-trigger">
						<input type="radio" name="cardType" id="creditCart" value="creditCard">
						<label for="creditCart">Other Mpesa payment options</label>
						<!-- <img class="payment-logo" src="https://i.imgur.com/IHEKLgm.png" alt=""> -->
					</div>

					<div class="payment-tab-content">
						<ul class="list-1">
							<li>Go to your Mpesa menu</li>
							<li>Select Lipa na mpesa</li>
							<li>Enter 34567 as the paybill Number</li>
							<li>Enter order number as account Number</li>
							<li>Enter the amount 1200</li>
							<li>Enter your pin</li>
							<li>You are Done!!!</li>
						</ul>

					</div>
				</div>

			</div>
			<!-- Payment Methods Accordion / End -->
			<!-- Checkbox -->


			<!-- <a href="order-confirmation.php" class="button big ripple-effect margin-top-40 margin-bottom-65">Proceed Payment</a> -->
		</div>


		<!-- Summary -->
		<div class="col-xl-4 col-lg-4 margin-top-0 margin-bottom-60">

			<!-- Summary -->
			<div class="boxed-widget summary margin-top-0">
				<div class="boxed-widget-headline">
					<h3>Summary</h3>
				</div>
				<div class="boxed-widget-inner">
					<ul>
						<li>Standard Plan <span>Ksh1200</span></li>
						<li>VAT (0%) <span>Ksh0</span></li>
						<li class="total-costs">Final Price <span>Ksh1200</span></li>
					</ul>
				</div>
			</div>
			<!-- Summary / End -->


		</div>

	</div>
</div>
<!-- Container / End -->

<!-- Footer
================================================== -->

<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() {
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	});
});
</script>

</body>
</html>
