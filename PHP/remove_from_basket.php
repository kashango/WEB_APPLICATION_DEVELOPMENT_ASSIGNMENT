<?php
// Include the file to establish a database connection
include "db_conn.php";

// Start the session to access user data
session_start();

// Check if a user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']; // Get the username from the session
    $bookTitle = $_POST['book_title']; // Get the book title from the POST request

    // Perform the database delete operation
    try {
        $stmt = $conn->prepare("DELETE FROM basket WHERE username = ? AND booktitle = ?");
        $stmt->bind_param('ss', $username, $bookTitle);
        $stmt->execute();

        echo "Removed from basket successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "User not logged in.";
}
?>
