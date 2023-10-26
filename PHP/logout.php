<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION["username"])) {
    // If logged in, destroy the session to log the user out
    session_destroy();
}

// Redirect to the login page
header("Location: ../HTML/INDEX.html");
exit();
?>
