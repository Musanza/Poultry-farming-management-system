<?php
include 'database/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>About | Poultry Farming Management System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" crossorigin="anonymous">
	<link href="assets/css/dashboard.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
		<div class="container">
			<a class="navbar-brand" href="index.php"><span class="navbar-logo"><img src="assets/img/pofarms_black.png"></span> Poultry Farming Management System</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home <span class="divider"></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://fims.pofarms.icu/" target="blank">FIMS <span class="divider"></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://dbms.pofarms.icu/" target="blank">COVID-19 Response Monitor <span class="divider"></span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="about.php">About <span class="divider"></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signup.php">Sign up</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br><br />
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="title">
							<h3>About Us</h3>
							<p>Poultry farming is the raising of birds either domestically or commercially for primarily
								meat or eggs but also for feathers. Chickens, ducks and turkeys are the most raised birds
								with chickens being the most common raised birds. The chickens which are raised for eggs
								are called layer chickens, and the chickens which are raised for their meat production are
								called broiler chickens. Poultry farming business has numerous benefits. As a result many
								farmers prefer to invest in this business. People generally establish poultry farming for the
								purpose of producing eggs, meat and generating high revenue from these products. All over
								the world billions of chickens are being raised as a good source of food from their eggs and
								meat. Most poultry farming businesses face the challenges of managing the farm this is
								mostly because of the file system of keeping records and entry of transactions. Currently the
								poultry farm industry mainly uses the ledgers based system and manual entry for each
								transaction required, record of eggs, quantity of birds as well as sales and expense record is
								calculated on separate ledgers. Production percentage is calculated manually for every day
								production. Feed consumption per day or month is first written and them total is calculated.
								Sales and expense record as well as profit and loss calculations require a lot of time to go
							through.</p>
							<p>The aim of this study was to develop an online poultry farming management system to help
							poultry farmers manage their farms easily.</p>
							<h4>Objectives</h4>
							<div class="about-obj">
								<ul>
									<li>To automate the manual means of recording poultry farming records.</li>
									<li>To provide a system that can facilitate the update of poultry farming records.</li>
									<li>To develop a system that will aid the presentation of reports pertaining the poultry farming.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 developer">
						<div class="title">
							<h3>Developer</h3>
						</div>
						<center><img src="assets/img/dev.jpg" class="responsive-image"></center>
						<div class="info">
							<ul>
								<li>Name: Gift Musanza</li>
								<li>Telephone No. +260 969 685 645</li>
								<li>Email address: giftmusanza@gmail.com</li>
								<li>Study Program: Bachelor of ICT in Systems Engineering</li>
								<li>School: Information and Communications University (ICU)</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="separator"></div>
		<section class="footer">
			<div class="container">
				<div class="row">
					<div class="col-xl-4">
						<h4>Links</h4>
						<ul>
							<li><a href="https://zrdc.org/" target="blank">ZRDC</a></li>
							<li><a href="http://fims.pofarms.icu/" target="blank">FIMS</a></li>
							<li><a href="https://www.icuzambia.net/" target="blank">ICU Zambia</a></li>
							<li><a href="https://getbootstrap.com/" target="blank">Boostrap 4.5</a></li>
							<li><a href="http://dbms.pofarms.icu/" target="blank">COVID-19 Response Monitor</a></li>
						</ul>
					</div>
					<div class="col-xl-4">
						<div class="logo-footer">
							<center>
								<img src="assets/img/pofarms_white.png"><br>
								Poultry Farming Management System (POFARMS)<br>
								<p>
									Helping you process, store and retrieve records on time for production analysis and evaluation,
									and management of poultry farming.
								</p>
							</center>
						</div>
					</div>
					<div class="col-xl-4">
						<h4>Developer</h4>
						<ul>
							<li>Student Name: Gift Musanza</li>
							<li>Student No. 1601305427</li>
							<li>Course: Final Year Project</li>
							<li>Program: BA of ICT in Systems Engineering</li>
							<li>Email address: <a href="mailto:giftmusanza@gmail.com">giftmusanza@gmail.com</a></li>
							<li>Telephone No. <a href="tel:+260969685645">+260 969 685 645</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright">Poultry Farming Management System &copy; 2020</div>
		</section>
	</main>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('.toast').toast('show');
	});
</script>
</html>
