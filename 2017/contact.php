<?php

// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = "6Ldt2DAUAAAAADCkJNtWP2C72O2NGnR2sAO8CkwF";
 
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Mind Bytes 2017 - Research Computing Expo and Symposium" />
	<meta name="keywords" content="mindbytes, mind bytes, research expo, rcc, uchi, uchicago, computation center, computation, hpc, hpcmatters, research, research computation center, research center, uchicago research, research uchicago" />
	<meta name="author" content="RCC" />
	<!-- Page Title -->
	<title>Contact Us | Mind Bytes 2017 - Research Computing Expo and Symposium</title>
	<!-- Favicon and Touch Icons -->
	<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />

	<!--
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png" />
	 -->
	<!-- Stylesheet -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link href="css/css-plugin-collections.css" rel="stylesheet" />
	<!-- CSS | menuzord megamenu skins -->
	<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
	<!-- CSS | Main style file -->
	<link href="css/style-main.css" rel="stylesheet" type="text/css">
	<!-- CSS | Theme Color -->
	<link href="css/theme/template.css" rel="stylesheet" type="text/css">
	<!-- CSS | Preloader Styles -->
	<link href="css/preloader.css" rel="stylesheet" type="text/css">
	<!-- CSS | Custom Margin Padding Collection -->
	<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
	<!-- CSS | Responsive media queries -->
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
	<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
	<!-- external javascripts -->
	<script src="js/jquery-2.2.0.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- JS | jquery plugin collection for this theme -->
	<script src="js/jquery-plugin-collection.js"></script>

	<!-- Validation Plugins -->
	<!--<script type="text/javascript" src="js/jquery.validate.min.js"></script>-->
	<script type="text/javascript" src="js/additional-methods.min.js"></script>
	
	<!-- Social Sharing Plugin -->
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58ee69fa62683e0012c461fe&product=inline-share-buttons"></script>
    
    <!-- ReCaptcha  -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
	<?php include_once("lib/analyticstracking.php") ?>
		<div id="wrapper">
			<!-- preloader -->
			<div id="preloader">
				<div id="spinner">
					<div class="preloader-orbit-loading">
						<div class="cssload-inner cssload-one"></div>
						<div class="cssload-inner cssload-two"></div>
						<div class="cssload-inner cssload-three"></div>
					</div>
				</div>
			</div>
			<!-- Header -->
			<header class="header bg-theme-colored">
				<div class="header-nav navbar-fixed-top navbar-dark navbar-transparent navbar-sticky-animated animated-active">
					<div class="header-nav-wrapper">
						<div class="container">
							<nav id="menuzord-right" class="menuzord green no-bg">
								<a class="menuzord-brand pull-left flip" href="./"><img src="images/RCC_logo.png" alt="Mind Bytes 2017 - Research Computing Expo and Symposium"></a>
								<ul class="menuzord-menu">
									<li><a href="./">Home</a></li>
									<li><a href="registration.php">Register</a></li>
									<li><a href="program.php">Program</a>
										<!--<ul class="dropdown">
                                        <li><a href="program.php">Schedule</a></li>
                                        <li><a href="speakers.php">Speakers</a></li>
                                    </ul>-->
									</li>
									<li><a href="callforposters.php">Call for Posters</a></li>
									<li><a href="travelinfo.php">Travel</a></li>
									<li class="active"><a href="#">Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- Start main-content -->
			<div class="main-content">

				<!-- Section Contact -->
				<section id="contact" class="divider bg-lighter">
					<div class="container-fluid p-0 pt-90 pb-0">
						<div class="section-content">
							<div class="row">
								<div class="col-sm-12 col-md-6 bg-img-center bg-img-cover p-0" >

									<!-- Google Map HTML Codes -->
									<div data-address="Ida Noyes Hall 1212 E. 59th Street Chicago, IL 60637 United States" data-popupstring-id="#popupstring1" class="map-canvas autoload-map" data-mapstyle="default" data-height="600" data-latlng="41.788211,-87.595580" data-title="Ida Noyes Hall 1212 E. 59th Street Chicago, IL 60637 United States" data-zoom="16" data-marker="images/map.png">
									</div>
									<div class="map-popupstring hidden" id="popupstring1">
										<div class="text-center">
											<h4>Research Computing Expo and Symposium</h4>
											<p>Ida Noyes Hall 1212 E. 59th Street Chicago, IL 60637 United States</p>
										</div>
									</div>
									<!-- Google Map Javascript Codes -->
									<script src="https://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
									<script src="js/google-map-init.js"></script>

								</div>
								<div class="col-sm-12 col-md-6">
									<div class="contact-wrapper">
										<h3 class="mt-0 mb-30">Got a question?</h3>
										<p class="mb-30">Please fill out the form below and RCC’s staff will get back to you as soon as possible.</p>

										<!-- Contact Form -->
										<form id="contact_form" name="contact_form" class="form-transparent" action="lib/sendmail.php" method="post">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="form_name">Full Name <small>*</small></label>
														<input id="form_name" name="form_name" class="form-control required" type="text" placeholder="Enter Full Name" maxlength="128">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="form_email">Email <small>*</small></label>
														<input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" maxlength="128">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="form_subject">Subject <small>*</small></label>
														<input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject" maxlength="128">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="form_phone">Phone</label>
														<input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone" maxlength="10">
													</div>
												</div>
											</div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="form_message">Message <small>*</small></label>
                                                        <textarea id="form_message" name="form_message" class="form-control required" rows="9" placeholder="Enter Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                     <div class="form-group">
                                                        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                                                        <button id="btnReset" type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
										</form>
										<!-- Contact Form Validation-->
										<script type="text/javascript">
											var validator = $("#contact_form").validate({
												submitHandler: function (form) {
													var form_btn = $(form).find('button[type="submit"]');
													var form_result_div = '#form-result';
													$(form_result_div).remove();

													var form_btn_old_msg = form_btn.html();
													form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
													$(form).ajaxSubmit({
														dataType: 'json',
														success: function (data) {
															if (data.type == 'success') {
																form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
																$('#btnReset').trigger('click');
															} else {
																form_btn.before('<div id="form-result" class="alert alert-danger" role="alert" style="display: none;"></div>');
															}
															$(form_result_div).html(data.message).fadeIn('slow');
															setTimeout(function () {
																$(form_result_div).fadeOut('slow');
															}, 6000);
														}
													});
												},
												rules: {
													form_phone: {
														required: false,
														phoneUS: true
													},
													form_message: {
														required: true,
														maxlength: 600
													}
												},
												messages: {
													//form_phone: {
													//	phoneUS: "Phone needs to be US based."
													//},
													form_message: {
														required: "This field is required.",
														maxlength: "Message length is limited to 600 words."
													}
												}
											});

											$("#btnReset").on('click', function () {
												var form_btn = $("#contact_form").find('button[type="submit"]');
												form_btn.prop('disabled', false).html("Send your message");
												validator.resetForm();
                                                grecaptcha.reset();
											});
										</script>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
			<!-- end main-content -->
			<!-- Footer -->
			<footer id="footer" class="footer" data-bg-color="#3d3e4a" style="background: rgb(61, 62, 74) none repeat scroll 0% 0% ! important;">
				<div class="container pt-15 pb-5">
					<div class="row">
						<div class="col-md-3 text-center">
							<h4 class="text-gray">Mind Bytes 2017</h4>
							<h6 class="text-gray">Phone: 773.795.2667</h6>
							<h6 class="text-gray"><a href="mailto:events@rcc.uchicago.edu?Subject=Question%20regarding%20Mind%20Bytes%202017" target="_top">events@rcc.uchicago.edu</a></h6>
							<h6 class="text-gray">Ida Noyes Hall<br>
									1212 E. 59th Street, Chicago, IL 60637</h6>
						</div>

						<div class="col-md-9 col-md-offset-0 text-center">
							<img src="images/logo_RCC.png" alt="Research Computing Center (RCC) at The University of Chicago" title="Research Computing Center (RCC) at The University of Chicago" width="45%">
							<p class="widget-title mt-10">The Mind Bytes website is designed and developed by the Research Computing Center (RCC) at the University of Chicago.</p>
							<ul class="social-icons flat medium list-inline">
								<li>
									<a href="https://www.facebook.com/The-University-of-Chicago-Research-Computing-Center-498755713533665/" target="_blank"><i class="fa fa-facebook "></i></a> </li>
								<li><a href="https://twitter.com/uchicago_rcc " target="_blank "><i class="fa fa-twitter "></i></a> </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container-fluid p-20 " data-bg-color="#181818 " style="background: rgb(24, 24, 24) none repeat scroll 0% 0% ! important; ">
					<div class="row text-center ">
						<div class="col-md-12 ">
							<p class="font-11 m-0 " data-text-color="#555 " style="color: rgb(85, 85, 85); ">Copyright &copy;2017 <a class="font-11 " href="https://rcc.uchicago.edu/ " target="_blank ">Research Computing Center, The University of Chicago</a>. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</footer>
			<a class="scrollToTop " href="# "><i class="fa fa-angle-up "></i></a>
		</div>
		<!-- end wrapper -->
		<!-- Footer Scripts -->
		<!-- JS | Custom script for all pages -->
		<script src="js/custom.js "></script>

</body>

</html>