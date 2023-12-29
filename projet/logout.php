<?php
// logout.php

// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Set the logout message
$_SESSION['logout_message'] = "Sad to see you leave";

// Destroy the session
session_destroy();

// Redirect to the login page after logout
header("location: login.php");
exit();
?>
