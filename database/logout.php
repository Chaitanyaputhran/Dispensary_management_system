<?php
session_start();
// Remove all session variables
session_unset();
// Destroy the session
session_destroy();
// Redirect to the login page
header('Location: ../index.php');
exit(); // Make sure to exit after the redirection
?>