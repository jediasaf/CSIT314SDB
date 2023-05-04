
<?php

class displayMoviePage{
  function display(){
    

echo'<!doctype html>';
echo'<html>';
echo'<head>';
echo'<meta charset="UTF-8">';
echo'<title>MovieList</title>';
echo'<style type="text/css">';
echo'@import url("css/MoviePage.css");';
echo'</style>';
echo'</head>';
include("navbar.php");
include ("dbFunctions.php");
$controller = new controller ();
$run = $controller -> run();


if(isset($_GET['name'])){
  $result1 = $run->searchMovies10($_GET['name'],1);
  $result0 = $run->searchMovies10($_GET['name'],0);

  

  if($result1->num_rows > 0){
    echo'<body>';
  echo'<h2>showing now.</h2>';
  echo'<div class="hero-container">';
    while($row1 = $result1->fetch_assoc()){
      echo'<div class="main-container">';
          echo'<div class="poster-container">';
              echo'<a href="#"><img src="Images/MovieImage/'.$row1["moviePicName"].'" class="poster" /></a>';
          echo'</div>';
          echo'<div class="ticket-container">';
              echo'<div class="ticket__content">';
                  echo'<h4 class="ticket__movie-title">'.$row1["movieTitle"].'</h4>';
                  echo'<p class="ticket__movie-slogan">
                      '.$row1['description'].'
                  </p>';
                  echo'<a href="Order.php?name="'.$row1["movieID"].'>';
                  echo'<button class="ticket__buy-btn">Buy now</button>';
                  echo' </a>';
                  echo'</div>';
                  echo'</div>';
                  echo' </div>';
                  
    }
    echo'</div>';
    echo'</body>';
  }
  if ($result0->num_rows > 0){
    echo'<body>';
    echo'<h2>coming soon.</h2>';
    echo'<div class="hero-container">';
    while($row0 = $result0->fetch_assoc()){
      echo'<div class="main-container">';
          echo'<div class="poster-container">';
              echo'<a href="#"><img src="Images/MovieImage/'.$row0["moviePicName"].'" class="poster" /></a>';
          echo'</div>';
          echo'<div class="ticket-container">';
              echo'<div class="ticket__content">';
                  echo'<h4 class="ticket__movie-title">'.$row0["movieTitle"].'</h4>';
                  echo'<p class="ticket__movie-slogan">
                      '.$row0['description'].'
                  </p>';
                  // echo'<a href="Order.php?name="'.$row2["movieID"].'>';
                  // echo'<button class="ticket__buy-btn">Buy now</button>';
                  // echo' </a>';
                  echo'</div>';
                  echo'</div>';
                  echo' </div>';
    }
    echo'</div>';
    echo'</body>';

  }
}
else{
  echo'<body>';
  echo'<h2>showing now.</h2>';
  echo'<div class="hero-container">';
  
  $result1 = $run -> getMovie1();
  $result0 = $run -> getMovie0();
  
  while($now = $result1 -> fetch_assoc()){
      echo'<div class="main-container">';
          echo'<div class="poster-container">';
              echo'<a href="#"><img src="Images/MovieImage/'.$now["moviePicName"].'" class="poster" /></a>';
          echo'</div>';
          echo'<div class="ticket-container">';
              echo'<div class="ticket__content">';
                  echo'<h4 class="ticket__movie-title">'.$now["movieTitle"].'</h4>';
                  echo'<p class="ticket__movie-slogan">
                      '.$now['description'].'
                  </p>';
                  echo'<a href="Order.php?name="'.$now["movieID"].'>';
                  echo'<button class="ticket__buy-btn">Buy now</button>';
                  echo' </a>';
                  echo'</div>';
                  echo'</div>';
                  echo' </div>';
                  #echo' </div>';
  }
  echo'</div>';
  echo'</body>';
    
  echo'<body>';
    echo'<h2>coming soon.</h2>';
    echo'<div class="hero-container">';
          while($cmg = $result0 -> fetch_assoc()){
              #echo '<div class="hero-container">';
              echo'<div class="main-container">';
                  echo'<div class="poster-container">';
                      echo'<a href="#"><img src="Images/MovieImage/'.$cmg["moviePicName"].'" class="poster" /></a>';
                  echo'</div>';
                  echo'<div class="ticket-container">';
                      echo'<div class="ticket__content">';
                          echo'<h4 class="ticket__movie-title">'.$cmg["movieTitle"].'</h4>';
                          echo'<p class="ticket__movie-slogan">
                              '.$cmg['description'].'
                          </p>';
                          # remove link
                          /*
                          echo'<a href="Order.php">';
                          echo'<button class="ticket__buy-btn">Buy now</button>';
                          echo' </a>';
                          */
                          echo'</div>';
                          echo'</div>';
                          echo' </div>';
                          #echo' </div>';
              }
          
         echo' </div>';
  echo'</body>';
}



echo'<body>
<h2 id="fh2">leave a movie review.</h2>
<h6 id="fh6">Your review will help other customer and us.</h6>


<form id="feedback" action="doReview.php" method="post">
  <div class="pinfo">Your personal info</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i><img width="15px" height="15px"src="Images/users-alt.png"></span>
  <input  name="name" placeholder="Your Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-envelope"></i><img width="15px" height="15px"src="Images/icons8-mail-24.png"></span>
    <input name="email" type="email" class="form-control" placeholder="Your email">
     </div>
  </div>
</div>
 <div class="pinfo">Rate the movie.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-globe"><img width="15px" height="15px"src="Images/icons8-movie-50.png"></i></span>
  <input  name="movietitle" placeholder="Movie Name" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-heart"><img width="15px" height="15px"src="Images/icons8-star-30.png"></i></span>
   <select class="form-control" id="rate" name="star">
      <option value="1star">1</option>
      <option value="2stars">2</option>
      <option value="3stars">3</option>
      <option value="4stars">4</option>
      <option value="5stars">5</option>
    </select>
    </div>
  </div>
</div>

 <div class="pinfo">Write your feedback.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"><img width="15px" height="15px"src="Images/feedback.png"></i></span>
  <textarea class="form-control" id="review" rows="3" name="text"></textarea>
 
    </div>
  </div>
</div>

 <button type="submit" class="btn btn-primary">Submit</button>


</form>
	
	</body>
 <footer> 
			<h3>Software Development Board 2023</h3><br>
			<p>Pop-Up Cinema in Town</p>
</footer>

	
</html>
		
		<script>
		let subMenu = document.getElementById("subMenu");
		
		function toggleMenu(){
			subMenu.classList.toggle("open-menu");
		}
	</script>';
  }
}

$display = new displayMoviePage();
$display->display();

  ?>