<?php
// start the session
session_start();

// clear the session
unset($_SESSION['email']);

// redirect to home.php
header("Location: home.php");
die();
?>