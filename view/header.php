<?php

// This page begins the HTML header for the site.

// Start output buffering:
ob_start();

// Initialize a session:
session_start();

// Check for a $page_title value:
if (!isset($page_title)) {
	$page_title = 'User Registration';
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title; ?></title>
	      <!--Import Google Icon Font-->
	      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	      <!--Import materialize.css-->
	      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="home.php" class="brand-logo"><i class="material-icons">home</i>Home</a>
      <ul class="right hide-on-med-and-down">

				<?php
				// This page completes the HTML template.

				// Display links based upon the login status:
				if (isset($_SESSION['user_id'])) {
          echo '<ul>';
					echo '<li><a href="logout.php"><i class="material-icons">exit_to_app</i></a></li>';
					echo '<li><a href="change_password.php"><i class="material-icons">lock</i></a></li>';
				}
	    	 else { //  Not logged in.]

           echo '<li><a href="home.php"><i class="material-icons">home</i></a></li>';
					 echo '<li><a href="register.php"><i class="material-icons">create</i></a></li>';
					 echo '<li><a href="login.php"><i class="material-icons">account_circle</i></a></li>';
					 echo '<li><a href="forgot_password.php"><i class="material-icons">security</i></a></li>';
					 echo '</ul>';
				}

				?>


    </div>
  </nav>

<div id="Content">
<!-- End of Header -->
