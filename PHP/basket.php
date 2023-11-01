<?php
    // Start the session to access user data
    session_start();

    // Include the file to establish a database connection
    include "db_conn.php";

    // Check if the user is authenticated (by checking if a session variable is set)
    if (!isset($_SESSION["username"])) {
        // If not authenticated, redirect back to the login page
        header("Location: ../HTML/LOGIN_REGISTER.html");
        exit();
    }

    $loggedInUserid = $_SESSION["userid"]; // Get the logged-in user ID from the session

    // Fetch the distinct book titles associated with the logged-in user from the database
    $sql = "SELECT DISTINCT booktitle, price FROM basket WHERE userid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $loggedInUserid);
    $stmt->execute();
    $result = $stmt->get_result();

    $totalPrice = 0; // Initialize total price
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Basket</title>

    <link rel="icon" href="../IMAGES/SIGMA.png" type="image/x-icon">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        #shopping-basket {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .book-item {
            margin-bottom: 10px;
            border-bottom: 1px solid #dddddd;
            padding-bottom: 10px;
        }

        button {
            padding: 8px 16px;
            background-color: #4EA685;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #57B894;
        }

        .total-price {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        a {
            position: fixed;
            top: 20px;
            right: 20px;
            text-decoration: none;
            background-color: #4EA685;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    <!-- Shopping basket -->
    <div>
        <h1>
            Your shopping basket
        </h1>
    </div>
    <div id="shopping-basket">
        <!-- Display shopping basket -->
        <?php
            // Check if there are any rows returned from the query
            if ($result->num_rows === 0) {
                echo "<p>Your shopping basket is empty</p>";
            } else {
                // Display the fetched books and their prices in the shopping cart section
                while ($row = $result->fetch_assoc()) {
                    $bookTitle = $row['booktitle'];
                    $bookPrice = 0; // Initialize with default value
                    $stmt = $conn->prepare("SELECT price FROM basket WHERE userid = ? AND booktitle = ?");
                    $stmt->bind_param('ss', $loggedInUserid, $bookTitle);
                    $stmt->execute();
                    $priceResult = $stmt->get_result();
                    if ($priceRow = $priceResult->fetch_assoc()) {
                        $bookPrice = $priceRow['price'];
                        $totalPrice += $bookPrice; // Add the book price to the total
                    }

                    echo "<div class='book-item'>";
                    echo "<p>" . $bookTitle . " - Price: N$" . $bookPrice . "</p>";
                    echo "<button onclick='removeFromBasket(\"$bookTitle\")'>Remove</button>";
                    echo "</div>";
                }
            }
        ?>
    </div>

 <!-- Display total price and proceed to payment button -->
 <div class='total-price'>
            <b><p>Total Price: N$<?php echo $totalPrice; ?></b></p>
            <button onclick='proceedToPayment()'>Proceed to Payment</button>
        </div>
    </div>

    <!-- Home link -->
    <a href="../PHP/welcome.php">Home</a>
    <a style = "top: 20px; right: 120px;" href="../PHP/logout.php">Logout</a>
    

    <script src="../JS/jquery-3.4.1.min.js"></script>
    <script src="../JS/popper.min.js"></script>
    <script src="../JS//bootstrap-4.4.1.js"></script>

    <script>
        function removeFromBasket(bookTitle) {
            // Make an AJAX call to remove the book from the basket
            $.post("../PHP/remove_from_basket.php", { book_title: bookTitle }, function(data) {
                console.log(data); // Display the response from the PHP script

                // Reload the page after successful removal
                location.reload();
            });
        }

        
        function proceedToPayment() {
            window.location.href = '../HTML/ADDRESS.html';
        }
    

    </script>


</body>
</html>
