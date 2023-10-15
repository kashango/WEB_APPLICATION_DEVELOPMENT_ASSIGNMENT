<?php
// Start the session to access user data
session_start();
include "db_conn.php"; // Include the file to establish a database connection

// Check if a user is logged in
if (isset($_SESSION['username'])) {
    if (isset($_POST['book_title'])) { // Check if the 'book_title' is provided in the POST request
        $userid = $_SESSION['userid']; // Get the user's ID from the session
        $username = $_SESSION['username']; // Get the username from the session
        $book_title = $_POST['book_title']; // Get the book title from the POST request

        // Fetch book details by title from the 'books' table
        $stmt = $conn->prepare("SELECT bookid, price FROM books WHERE booktitle = ?");
        $stmt->bind_param('s', $book_title);
        $stmt->execute();
        $result = $stmt->get_result();
        $bookDetails = $result->fetch_assoc();

        if ($bookDetails) {
            $bookid = $bookDetails['bookid']; // Get the book ID
            $price = $bookDetails['price']; // Get the price of the book

            // Insert the book details into the 'basket' table
            $stmt = $conn->prepare("INSERT INTO basket (userid, username, bookid, booktitle, price) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param('isisd', $userid, $username, $bookid, $book_title, $price);
            $stmt->execute();

            echo "Added to basket successfully"; // Notify that the book was added successfully
        } else {
            echo "Book details not found."; // Notify if the book details were not found
        }
    }
} else {
    echo "User not logged in."; // Notify if the user is not logged in
}
?>
