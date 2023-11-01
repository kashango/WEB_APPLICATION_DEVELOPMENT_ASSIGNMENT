<?php
session_start(); // Start a PHP session
include "db_conn.php"; // Include the file to establish a database connection

// Check if the searchInput is set
if (isset($_POST['searchInput'])) {
    $searchInput = $_POST['searchInput'];
    
    // Prepare and bind the statement
    $stmt = $conn->prepare("SELECT * FROM books WHERE LOWER(booktitle) LIKE ?");
    
    // Add wildcards to the search term
    $sanitizedSearchInput = '%' . strtolower($searchInput) . '%';
    
    $stmt->bind_param("s", $sanitizedSearchInput);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Close the statement
    $stmt->close();
} else {
    echo "No search input provided!";
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search results</title>
    <link rel="icon" href="../IMAGES/SIGMA.png" type="image/x-icon">

    <style>
        /* Style the buttons */
        .button-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .button {
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <!-- Search results -->
    <div id="search-results">
    <?php
        // Check if there are any rows returned from the query
        if ($result->num_rows === 0) {
            echo "<p>No results found!</p>";
        } else {
            while ($row = $result->fetch_assoc()) {
                $bookTitle = $row['booktitle'];
                $bookAuthor = $row['author'];
                $bookPrice = $row['price'];

                echo "<div class='book-item'>";
                echo "<p>Title: " . $bookTitle . "</p>";
                echo "<p>Author: " . $bookAuthor . "</p>";
                echo "<p>Price: N$" . $bookPrice . "</p>";
                echo "<button onclick='addToBasket(\"$bookTitle\")'>Add to Basket</button>";
                echo "</div>";
            }
        }
    ?>
    </div>
    <div class="button-container">
        <a class="button" href="../PHP/basket.php">Basket</a>
        <a class="button" href="../PHP/logout.php">Logout</a>
        <a class="button" href="../PHP/welcome.php">Home</a>
    </div>

<script>
<script>
    function addToCart(bookTitle) {
        $.ajax({
            url: '../PHP/update_basket.php',
            type: 'POST',
            data: { book_title: bookTitle },
            success: function(response) {
                // Display the response in the console or handle it as needed
                console.log(response);
            },
            error: function(error) {
                console.error(error);
            }
        });
    }
</script>

</script>

    <script src="../JS/jquery-3.4.1.min.js"></script>
    <script src="../JS/popper.min.js"></script>
    <script src="../JS/bootstrap-4.4.1.js"></script>
</body>
</html>
