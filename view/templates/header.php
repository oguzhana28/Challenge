<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>kapperzaak</title>
	<link rel="stylesheet" href="<?= URL ?>/css/style.css">

	<!-- Bootstrap includes -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">

			<!-- Logo -->
			<div class="navbar-header">
				<a href="<?= URL ?>Barber/index" class="navbar-brand">kapperzaak</a>
			</div>

			<!-- Menu Items -->
			<div>
				<ul class="nav navbar-nav">
					<li><a href="<?= URL ?>Barber/index">Home</a></li>
					<li><a href="<?= URL ?>Barber/prices">Prijzen</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if(!empty($_SESSION['loggedIn'])){ ?>
						<?php if ( $_SESSION['isBarberer'] == 1) { ?>
							<ul class="nav navbar-nav">
								<li><a href="<?= URL ?>barberers/index">Rooster</a></li>
								<li><a href="<?= URL ?>barberers/schedual">Planning</a></li>
							</ul>
						<?php } ?>
					<!-- Dropdown Menu -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['Username'] ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?= URL ?>Barber/account">Account</a></li>
							<li><a href="<?= URL ?>Barber/afspraken">Mijn Afspraken</a></li>
							<li><a href="<?= URL ?>Login/logout">Logout</a></li>
						</ul>
					</li>
					<?php } else{ ?>
						<ul class="nav navbar-nav">
							<li><a href="<?= URL ?>Login/index">Login</a></li>
							<li><a href="<?= URL ?>Login/register">Register</a></li>
						</ul>
					<?php } ?>
				</ul>
			</div>
		</div>

	</nav>
	<div class="container">
		<div class="content-wrapper">
		    <div class="content">
