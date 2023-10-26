<?php
session_start(); // Start a session

include "db_conn.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


if ($stmt = $conn->prepare('SELECT userid, password FROM users WHERE username = ?')){
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $stmt->store_result();


    // Check if the username is not already registered
    $checkQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows == 0) {
        // Hash and salt the password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $insertQuery = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        
        if ($conn->query($insertQuery) === TRUE) {
            // Registration successful, redirect to login page
            header("Location: ../HTML/LOGIN_REGISTER.html");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        // Username is already taken, set an error message
    

    // Redirect back to the registration page
    header("Location: ../HTML/REGISTER_DENIED.html");
    exit();
    }

    // Close the database connection
    $conn->close();

} else {
    // If the form wasn't submitted, redirect to the registration page
    header("Location: ../HTML/REGISTER.html");
    exit();
}
?>
