<!DOCTYPE html>

<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<?php
			if(isset($_POST['submit'])){
				$url = $_POST['input_value'];
				 $startUrl = $url;
				echo $startUrl;
				
			}
			?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Injection Protection</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!--Google fonts links-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!--For Plugins external css-->
		<link rel="stylesheet" href="../assets/css/plugins.css" />
		<link rel="stylesheet" href="../assets/css/roboto-webfont.css" />
		<!-- my css file -->
		<link rel="stylesheet" href="../assets/css/results.css">
		<!--Theme custom css -->
		<link rel="stylesheet" href="../assets/css/style.css">
		<!--Theme Responsive css-->
		<link rel="stylesheet" href="../assets/css/responsive.css" />

		<script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Sections -->

	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
								<span class="icon-bar"></span>
									<span class="icon-bar"></span>
										</button>
				<a class="navbar-brand" href="#"><img src="../assets/images/img1.jpg" width="50" height="50 "alt="Logo" style="margin-top:-14px;  margin-left:-232px;"					/></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#home">Home</a></li>
					<li><a href="#features">Results</a></li>
				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<br></br><br>
	<div class="container">
		<div class="flex-row row">
			<div class="col-md-12 flexcol-editor">
				<div class="panel panel-default border">
					<div class="panel-heading" id="button-center-pannel"><button id="crawlerButton" type="button" class="btn btn-primary">Run Crawler</button></div>
				    <h3 class="text-center text-white">Vulnerability Results</h3>
					<div class="panel-body" id="results">
						<h5> Results:</h5>
											<?php 
 require('sqlCheck.php');

  
  ?>

					</div>
				</div>
			</div>
		<div class="col-md-4 flexcol-preview clearfix"></div>
		<div class="col-md-4 flexcol-preview clearfix">
			<div class="panel panel-default">
				<div class="panel-body" id="search">Search another site?: <input type="first_name" id="searchagain" value="www.examplesite.com" onfocus="this.value==this.defaultValue?this.value='':null" /></div>
			</div>
		</div>
		<div class="col-md-4"></div>

		<!--Footer-->
		<footer id="footer" class="footer" style="margin-top:100px;">
			<div class="container">
				<div class="row">
					<div class="footer-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="footer-brand">
								<img src="" alt="" />
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="copyright">
								<p1>Made </i> by <a target="_blank"> Injection Protection </a>2016. All rights reserved.</p1>
							</div>
						</div>
					</div>
				</div>
		</footer>
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>
		<script src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
		<script src="../assets/js/vendor/bootstrap.min.js"></script>
		<script src="../assets/js/plugins.js"></script>
		<script src="../assets/js/modernizr.js"></script>
		<script src="../assets/js/main.js"></script>
</body>

</html>
