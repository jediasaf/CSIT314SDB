<?php

class doOrder{

  function display(){

    if(!isset($_SESSION)){
      session_start();
    }

    #$loyaltyPoints = $_SESSION['loyaltypts'];
    #$username = $_SESSION['username'];
    $loyaltyPoints = 100;
    # $username = 'acalafato1x';
    $username = 'cmelato28';
    
    #$movieID = $_GET['name'];
    #$_SESSION['movieID'] = $movieID;
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

    echo'<!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>buy now</title>
    <style type="text/css">
    @import url("CSS/coba.css");
    </style>
    </head>';
    
    #include('navbar.php');

    echo'<body>
    <div class="movie-container">
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
    #echo '<h1>hello</h1>';
    #echo '<h1>'.$row.'</h1>';
    #echo '<h1>'.$cols.'</h1>';

    echo '<form action="testPaymentPage.php" method = "POST">';
    echo '<div>';
    echo '<table>';
    for($r = 1 ; $r <= $row; $r++ ){
      echo '<tr>';
      for($c = 1 ; $c <= $cols; $c++){
        $result = $controller -> run("getSeatStatus",$roomID,$r,$c);
        if($result == 1){
          echo '<td><img width="50px" height="50px" src="Images/taken.png"><input type="checkbox" name="col'.$c.'row'.$r.'" value="" checked disabled  ></td>';
        } 
        else if($result == 0){
          echo '<td><img width="50px" height="50px" src="Images/selected.png"><input type="checkbox" name="col'.$c.'row'.$r.'" value="'.$c.'*'.$r.'" ></td>';
        }
        
      }
      echo '</tr>';
    }
    echo '</table>';
    echo '<h2>SCREEN</h2>';
    echo '</div>';

    
    #cleaning
    echo '<br><br><br><br>';

    #display available food
    echo'</div>
    </body>
	  <body>
    <h2>food &amp; beverages.</h2>
		<div class="hero-container">';
    for ($i = 0; $i < count($foodDetails); $i++) {
      echo'<div class="main-container">
      <div class="poster-container">';
      echo'<a href="#"><img src="Images/Combo/'.$foodDetails[$i]['foodPicName'].'" class="poster" /></a>';
      echo'</div>
      <div class="food-container">
      <div class="food__content">';
      echo'<p class="food__current-price">$8.00</p>';
      echo'<h4 class="food__movie-title">'.$foodDetails[$i]['foodName'].'</h4>';
      echo'<p class="food__movie-slogan">'.$foodDetails[$i]['foodName'].'</p>';
      echo'</div>
      </div>
      </div>';
    }
    echo'</div>
    </body>';

    echo'
	<body class="shoppingCart">
	<div class="CartContainer">
   	   <div class="Header">
   	   	<h3 class="Heading">&nbsp;</h3><h3 class="Heading">&nbsp;</h3><h3 class="Heading">Shopping Cart</h3>
		   <h5 class="Action">Loyalty Points: '.$loyaltyPoints.'</h5>
		   <h5 class="Action"> Username: '.$username.'</h5>
   	   </div>

   	   <div class="Cart-Items">

<table>
    <thead>
    <th class="ticketType">Ticket Type</th>
    <th style="padding-right:10px" class="numTickets">Number of tickets</th>
    </thead>
    <tbody >
    <tr style="margin-bottom: 5px; margin-top: 10px;">
        <td style="padding-right:10px">Senior - $6 per ticket</td>
        <td><input name="SeniorNoTicket" value = "0" type="number" min = "0"></td>
    </tr>
    <tr>
        <td style="padding-right:10px">Adult - $12 per ticket</td>
        <td><input name="AdultNoTicket" value = "0" type="number" min = "0"></td>
    </tr>
    <tr>
        <td style="padding-right:10px">Student - $8 per ticket</td>
        <td><input name="StudentNoTicket" value = "0" type="number" min = "0"></td>
    </tr>
    <tr>
        <td style="padding-right:10px">Child - $6 per ticket</td>
        <td><input name="ChildNoTicket" value = "0"type="number" min = "0"></td>
    </tr>    
</tbody>
	  </table>
	  <table>
<th  style="padding-right:10px" class="foodType">Food Choice</th>
<th  class="numTickets">Number of Combos</th>
	<tbody style="margin-bottom: 5px; margin-top: 10px;">';


  for ($i = 0; $i < count($foodDetails); $i++) {
    echo'<tr>';
    echo'<td>'.$foodDetails[$i]['foodName'].'</td>';
    echo'<td style="padding-right:10px"><input name="'.$foodDetails[$i]['foodName'].'" value = "0" type="number" min = "0"></td>';
    echo'</tr>';
  }
	


	echo'</tbody>	
</table>
   	<input type="submit" value="Check Out">
<form>
	
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