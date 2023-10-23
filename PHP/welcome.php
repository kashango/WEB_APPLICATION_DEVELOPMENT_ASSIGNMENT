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
  <title>Home</title>


	<link rel="icon" href="../IMAGES/SIGMA.png" type="image/x-icon">


  <link rel="stylesheet" type="text/css" href="../CSS/INDEX.css">
  <link rel="stylesheet" type="text/css" href="../CSS/CATALOGUES.css">
  <link rel="stylesheet" type="text/css" href="../CSS/BOOK WALL.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
  <link href="../CSS/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>
<body>
  <center>
  <div class="header finisher-header" style="width: 98%; height: 300px; position: relative;">
    <p1 style="font-family: Bangers; font-size: 50px; color: white; text-shadow: 3px 3px 3px #ababab; padding-top: 20px;padding-left: 20px;">BOOK RANGERS</p1>
    <div style="position: absolute; top: 70px; left: 50%; transform: translateX(-50%);">
      <input id="searchInput" type="text" placeholder="Search for books..." style="padding: 10px; width: 200px;">
      <button onclick="searchBooks()" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">Search</button>
    </div>
    <a style="position: absolute; top: 20px; right: 20px; color: white; font-size: 20px;" href="/WAD Project/PHP/basket.php">BASKET</a>
    <br>
    <img src="../IMAGES/SIGMA.png" alt="LOGO" width="54" height="52" style="margin-top: 20px;margin-left: 20px; filter: drop-shadow(0 0 3px white);"></img>
    <div style="position: absolute; top: 70px; right: 20px;">
      <ul style="list-style: none; padding: 0; margin: 0;">
        <li style="display: flex; align-items: center;">
          <i class="fa fa-shopping-cart" style="font-size: 24px; color: white;"></i>
          <span class='counter' style="margin-left: 5px;"></span>
        </li>
      </ul>
    </div>
  </div>  

  <main>
    <div style = "padding-bottom: 40px;">
        <h2 style="font-family: Indie Flower; box-sizing: border-box; overflow: visible; font-weight: bold;">Hello, <?php
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
      <img src="../IMAGES/HARRY POTTER AND THE CURSED CHILD.jpg" alt="Harry Potter" height='300'/>
      <img src="../IMAGES/THE GREAT GATSBY.jpg" alt="The Great Gatsby" height='300'/>
      <img src="../IMAGES/BORING GIRLS.jpg" alt="Boring Girls" height='300'/>
      <img src="../IMAGES/WHATS LEFT OF ME.jpg" alt="What's Left of Me" height='300'/>
      <img src="../IMAGES/BUTTS A BACKSTORY.avif" alt="Butts: A Backstory" height='300'/>
      <img src="../IMAGES/THE SUBTLE ART OF NOT GIVING A FUCK.jpeg" alt="Subtle art of not giving a fuck" height='300'/>
    </div>

    <div aria-hidden="true" class="marquee__group">
      <img src="../IMAGES/DEADLY KEYHOLES.jpg" alt="Deadly Keyholes" height='300'/>
      <img src="../IMAGES/THE WICKED KING.jpg" alt="The Wicked King" height='300'/>
      <img src="../IMAGES/GHOST PRINCESS.jpg" alt="Ghost Princess" height='300'/>
      <img src="../IMAGES/HARRY POTTER AND THE CURSED CHILD.jpg" alt="Harry Potter" height='300'/>
      <img src="../IMAGES/THE GREAT GATSBY.jpg" alt="The Great Gatsby" height='300'/>
      <img src="../IMAGES/BORING GIRLS.jpg" alt="Boring Girls" height='300'/>
      <img src="../IMAGES/WHATS LEFT OF ME.jpg" alt="What's Left of Me" height='300'/>
      <img src="../IMAGES/BUTTS A BACKSTORY.avif" alt="Butts: A Backstory" height='300'/>
      <img src="../IMAGES/THE SUBTLE ART OF NOT GIVING A FUCK.jpeg" alt="Subtle art of not giving a fuck" height='300'/>
    </div>
  </div>

  <div class="marquee marquee--reverse">
    <div class="marquee__group">
      <img src="../IMAGES/ALL THE LIGHT WE CANNOT SEE.jpeg" alt="ALL THE LIGHT WE CANNOT SEE" height='300'/>
      <img src="../IMAGES/HOUSE OF RULES.jpeg" alt="HOUSE OF RULES" height='300'/>
      <img src="../IMAGES/IT ENDS WITH US.jpeg" alt="IT ENDS WITH US" height='300'/>
      <img src="../IMAGES/MY SISTER'S KEEPER.jpeg" alt="MY SISTER'S KEEPER" height='300'/>
      <img src="../IMAGES/THE ALCHEMIST.jpeg" alt="THE ALCHEMIST" height='300'/>
      <img src="../IMAGES/THE GIRL WITH THE DRAGON TATTOO.jpeg" alt="THE GIRL WITH THE DRAGON TATTOO" height='300'/>
      <img src="../IMAGES/THE HUNGER GAMES CATCHING FIRE.jpeg" alt="THE HUNGER GAMES CATCHING FIRE" height='300'/>
      <img src="../IMAGES/THE HUNGER GAMES THE BALLAD OF SONGBIRDS AND SNAKES.jpeg" alt="THE HUNGER GAMES THE BALLAD OF SONGBIRDS AND SNAKES" height='300'/>
      <img src="../IMAGES/THE HUNGER GAMES.jpeg" alt="THE HUNGER GAMES" height='300'/>
    </div>

    <div aria-hidden="true" class="marquee__group">
    <img src="../IMAGES/ALL THE LIGHT WE CANNOT SEE.jpeg" alt="ALL THE LIGHT WE CANNOT SEE" height='300'/>
      <img src="../IMAGES/HOUSE OF RULES.jpeg" alt="HOUSE OF RULES" height='300'/>
      <img src="../IMAGES/IT ENDS WITH US.jpeg" alt="IT ENDS WITH US" height='300'/>
      <img src="../IMAGES/MY SISTER'S KEEPER.jpeg" alt="MY SISTER'S KEEPER" height='300'/>
      <img src="../IMAGES/THE ALCHEMIST.jpeg" alt="THE ALCHEMIST" height='300'/>
      <img src="../IMAGES/THE GIRL WITH THE DRAGON TATTOO.jpeg" alt="THE GIRL WITH THE DRAGON TATTOO" height='300'/>
      <img src="../IMAGES/THE HUNGER GAMES CATCHING FIRE.jpeg" alt="THE HUNGER GAMES CATCHING FIRE" height='300'/>
      <img src="../IMAGES/THE HUNGER GAMES THE BALLAD OF SONGBIRDS AND SNAKES.jpeg" alt="THE HUNGER GAMES THE BALLAD OF SONGBIRDS AND SNAKES" height='300'/>
      <img src="../IMAGES/THE HUNGER GAMES.jpeg" alt="THE HUNGER GAMES" height='300'/>
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
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">DEADLY KEYHOLES</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Julie Morton</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$199.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--orange'>
              <div class='product_inner'>
                <img src='../IMAGES/THE WICKED KING.jpg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">THE WICKED KING</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Holly Back</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$149.99</p>
                <button class="add-to-basket-button">Add to basket</button>
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
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">GHOST PRINCESS</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Lana Watts</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$399.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--green'>
              <div class='product_inner'>
                <img src='../IMAGES/HARRY POTTER AND THE CURSED CHILD.jpg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">HARRY POTTER AND THE CURSED CHILD</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">J.K Rowling</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$299.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--yellow'>
              <div class='product_inner'>
                <img src='../IMAGES/THE GREAT GATSBY.jpg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">THE GREAT GATSBY</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">F.Scott Fitzgerald</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$299.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--pink'>
              <div class='product_inner'>
                <img src='../IMAGES/BORING GIRLS.jpg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">BORING GIRLS</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Sara Taylor</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$299.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
          </div>
    </div>

    <div id="book-catalog">
        <!-- Display books here using PHP -->
        <div class='row'>
            <div class='product--blue'>
              <div class='product_inner'>
                <img src='../IMAGES/ALL THE LIGHT WE CANNOT SEE.jpeg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">ALL THE LIGHT WE CANNOT SEE</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Anthony Doerr</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$499.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--orange'>
              <div class='product_inner'>
                <img src='../IMAGES/HOUSE OF RULES.jpeg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">HOUSE OF RULES</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Jodi Picoult</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$349.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
    
            <br>
            <div class='product--red'>
              <div class='product_inner'>
                <img src='../IMAGES/IT ENDS WITH US.jpeg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">IT ENDS WITH US</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Colleen Hoover</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$299.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--green'>
              <div class='product_inner'>
                <img src="../IMAGES/MY SISTER'S KEEPER.jpeg" width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">MY SISTER'S KEEPER.jpeg</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Jodi Picoult</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$339.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--yellow'>
              <div class='product_inner'>
                <img src='../IMAGES/THE ALCHEMIST.jpeg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">THE ALCHEMIST</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Paulo Coelho</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$229.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--pink'>
              <div class='product_inner'>
                <img src='../IMAGES/THE GIRL WITH THE DRAGON TATTOO.jpeg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">THE GIRL WITH THE DRAGON TATTOO</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Stieg Larsson</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$599.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
          </div>
    </div>

    <div id="book-catalog">
        <!-- Display books here using PHP -->
        <div class='row'>
            <div class='product--blue'>
              <div class='product_inner'>
                <img src='../IMAGES/THE HUNGER GAMES CATCHING FIRE.jpeg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">THE HUNGER GAMES CATCHING FIRE</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Suzanne Collins</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$499.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--orange'>
              <div class='product_inner'>
                <img src='../IMAGES/THE HUNGER GAMES THE BALLAD OF SONGBIRDS AND SNAKES.jpeg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">THE HUNGER GAMES THE BALLAD OF SONGBIRDS AND SNAKES</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Suzanne Collins</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$449.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
    
            <br>
            <div class='product--red'>
              <div class='product_inner'>
                <img src='../IMAGES/THE HUNGER GAMES.jpeg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">THE HUNGER GAMES</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Suzanne Collins</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$899.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--green'>
              <div class='product_inner'>
                <img src="../IMAGES/THE SUBTLE ART OF NOT GIVING A FUCK.jpeg" width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">THE SUBTLE ART OF NOT GIVING A FUCK</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Mark Manson</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$489.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--yellow'>
              <div class='product_inner'>
                <img src='../IMAGES/BUTTS A BACKSTORY.avif' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">BUTTS A BACKSTORY</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Heather Radke</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$759.99</p>
                <button class="add-to-basket-button">Add to basket</button>
              </div>
              <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
              </div>
            </div>
            <div class='product--pink'>
              <div class='product_inner'>
                <img src='../IMAGES/WHATS LEFT OF ME.jpg' width='300'>
                <p style="padding-top: 10px; text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">WHATS LEFT OF ME</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Kat Zhang</p>
                <p style="text-shadow:-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Price N$399.99</p>
                <button class="add-to-basket-button">Add to basket</button>
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
  <script src="../JS/bootstrap-4.4.1.js"></script>

  <script src="../JS/finisher-header.es5.min.js" type="text/javascript"></script>

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
        $(".add-to-basket-button").on("click", function() {
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


    // Header and search bar!
    new FinisherHeader({
      "count": 10,
      "size": {
        "min": 1300,
        "max": 1500,
        "pulse": 0
      },
      "speed": {
        "x": {
          "min": 0.1,
          "max": 0.6
        },
        "y": {
          "min": 0.1,
          "max": 0.6
        }
      },
      "colors": {
        "background": "#9138e5",
        "particles": [
          "#ff4848",
          "#000000",
          "#2235e5",
          "#000000",
          "#ff0000"
        ]
      },
      "blending": "overlay",
      "opacity": {
        "center": 0.5,
        "edge": 0.05
      },
      "skew": -2,
      "shapes": [
        "c",
        "t"
      ]
    });

    function searchBooks() {
        var searchInput = document.getElementById('searchInput').value;
        // Perform the search action here using the searchInput value
        $.ajax({
            url: '../PHP/search_books.php',
            type: 'POST',
            data: { searchInput: searchInput },

            success: function(response) {
                console.log(response); // Log the response to the console
                // Redirect to search_books.php
                document.open();
                document.write(response);
                document.close();
            },

            error: function(error) {
                console.error(error);
            }
        });
    }

  </script>
  </center>
</body>
</html>

