<?php
require('../model/config.inc.php');
require('header.php');
?>

<?php

// Welcome the user (by name if they are logged in):
echo '<h1>Welcome';
if (isset($_SESSION['first_name'])) {
	echo ", {$_SESSION['first_name']}";
}
echo '!</h1>';
echo '<p>Hello.</p>';

?>

<?php require('footer.php'); ?>
