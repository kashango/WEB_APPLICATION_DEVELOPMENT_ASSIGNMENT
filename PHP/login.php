<?php
session_start(); // Start a PHP session
include "db_conn.php"; // Include a file to establish a database connection

if (isset($_POST['username']) && isset($_POST['password'])) {
    // Define a validation function to clean user input
    function validate($data){
        $data = trim($data);        // Remove leading/trailing whitespace
        $data = stripslashes($data);  // Remove backslashes
        $data = htmlspecialchars($data);  // Convert special characters to HTML entities
        return $data;
    }

    $username = validate($_POST['username']); // Clean the provided username
    $password = validate($_POST['password']); // Clean the provided password

    if (empty($password)) {
        // If the password is empty, redirect to the index page with an error message
        header("Location:  ../HTML/LOGIN.html?error=Password is required");
        exit();
    } else {
        // SQL query to check if the provided username and password exist in the database
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql); // Execute the SQL query

        if (mysqli_num_rows($result) === 1) {
            // If exactly one row matches the username and password, login the user
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['userid'] = $row['userid'];
                

                header("Location:  ../PHP/welcome.php"); // Redirect to the home page
                exit();
            } else {
                // If the provided username and password don't match, redirect with an error
                header("Location:  ../HTML/LOGIN_DENIED.html?error=Incorrect Username or Password");
                exit();
            }
        } else {
            // If no match was found, redirect with an error
            header("Location:  ../HTML/LOGIN_DENIED.html?error=Incorrect Username or Password");
            exit();
        }
    }
} else {
    // If no valid POST data was received, redirect to the index page
    header("Location:  ../HTML/LOGIN_DENIED.html?error=ERROR INTERCEPTING USER DATA");
    exit();
}
