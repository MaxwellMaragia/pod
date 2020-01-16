<?php
session_start();
if($_SESSION['client'])
{
    $account = $_SESSION['client'];
}
else{
    header('location:login');
}
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
<style>
	.dot{
		height: 8px;
  		width: 8px;
  		background-color: #DADD49;
  		border-radius: 50%;
		display: inline-block;

	}


	h1,h2,h3,h4,h5,h6{
		text-transform:capitalize;
	}
	.orderTitle{
		text-transform:none;
		color:#333333;
	}
	h1,h2,h3,h4,h5,h6{
	font-weight:500;
	color:#033155;

	}

</style>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once('includes/header.php') ?>

<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">



			<!-- Dashboard Content
			================================================== -->
			<div class="dashboard-content-container-ne" >
				<div class="dashboard-content-inner" >

					<!-- Dashboard Headline -->
					<div class="dashboard-headline">
						<h1>Howdy, <?=$account[0]?>!</h1>
						<span>We are glad to see you!</span>

						<!-- Breadcrumbs -->
						<nav id="breadcrumbs" class="">
							<a href="post-order.php"><button class="button ripple-effect ">Post a project</button></a>

						</nav>
					</div>


					<!-- Row -->
					<div class="row" style="margin-top:-20px">

						<!-- Dashboard Box -->
						<div class="col-xl-7">
							<div class="dashboard-box">
								<div class="headline">
									<h3>Orders in progress</h3>
								</div>
								<div class="content">
									<ul class="dashboard-box-list">
										<li>
											<div class="invoice-list-item">
											<strong>Professional Plan</strong>
												<ul>
													<li><span class="unpaid">Unpaid</span></li>
													<li>Order: #326</li>
													<li>Date: 12/08/2018</li>
												</ul>
											</div>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="order.php" class="button">View</a>
											</div>
										</li>
										<li>
											<div class="invoice-list-item">
											<strong>Professional Plan</strong>
												<ul>
													<li><span class="paid">Paid</span></li>
													<li>Order: #264</li>
													<li>Date: 10/07/2018</li>
												</ul>
											</div>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
											</div>
										</li>
										<li>
											<div class="invoice-list-item">
											<strong>Professional Plan</strong>
												<ul>
													<li><span class="paid">Paid</span></li>
													<li>Order: #211</li>
													<li>Date: 12/06/2018</li>
												</ul>
											</div>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
											</div>
										</li>
										<li>
											<div class="invoice-list-item">
											<strong>Professional Plan</strong>
												<ul>
													<li><span class="paid">Paid</span></li>
													<li>Order: #179</li>
													<li>Date: 06/05/2018</li>
												</ul>
											</div>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Dashboard Box -->
						<div class="col-xl-5">
							<div class="dashboard-box">
								<div class="headline">
									<h3> Notifications</h3>
									<button class="mark-as-read ripple-effect-dark" data-tippy-placement="left" title="Mark all as read">
											<i class="icon-feather-check-square"></i>
									</button>
								</div>
								<div class="content">
									<ul class="dashboard-box-list">
										<li>
											<span class="notification-icon">O</span>
											<span class="notification-text">
												You have a new message on <strong>Order 24647</strong> <a href="#">Read</a>
											</span>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
											</div>
										</li>
										<li>
											<span class="notification-icon">S</i></span>
											<span class="notification-text">
												You have a new message from <strong>Support</strong> <a href="#">Read</a>
											</span>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
											</div>
										</li>
										<li>
											<span class="notification-icon">O</i></span>
											<span class="notification-text">
												You <strong>Order 24647</strong> has been submitted. <a href="#">Click here to view</a>
											</span>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
											</div>
										</li>
										<li>
											<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
											<span class="notification-text">
												<strong>Sindy Forrest</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
											</span>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
											</div>
										</li>
										<li>
											<span class="notification-icon"><i class="icon-material-outline-rate-review"></i></span>
											<span class="notification-text">
												<strong>David Peterson</strong> left you a <span class="star-rating no-stars" data-rating="5.0"></span> rating after finishing <a href="#">Logo Design</a> task
											</span>
											<!-- Buttons -->
											<div class="buttons-to-right">
												<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>

				 </div>
					<!-- Row / End -->


				</div>
			</div>
			<!-- Dashboard Content / End -->

		</div>




	</div>
</div>
<br><br><br><br><br><br>

<!-- Footer
================================================== -->
<?php  //include_once('includes/footer.php') ?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Apply Now</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">

				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Attach File With CV</h3>
				</div>

				<!-- Form -->
				<form method="post" id="apply-now-form">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="uploadButton">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload-cv" />
						<label class="uploadButton-button ripple-effect" for="upload-cv">Select File</label>
						<span class="uploadButton-file-name">Upload your CV / resume relevant file. <br> Max. file size: 50 MB.</span>
					</div>

				</form>

				<!-- Button -->
				<button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit" form="apply-now-form">Apply Now <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Apply for a job popup / End -->


<!-- Scripts
================================================== -->


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

// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() {
	Snackbar.show({
		text: 'Copied to clipboard!',
	});
});
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="js/infobox.min.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/maps.js"></script>
<?php include_once('includes/foot.php') ?>


</body>
</html>
