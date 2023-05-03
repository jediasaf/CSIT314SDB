<?php 
# this page is meant for testing purposes only.

echo '<style type="text/css">
@import url("css/MoviePage.css");
</style>';

# creating a controller class and then calling the entity class using the controller.
include ("dbFunctions.php");
$controller = new controller();
$conn = $controller -> run();
$result = $conn -> query("SELECT * FROM moviedb where yearReleased >= 2020");


while($row = $result -> fetch_assoc()){
    echo '<div class="hero-container">';
    echo'<div class="main-container">';
        echo'<div class="poster-container">';
            echo'<a href="#"><img src="Images/MovieImage/'.$row["moviePicName"].'" class="poster" /></a>';
        echo'</div>';
        echo'<div class="ticket-container">';
            echo'<div class="ticket__content">';
                echo'<h4 class="ticket__movie-title">'.$row["movieTitle"].'</h4>';
                echo'<p class="ticket__movie-slogan">
                    '.$row['description'].'
                </p>';
                echo'<a href="Order.php">';
                echo'<button class="ticket__buy-btn">Buy now</button>';
                echo' </a>';
                echo'</div>';
                echo'</div>';
                echo' </div>';
                echo'</div>';
}


/*
while($row = $result -> fetch_assoc()){
    echo '<h1>'.$row['movieTitle'].'</h1>';
    echo '<h1>'.$row['genres'].'</h1>';
    echo '<h1>'.$row['directorName'].'</h1>';
    echo '<h2>'.$row['description'].'</h2>';
    echo '<h1>'.$row['duration'].'</h1>';
    echo '<h1>'.$row['country'].'</h1>';
    echo '<h1>'.$row['classificationRating'].'</h1>';
    echo '<h1>'.$row['yearReleased'].'</h1>';
    echo '<h1>'.$row['rantings'].'</h1>';
    echo '<h1>'.$row['trailerLink'].'</h1>';
    echo '<img src="Images/MovieImage/'.$row['moviePicName'].'"/>';
}
*/

?>