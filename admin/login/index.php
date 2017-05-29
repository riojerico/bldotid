<?php
session_start();
require_once("../config/class.login.php");

$login = new Login();

if($login->is_loggedin()!="")
{
	$login->redirect($base_url.'/views?20fbc7f87662f75287fed79aad3421d1');
}

if(isset($_POST['btn-login']))
{
	$umail = strip_tags($_POST['email']);
  $uname = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);

	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect($base_url.'/views?20fbc7f87662f75287fed79aad3421d1');
	}
	else
	{
		$error = "Wrong Details !";
	}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/material/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/material/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login Page - BuatLapak.id</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/material/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/material/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="signup-page">
	<nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="http://www.buatlapak.id">BUATLAPAK.ID</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
					<li>
    					<a href="../components-documentation.html" target="_blank">
    						Components
    					</a>
    				</li>
    				<li>
						<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
							<i class="material-icons">unarchive</i> Upgrade to PRO
						</a>
    				</li>
		            <li>
		                <a href="https://twitter.com/buatlapakid" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
		            </li>
		            <li>
		                <a href="https://www.facebook.com/buatlapakid" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="https://www.instagram.com/buatlapakid" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/material/img/buatlapak_great.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" method="post" action="">
								<div class="header header-info  text-center">
									<h4>Login</h4>

								</div>
								<p class="text-divider">Selamat datang di <br> <img src="../assets/images/blid-images/logo1.png" alt="" height="60"></p>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">assignment_ind</i>
										</span>
                      <input type="text" class="form-control" placeholder="Email or username..." name="email">

									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Password..." class="form-control" name="password"/>
									</div>

								</div>
								<div class="footer text-center">
									<button name="btn-login" type="submit" class="btn btn-simple btn-info btn-lg">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
		        <div class="container">
		            <nav class="pull-left">
						<ul>
							<li>
								<a href="http://www.rodjoland.com">
									Rodjoland
								</a>
							</li>
							<li>
								<a href="#">
								   About Us
								</a>
							</li>
							<li>
								<a href="#">
								   Blog
								</a>
							</li>

						</ul>
		            </nav>
		            <div class="copyright pull-right">
		                &copy; 2017 <a href="http://www.rodjoland.com" target="_blank">Rodjoland</a>
		            </div>
		        </div>
		    </footer>

		</div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src="../assets/material/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/material/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/material/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/material/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="../assets/material/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/material/js/material-kit.js" type="text/javascript"></script>

</html>
