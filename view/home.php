<?php
// This is the main page for the site.

// Include the configuration file:
require('model/config.inc.php');

// Set the page title and require the HTML header:
$page_title = 'Welcome to this Site!';
require('header.php');

// Welcome the user (by name if they are logged in):
echo '<h1>Welcome';
if (isset($_SESSION['first_name'])) {
	echo ", {$_SESSION['first_name']}";
}
echo '!</h1>';
?>
<p>Hello.</p>


<?php require('footer.php'); ?>
