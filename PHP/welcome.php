<?php
// Start the session to access user data
session_start();

// Check if the user is authenticated (by checking if a session variable is set)
if (!isset($_SESSION["username"])) {
    // If not authenticated, redirect back to the login page
    header("Location: ../HTML/LOGIN.html");
    exit();
}

// If authenticated, you can display the welcome message and content here
$loggedInUsername = $_SESSION["username"];
$loggedInUserid = $_SESSION["userid"];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Book Rangers</title>


	<link rel="icon" href="../IMAGES/SIGMA.png" type="image/x-icon">


  <link rel="stylesheet" type="text/css" href="../CSS/INDEX.css">
  <link rel="stylesheet" type="text/css" href="../CSS/CATALOGUES.css">
  <link rel="stylesheet" type="text/css" href="../CSS/BOOK WALL.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../CSS/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>
<body>
  <center>
  <header>
      <h1>BOOK RANGERS</h1>
  
  
    <!-- Search Bar and Cart Icon -->
    <div id="search-bar">

		<div class="container">
		  <table width="1132" border="1">
		    <tbody>
		      <tr>
		        <td width="110" height="100"><center><img class="logo" src="../IMAGES/SIGMA.png" width="54" height="52" alt="LOGO"/></center></td>
		        <td width="110">
              <input type="text" id="search-input" placeholder="Search for books...">
              
            </td>
		        <td width="110">
              <button id="search-button">Search</button>
            </td>
		        <td width="110">&nbsp;</td>
		        <td width="110">&nbsp;</td>
		        <td width="110">&nbsp;</td>
		        <td width="110">&nbsp;</td>
		        <td width="120">
					<ul class = "nav"><a class ="links" href="#">HOME</a></ul></td>
		        <td width="120">
					<ul class = "nav"><a class ="links" href="#">FRIENDS</a></ul></td>
		        <td width="120">
					<ul class = "nav"><a class ="links" href="../PHP/basket.php">BASKET</a></ul></td>
	          </tr>
	      </tbody>
	    </table>
    </div>

  
   <ul>
      <i class='fa fa-shopping-cart'>
        <span class='counter'></span>
      </i>
    </ul>
    </div>
  </header>  

  <main>
    <div>
        <h2>Hello, <?php
            echo $loggedInUsername; ?>! You are now logged in, what would you love to shop today? Your shopping ID is: <?php
            echo $loggedInUserid; ?>
        </h2>
    </div>

    <!-- Book sliding wall -->
    <article class="wrapper">
  <div class="marquee">
    <div class="marquee__group">
      <img src="../IMAGES/DEADLY KEYHOLES.jpg" alt="Deadly Keyholes" height='300'/>
      <img src="../IMAGES/THE WICKED KING.jpg" alt="The Wicked King" height='300'/>
      <img src="../IMAGES/GHOST PRINCESS.jpg" alt="Ghost Princess" height='300'/>
      <img src="../IMAGES/HARRY POTTER.jpg" alt="Harry Potter" height='300'/>
      <img src="../IMAGES/THE GREAT GATSBY.jpg" alt="The Great Gatsby" height='300'/>
      <img src="../IMAGES/BORING GIRLS.jpg" alt="Boring Girls" height='300'/>
      <img src="../IMAGES/WHATS LEFT OF ME.jpg" alt="What's Left of Me" height='300'/>
      <img src="../IMAGES/BUTTS A BACKSTORY.avif" alt="Butts: A Backstory" height='300'/>
    </div>

    <div aria-hidden="true" class="marquee__group">
      <img src="../IMAGES/DEADLY KEYHOLES.jpg" alt="Deadly Keyholes" height='300'/>
      <img src="../IMAGES/THE WICKED KING.jpg" alt="The Wicked King" height='300'/>
      <img src="../IMAGES/GHOST PRINCESS.jpg" alt="Ghost Princess" height='300'/>
      <img src="../IMAGES/HARRY POTTER.jpg" alt="Harry Potter" height='300'/>
      <img src="../IMAGES/THE GREAT GATSBY.jpg" alt="The Great Gatsby" height='300'/>
      <img src="../IMAGES/BORING GIRLS.jpg" alt="Boring Girls" height='300'/>
      <img src="../IMAGES/WHATS LEFT OF ME.jpg" alt="What's Left of Me" height='300'/>
      <img src="../IMAGES/BUTTS A BACKSTORY.avif" alt="Butts: A Backstory" height='300'/>
    </div>
  </div>

  <div class="marquee marquee--reverse">
    <div class="marquee__group">
      <img src="../IMAGES/DEADLY KEYHOLES.jpg" alt="Deadly Keyholes" height='300'/>
      <img src="../IMAGES/THE WICKED KING.jpg" alt="The Wicked King" height='300'/>
      <img src="../IMAGES/GHOST PRINCESS.jpg" alt="Ghost Princess" height='300'/>
      <img src="../IMAGES/HARRY POTTER.jpg" alt="Harry Potter" height='300'/>
      <img src="../IMAGES/THE GREAT GATSBY.jpg" alt="The Great Gatsby" height='300'/>
      <img src="../IMAGES/BORING GIRLS.jpg" alt="Boring Girls" height='300'/>
      <img src="../IMAGES/WHATS LEFT OF ME.jpg" alt="What's Left of Me" height='300'/>
      <img src="../IMAGES/BUTTS A BACKSTORY.avif" alt="Butts: A Backstory" height='300'/>
    </div>

    <div aria-hidden="true" class="marquee__group">
      <img src="../IMAGES/DEADLY KEYHOLES.jpg" alt="Deadly Keyholes" height='300'/>
      <img src="../IMAGES/THE WICKED KING.jpg" alt="The Wicked King" height='300'/>
      <img src="../IMAGES/GHOST PRINCESS.jpg" alt="Ghost Princess" height='300'/>
      <img src="../IMAGES/HARRY POTTER.jpg" alt="Harry Potter" height='300'/>
      <img src="../IMAGES/THE GREAT GATSBY.jpg" alt="The Great Gatsby" height='300'/>
      <img src="../IMAGES/BORING GIRLS.jpg" alt="Boring Girls" height='300'/>
      <img src="../IMAGES/WHATS LEFT OF ME.jpg" alt="What's Left of Me" height='300'/>
      <img src="../IMAGES/BUTTS A BACKSTORY.avif" alt="Butts: A Backstory" height='300'/>
    </div>
  </div>
</article>
    
    <!-- Book Catalog -->
    <div id="book-catalog">
        <!-- Display books here using PHP -->
        <div class='row'>
            <div class='product--blue'>
              <div class='product_inner'>
                <img src='../IMAGES/DEADLY KEYHOLES.jpg' width='300'>
                <p style="padding-top: 10px;">DEADLY KEYHOLES</p>
                <p>Julie Morton</p>
                <p>Price N$199.99</p>
                <button>Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--orange'>
              <div class='product_inner'>
                <img src='../IMAGES/THE WICKED KING.jpg' width='300'>
                <p style="padding-top: 10px;">THE WICKED KING</p>
                <p>Holly Back</p>
                <p>Price N$149.99</p>
                <button>Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
    
            <br>
            <div class='product--red'>
              <div class='product_inner'>
                <img src='../IMAGES/GHOST PRINCESS.jpg' width='300'>
                <p style="padding-top: 10px;">GHOST PRINCESS</p>
                <p>Lana Watts</p>
                <p>Price N$399.99</p>
                <button>Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--green'>
              <div class='product_inner'>
                <img src='../IMAGES/HARRY POTTER.jpg' width='300'>
                <p style="padding-top: 10px;">HARRY POTTER</p>
                <p>J.K Rowling</p>
                <p>Price N$299.99</p>
                <button>Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--yellow'>
              <div class='product_inner'>
                <img src='../IMAGES/THE GREAT GATSBY.jpg' width='300'>
                <p style="padding-top: 10px;">THE GREAT GATSBY</p>
                <p>F.Scott Fitzgerald</p>
                <p>Price N$299.99</p>
                <button>Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--pink'>
              <div class='product_inner'>
                <img src='../IMAGES/BORING GIRLS.jpg' width='300'>
                <p style="padding-top: 10px;">BORING GIRLS</p>
                <p>Sara Taylor</p>
                <p>Price N$299.99</p>
                <button>Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
          </div>
    </div>
  </main>

  <footer>
      &copy; 2023 Online Bookstore
  </footer>

  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <script src="../JS/jquery-3.4.1.min.js"></script>
  <script src="../JS/popper.min.js"></script>
  <script src="../JS//bootstrap-4.4.1.js"></script>

  <!-- basket icon counter and button reaction  -->
  <script>
    $(document).ready(function() {

        "use strict";

        var init = "No new items added yet!";
        var counter = 0;

        // Initial Cart
        $(".counter").html(init);

        // Add Items To Basket
        function addToBasket() {
            counter++;
            $(".counter").html(counter).animate({
                'opacity' : '0'
            }, 300, function() {
                $(".counter").delay(300).animate({
                    'opacity' : '1'
                });
            });
        }

        // Add To Basket Animation
        $("button").on("click", function() {
            addToBasket(); 
            $(this).parent().parent().find(".product_overlay").css({
                'transform': ' translateY(0px)',
                'opacity': '1',
                'transition': 'all ease-in-out .45s'
            }).delay(1500).queue(function() {
                $(this).css({
                    'transform': 'translateY(-500px)',
                    'opacity': '0',
                    'transition': 'all ease-in-out .45s'
                }).dequeue();
            });

            var bookTitle = $(this).parent().find("p:first").text(); // Get the book title

            $.post("../PHP/fetch_book_details.php", { book_title: bookTitle }, function(data) {
            console.log(data); // Display the response from the PHP script
            

            // Call the update_basket.php script with book title, bookid, and price
            var response = data.split(",");

            $.post("../PHP/update_basket.php", { 
            book_id: response[0],
            price: response[1]
        }, function(response) {
            console.log(response); // Display the response from the PHP script
        });

            $.post("../PHP/update_basket.php", { book_title: bookTitle }, function(data) {
            console.log(data); // Display the response from the PHP script
            });
            
        });
        
      });

    });
  </script>
  </center>
</body>
</html>

