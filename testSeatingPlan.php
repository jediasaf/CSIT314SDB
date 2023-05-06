<?php

class doOrder{

  function display(){

    if(!isset($_SESSION)){
      session_start();
    }

    #$loyaltyPoints = $_SESSION['loyaltyPoints'];
    #$username = $_SESSION['username'];
    $loyaltyPoints = 100;
    $username = 'acalafato1x';
    
    #$movieID = $_GET['name'];
    $movieID = 'Belle2021';

    include('dbFunctions.php');
    
    $controller = new controller();
    $movieDetails = $controller -> run('getMovieFromID',$movieID);

    # movie details
    $movieTitle =  $movieDetails[0]['movieTitle'];
    $genre = $movieDetails[0]['genres'];
    $directorName = $movieDetails[0]['directorName'];
    $description = $movieDetails[0]['description'];
    $duration = $movieDetails[0]['duration'];
    $actor_1_name = $movieDetails[0]['actor_1_name'];
    $actor_2_name = $movieDetails[0]['actor_2_name'];
    $actor_3_name = $movieDetails[0]['actor_3_name'];
    $country = $movieDetails[0]['country'];
    $classificaionRating = $movieDetails[0]['classificationRating'];
    $yearReleased = $movieDetails[0]['yearReleased'];
    $ratings = $movieDetails[0]['rantings'];
    $trailerLink = $movieDetails[0]['trailerLink'];
    $moviePicName = $movieDetails[0]['moviePicName'];
    $availability = $movieDetails[0]['availability'];

    # room ID, rows and cols
    $roomPlan = $controller -> run('getRoomPlan',$movieID);
    $roomID = $roomPlan[0]['roomID'];
    $row = $roomPlan[0]['rows'];
    $cols = $roomPlan[0]['columns'];

    # get seatName and availability
    $roomSpecs = $controller ->run('getRoomSpecs',$roomID);
    $status = $roomSpecs[0]['status'];
    $seatName = $roomSpecs[0]['seatName'];

    # get details from fooddb
    $foodDetails = $controller -> run('getAvailableFoodDetails');
    $foodName1 = $foodDetails[0]['foodName'];
    $foodName2 = $foodDetails[1]['foodName'];
    $foodPicName1 = $foodDetails[0]['foodPicName'];
    $foodPicName2 = $foodDetails[1]['foodPicName'];

    # get booking details
    $bookingDetails = $controller -> run('getBookingDetails',$username);
    $bookingID = $bookingDetails[0]['bookingID'];
    

    #$controller -> run('updateSeatStatus',$roomID,$seatName);

    echo'<!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>buy now</title>
    <style type="text/css">
    @import url("CSS/coba.css");
    </style>
    </head>';
    
    include('navbar.php');

    echo'<body>
    <div class="movie-container">
    <label> <br>
    Select a movie :</label>
    <select id="movie">';
    echo'<option value="1">'.$movieTitle.' - Adult SG$10</option>';
    echo'<option value="2">'.$movieTitle.' - Child SG$8</option>';
    echo'<option value="3">'.$movieTitle.' - Senior SG$8</option>';
    echo'<option value="4">'.$movieTitle.' - Student SG$9</option>';
    echo'</select>
    </div>';

    echo'<div class="synopsis">
    <div class="hero-container">
    <div class="main-container">
    <div class="poster-container">';
    echo'<a href="#"><img src="Images/MovieImage/'.$moviePicName.'" class="poster" /></a>';
    echo'</div>';
    echo'<div class="movie-detail-container">';
    echo'<div class="movie-detail__content">';
    echo'<h4 class="movie-detail__movie-title">';
    echo $movieTitle;
    echo'</h4>';
    echo'<p class="movie-detail__movie-slogan">';
    echo $description;
    echo'</p>';
    echo'<p class="movie-detail__movie-director">';
    echo $directorName;
    echo'</p>';
    echo'<p class="movie-detail__movie-duration">';
    echo 'Duration: '.$duration.'mins';
    echo'</p>';
    echo'<p class="movie-detail__movie-actors-casts">';
    echo 'Actors: '.$actor_1_name.', '.$actor_2_name.', '.$actor_3_name;
    echo '<br>';
    echo 'Director: '.$directorName;
    echo '<br>';
    echo 'Year Released: '.$yearReleased;
    echo'</p>';
    echo'<p class="movie-detail__movie-rating">';
    echo 'Rating: '.$ratings.'/10';
    echo'</p>';
    
    echo'<p class="movie-detail__current-price">$8.00</p>
    <p class="movie-detail__old-price">$14.99</p>
    </div>
    </div>
    </div>
    </div>';

    #seating plan goes here


    echo'</div>
    </body>
	  <body>
    <h2>food &amp; beverages.</h2>
		<div class="hero-container">
		<div class="main-container">
		<div class="poster-container">';
		echo'<a href="#"><img src="Images/Combo/'.$foodPicName1.'" class="poster" /></a>';
		echo'</div>
		<div class="food-container">
		<div class="food__content">';
		echo'<h4 class="food__movie-title">'.$foodName1.'</h4>';
		echo'<p class="food__movie-slogan">'.$foodName1.'</p>';
		echo'<p class="food__current-price">$8.00</p>
		<p class="food__old-price">$14.99</p>
		<button class="food__buy-btn">Add to Cart</button>
		</div>
		</div>
		</div>
    <div class="main-container">
    <div class="poster-container">';
    echo '<a href="#"><img src="Images/Combo/'.$foodPicName2.'" class="poster" /></a>';
    echo'</div>
    <div class="food-container">
    <div class="food__content">';
    echo'<h4 class="food__movie-title">'.$foodName2.'</h4>';
    echo'<p class="food__movie-slogan">'.$foodName2.'</p>';
    echo'<p class="food__current-price">$10.75</p>
    <p class="food__old-price">$20.99</p>
    <button class="food__buy-btn">Add to Cart</button>
    </div>
    </div>
    </div>
    </div>
    </body>';

    echo'<body class="shoppingCart">
    <div class="CartContainer">
    <div class="Header">
    <h3 class="Heading">&nbsp;</h3><h3 class="Heading">&nbsp;</h3><h3 class="Heading">Shopping Cart</h3>';
    echo'<h5 class="Action">Booking ID: '.$bookingID.'</h5>';
    echo'<h5 class="Action">Loyalty Points: '.$loyaltyPoints.'</h5>';
    echo'<h5 class="Action"> Username: '.$username.'</h5>';
    echo'</div>';

    echo'<div class="Cart-Items">
    <div class="image-box">';
    echo'<img src="Images/MovieImage/'.$moviePicName.'" style={{ height="200px" }} />';
    echo'</div>
    <div class="about">';
    echo'<h1 class="title">'.$movieTitle.'</h1>';
    echo'<h3 class="subtitle">Child</h3>
    <h3 class="subtitle">2pm</h3>
    </div>
    <div class="counter">
    <div class="btn">+</div>
    <div class="count">2</div>
    <div class="btn">-</div>
    </div>
    <div class="prices">
    <div class="amount">$12.99</div>
    <div class="save"><u>Use Points (Only If 100 Points Earned)</u></div>
    <div class="remove"><u>Remove</u></div>
    </div>
    </div>';

    echo'<div class="Cart-Items">
    <div class="image-box">';
    echo'<img src="Images/MovieImage/'.$moviePicName.'" style={{ height="200px" }} />';
    echo'</div>
    <div class="about">';
    echo'<h1 class="title">'.$movieTitle.'</h1>';
    echo'<h3 class="subtitle">Adult</h3>
    <h3 class="subtitle">2pm</h3>
    </div>
    <div class="counter">
    <div class="btn">+</div>
    <div class="count">2</div>
    <div class="btn">-</div>
    </div>
    <div class="prices">
    <div class="amount">$12.99</div>
    <div class="save"><u>Use Points (Only If 100 Points Earned)</u></div>
    <div class="remove"><u>Remove</u></div>
    </div>
    </div>
    <hr>';

    echo'<div class="checkout">
    <div class="total">
    <div>
    <div class="Subtotal">Sub-Total</div>
    <div class="items">2 items</div>
    </div>
    <div class="total-amount">$6.18</div>
    </div>
    <a href="PaymentPage.php">
    <button class="button">Checkout</button></div>
    </a>
    </div>
    </body>

    <footer> 
    <h3>Software Development Board 2023</h3><br>
    <p>Pop-Up Cinema in Town</p>
    </footer>
    </html>';
  }
}

$doOrder = new doOrder();
$doOrder->display();
?>