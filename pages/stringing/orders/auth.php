<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name = "author" content = "Jianqiao Ma">

	<title>Jianqiao Ma</title>

	<?php require 'login.php'; ?>
	<?php
		$success = "";
		$fail = "";
		$nul = "";
	  	if (isset($_SERVER['PHP_AUTH_USER']) &&
	      	isset($_SERVER['PHP_AUTH_PW']))
	  	{
	    	if ($_SERVER['PHP_AUTH_USER'] == $username &&
	        	$_SERVER['PHP_AUTH_PW']   == $password)
	          	$success = "You are now logged in";
	    	else 
	    	{
	    		//die("Invalid username / password combination");
	    		$fail = "Invalid username / password combination";
	    	}
	  	}
	  	else
	  	{
	    	header('WWW-Authenticate: Basic realm="Restricted Section"');
	    	header('HTTP/1.0 401 Unauthorized');
			$nul = "Please enter your username and password";
			echo "hmm{$_SERVER['PHP_AUTH_USER']}<br>";
			echo "emm{$_SERVER['PHP_AUTH_USER']}<br>";
	    	//die ("Please enter your username and password");
	  	}
	?>

	<link rel='icon' href='image/favicon.png?v=2' type='png'> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>

<style>
	body {
		font-family: 'Open Sans', sans-serif;
	}
</style>
<body>


	<main>


        <div class="container-fluid pl-5">
			<div class="col-md-8" style="padding-left: 5%;">
				<p class="text-center display-4" style="padding-top: 15%;">
					<?php

						if (strlen($success) != 0) {
							echo $success;
						} else if (strlen($fail) != 0) {
							echo "$fail";
						} else if (strlen($nul) != 0) {
							echo "$nul";
						}
					?>
				</p></span>
			</div>
		</div>
	</main>
</body>
</html>