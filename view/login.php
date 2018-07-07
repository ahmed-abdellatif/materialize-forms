<?php
require('header.php');
require('../model/config.inc.php');

include('../model/mysqli_connect.php');

$page_title = 'Login';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require(MYSQL);

	// Validate the email address:
	if (!empty($_POST['email'])) {
		$e = mysqli_real_escape_string($dbc, $_POST['email']);
	} else {
		$e = FALSE;
		echo '<p class="error">You forgot to enter your email address!</p>';
	}

	// Validate the password:
	if (!empty($_POST['pass'])) {
		$p = trim($_POST['pass']);
	} else {
		$p = FALSE;
		echo '<p class="error">You forgot to enter your password!</p>';
	}

	if ($e && $p) { // If everything's OK.

		// Query the database:
		$q = "SELECT user_id, first_name, user_level, pass FROM users WHERE email='$e' AND active IS NULL";
		$r = mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br>MySQL Error: " . mysqli_error($dbc));

		if (@mysqli_num_rows($r) == 1) { // A match was made.

			// Fetch the values:
			list($user_id, $first_name, $user_level, $pass) = mysqli_fetch_array($r, MYSQLI_NUM);
			mysqli_free_result($r);

			// Check the password:
			if (password_verify($p, $pass)) {

				// Store the info in the session:
				$_SESSION['user_id'] = $user_id;
				$_SESSION['first_name'] = $first_name;
				$_SESSION['user_level'] = $user_level;
				mysqli_close($dbc);

				// Redirect the user:
				$url = BASE_URL . 'home.php'; // Define the URL.
				ob_end_clean(); // Delete the buffer.
				header("Location: $url");
				exit(); // Quit the script.

			} else {

				echo '<p class="error">Either the email address and password entered do not match those on file or you have not yet activated your account.</p>';
			}

		} else { // No match was made.
			echo '<p class="error">Either the email address and password entered do not match those on file or you have not yet activated your account.</p>';
		}

	} else { // If everything wasn't OK.
		echo '<p class="error">Please try again.</p>';
	}

	mysqli_close($dbc);

} // End of SUBMIT conditional.
?>
<!-- login title -->
<div class="row">
		 <div class="col s12">
<h1>Login</h1>
<p>Your browser must allow cookies in order to log in.</p>
</div>
</div>
<!-- login form start -->
		<div class="row">
    <form class="col s12" action="login.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
<input type="email" name="email" size="20" maxlength="60" id="icon_prefix" type="text" class="validate">
	<label for="icon_prefix">Email</label>
        </div>

				<div class="input-field col s6">
				          <i class="material-icons prefix">lock</i>
				          <input type="password" name="pass" size="20" id="icon_telephone" type="password" class="validate">
				          <label for="icon_prefix">Password</label>
				        </div>
								<button class="btn waves-effect waves-light" type="submit" name="submit" value="Login">Submit
    <i class="material-icons right">send</i>
  </button>
				      </div>
				    </form>
				  </div>

<?php include('footer.php'); ?>
