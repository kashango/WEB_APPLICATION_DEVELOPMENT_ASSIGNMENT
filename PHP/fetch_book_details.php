<?php
// Include the file to establish a database connection
include "db_conn.php";

$bookTitle = $_POST['book_title'];

// Fetch the bookid and price based on the provided book title
$sql = "SELECT bookid, price FROM books WHERE booktitle = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $bookTitle);
$stmt->execute();
$result = $stmt->get_result();
$bookDetails = $result->fetch_assoc();

echo $bookDetails['bookid'] . "," . $bookDetails['price'];
?>
