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
	<div class="row" style="margin-top:30px">
		<div class="col-xl-2"></div>
		<div class="col-xl-8">
			<div class="notify-box margin-top-15">
				<div class="switch-container">
					<label class="switch"><span class="switch-text">Add an order</span></label>
				</div>

				<div class="sort-by">
					<span>Sort by:</span>
					<select class="selectpicker hide-tick">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select>
				</div>
			</div>
			<div class="dashboard-bo margin-top-0">



				<div class="content with-padding padding-bottom-10 margin-top-40">
					<div class="row">

						<div class="col-xl-5">
							<div class="submit-field">
								<h5>Title</h5>
								<input type="text" class="with-border">
							</div>
						</div>


						<div class="col-xl-5">
							<div class="submit-field">
								<h5>Document Type</h5>
								<select class="selectpicker with-border" data-size="7" title="Select document Type">
									<option>Full Time</option>
									<option>Freelance</option>
									<option>Part Time</option>
									<option>Internship</option>
									<option>Temporary</option>
								</select>
							</div>
						</div>

						<div class="col-xl-2">
							<div class="submit-field">
								<h5>Pages/slides</h5>
								<input type="text" class="with-border" placeholder="">
							</div>
						</div>

						<div class="col-xl-5">
							<div class="submit-field">
								<h5>Subject</h5>
								<select class="selectpicker with-border" data-size="7" title="Select subject area">
									<option>Accounting and Finance</option>
									<option>Health</option>
									<option>Business</option>
									<option>History</option>
									<option>Sociology</option>
									<option>Poetry</option>
									<option>Government</option>
									<option>Clerical & Data Entry</option>
									<option>Counseling</option>
									<option>Court Administration</option>
									<option>Human Resources</option>
									<option>Investigative</option>
									<option>IT and Computers</option>
									<option>Law Enforcement</option>
									<option>Management</option>
									<option>Miscellaneous</option>
									<option>Public Relations</option>
								</select>
							</div>
						</div>

						<div class="col-xl-5">
							<div class="submit-field">
								<h5>Deadline</h5>
								<input type="text" class="with-border" placeholder="">
							</div>
						</div>

						<div class="col-xl-12">
							<div class="submit-field">
								<h5>Job Description</h5>
								<textarea cols="30" rows="5" class="with-border"></textarea>
								<div class="uploadButton margin-top-30">
									<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
									<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
									<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
								</div>
							</div>
						</div>

						<div class="col-xl-12">
						<a href="checkout.php" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Check out</a>
					</div>

					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-2"></div>
	</div>
</div>
</div>


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
