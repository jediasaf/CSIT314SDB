<?php 

class HomePage{

	function display(){

		include('navbar.php');
		include("dbFunctions.php");
		$controller = new controller();
		#session_start();
		$message = "";

		echo '
		
		<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HomePage</title>
<link href="CSS/coba.css" rel="stylesheet" type="text/css">
</head>
<div class="hero">
	


</div>
	<div class="container">
        <div class="content">
            <!-- The content which is placed at the center of the carousel -->
            <div class="carousel-content">
            </div>
            <div class="slideshow">
                <!-- carousel control buttons -->
                <button class="slide-btn slide-btn-1">&nbsp;</button>
                <button class="slide-btn slide-btn-2"></button>
                <button class="slide-btn slide-btn-3"></button>
                <button class="slide-btn slide-btn-4"></button>
                <!-- carousel wrapper which contains all images -->
                <div class="slideshow-wrapper">
                    <div class="slide">
                        <img class="slide-img" src="Images/poster1.jpeg">
                   	</div>
<div class="slide">
            <img class="slide-img" src="Images/poster2.jpeg">
          </div>
                    <div class="slide">
                        <img class="slide-img" src="Images/poster3.jpeg">
                    </div>
					<div class="slide">
                        <img class="slide-img" src="Images/poster4.jpeg">
                   	</div>
                </div>
            </div>
        </div>
    </div>
	


	
	<body>
		<h2><a href="MoviePage.php">showing now.</a></h2>
		<div class="showingnow">
		<div class="hero-container">';

		$result1 = $controller->run("getMovie1");
		for($i = 0; $i < 4; $i++){
			echo '	
		<div class="main-container">
			<div class="poster-container">
				<a href="MoviePage.php"><img src="Images/MovieImage/'.$result1[$i]['moviePicName'].'" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<h4 class="ticket__movie-title">'.$result1[$i]['movieTitle'].'</h4>
					<p class="ticket__movie-slogan">
					'.substr($result1[$i]['description'],0,150).'...
					</p>
					<a href="Order.php?name="'.$result1[$i]['movieID'].'">
					<button class="ticket__buy-btn">Buy now</button>
						</a>
				</div>
			</div>
		</div>';
		}
		

		

echo'
		</div>
			</div>
</body>




	
		<body>
			<div class="comingsoon">
		<h2>coming soon.</h2>
		<div class="hero-container">';



		$result0 = $controller->run("getMovie0");
		for($i = 0; $i < 4; $i++){
			echo '	
		<div class="main-container">
			<div class="poster-container">
				<a href="MoviePage.php"><img src="Images/MovieImage/'.$result0[$i]['moviePicName'].'" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<h4 class="ticket__movie-title">'.$result0[$i]['movieTitle'].'</h4>
					<p class="ticket__movie-slogan">
						'.substr($result0[$i]['description'],0,150).'...
					</p>
				</div>
			</div>
		</div>';
		}

	echo'

		</div>
				</div>
</body>
	
<body>
	<div class="foodbev">
		<h2>food &amp; beverages.</h2>
		<div class="hero-container">';

		$food = $controller->run("getAvailableFoodDetails");
		for($i = 0; $i < sizeof($food); $i++){
			echo'
			<div class="main-container">
				<div class="poster-container">
					<a href="MoviePage.php"><img style="height: 124px;" src="Images/Combo/'.$food[$i]['foodPicName'].'" class="poster" /></a>
				</div>
				<div class="food-container">
					<div class="food__content">
						<h4 class="food__movie-title">'.$food[$i]['foodName'].'</h4>
					</div>
				</div>
			</div>';
		}
		

echo'
		</div>
		</div>

</body>
	
<footer> 
			<h3>Software Development Board 2023</h3><br>
			<p>Pop-Up Cinema in Town</p>
			<?php echo $message; ?>
</footer>

</html>
		
		';


	}
}
$display = new HomePage();
$display -> display();


?>


