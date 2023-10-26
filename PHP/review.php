<?php
// Start the session to access user data
session_start();

// Include the file to establish a database connection
include "db_conn.php";

if (isset($_GET['book_title'])) {
    $bookTitle = $_GET['book_title'];

    // Fetch the book details based on the provided book title
    $sql = "SELECT * FROM books WHERE booktitle = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $bookTitle);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "<p>No results found!</p>";
    } else {
        while ($row = $result->fetch_assoc()) {
            $bookTitle = $row['booktitle'];
            $bookAuthor = $row['author'];
            $bookPrice = $row['price'];
            $bookReview = $row['review'];

        }
    }
} else {
    echo "<p>Book title not provided!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Review</title>
    <link rel="icon" href="../IMAGES/SIGMA.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .book-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .book-item img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .book-item p {
            margin: 5px 0;
        }

        .home-link {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .home-link a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4EA685;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .home-link a:hover {
            background-color: #57B894;
        }
    </style>
</head>
<body>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "db_conn.php";

if (isset($_GET['book_title']) && isset($_GET['image_url'])) {
    $bookTitle = $_GET['book_title'];
    $imageUrl = $_GET['image_url'];

    $sql = "SELECT * FROM books WHERE booktitle = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $bookTitle);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "<p>No results found!</p>";
    } else {
        $row = $result->fetch_assoc();
        $bookAuthor = $row['author'];
        $bookPrice = $row['price'];
        $bookReview = $row['review'];

        echo "<div class='book-item'>";
        echo "<img src='" . $imageUrl . "' alt='Book Cover'>";
        echo "<p><strong>Title:</strong> " . $bookTitle . "</p>";
        echo "<p><strong>Author:</strong> " . $bookAuthor . "</p>";
        echo "<p><strong>Price:</strong> N$" . $bookPrice . "</p>";
        echo "<p><strong>Review:</strong> " . $bookReview . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>Book title or image URL not provided!</p>";
}
?>

<div class="home-link">
    <a href="../PHP/welcome.php">Home</a>
</div>

    <script src="../JS/jquery-3.4.1.min.js"></script>
    <script src="../JS/popper.min.js"></script>
    <script src="../JS/bootstrap-4.4.1.js"></script>
</body>
</html>