<?php

class doOrder{

  function display(){

    #$movieID = $_GET['name'];
    $movieID = 'Belle2021';

    include('dbFunctions.php');
    
    $controller = new controller();
    $movieDetails = $controller -> run('getMovieFromID',$movieID);
    $roomPlan = $controller -> run('getRoomPlan',$movieID);

    # movie details
    $movieTitle =  $movieDetails[0]['movieTitle'];
    $genre = $movieDetails[0]['genres'];
    $directorName = $movieDetails[0]['director'];
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
    $roomID = $roomPlan[0]['roomID'];
    $row = $roomPlan[0]['rows'];
    $cols = $roomPlan[0]['columns'];

    $roomSpecs = $controller ->run('getRoomSpecs',$roomID);
    $status = $roomSpecs[0]['status'];

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
    echo'<option value="1">'.$movieTitle,$status.' - Adult SG$10</option>';
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
    echo 'Director: '.$directorName;
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


  }
}

$doOrder = new doOrder();
$doOrder->display();
?>