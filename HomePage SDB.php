<?php include('navbar.php');?>
<?php 
#session_start();
if(isset($_SESSION['username'])){
	$message = $_SESSION['username'];
}
$message = "";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HomePage</title>
<link href="css/coba.css" rel="stylesheet" type="text/css">
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
		<h2>showing now.</h2>
		<div class="showingnow">
		<div class="hero-container">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="Images/MovieImage/AWhiskerAway2020.png" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<h4 class="ticket__movie-title">A Whisker Away</h4>
					<p class="ticket__movie-slogan">
						The magic that brought us closer
					</p>
					<p class="ticket__current-price">$7.00</p>
					<p class="ticket__old-price">$14.99</p>
					<a href="Order.php">
					<button class="ticket__buy-btn">Buy now</button>
						</a>
				</div>
			</div>
		</div>

		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="Images/MovieImage/Bubble2022.png" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<h4 class="ticket__movie-title">Bubble</h4>
					<p class="ticket__movie-slogan">Bubble in the next world</p>
					<p class="ticket__current-price">$10.75</p>
					<p class="ticket__old-price">$20.99</p>
					<a href="Order.php">
					<button class="ticket__buy-btn">Buy now</button>
						</a>
				</div>
			</div>
		</div>
		</div>
			</div>
</body>
	
		<body>
			<div class="comingsoon">
		<h2>coming soon.</h2>
		<div class="hero-container">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="Images/MovieImage/DriftingHome2022.png" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<h4 class="ticket__movie-title">Drifting Home</h4>
					<p class="ticket__movie-slogan">
						Moving house on the sea
					</p>
					<p class="ticket__current-price">$8.00</p>
					<p class="ticket__old-price">$14.99</p>
					<a href="Order.php">
					<button class="ticket__buy-btn">Buy now</button>
						</a>
				</div>
			</div>
		</div>

		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="Images/MovieImage/Belle2021.png" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<h4 class="ticket__movie-title">Belle</h4>
					<p class="ticket__movie-slogan">When you can yourself as an AI</p>
					<p class="ticket__current-price">$10.75</p>
					<p class="ticket__old-price">$20.99</p>
					<a href="Order.php">
					<button class="ticket__buy-btn">Buy now</button>
						</a>
				</div>
			</div>
		</div>
		</div>
				</div>
</body>
	
<body>
	<div class="foodbev">
		<h2>food &amp; beverages.</h2>
		<div class="hero-container">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="Images/Combo/BurgerCombo.jpg" class="poster" /></a>
			</div>
			<div class="food-container">
				<div class="food__content">
					<h4 class="food__movie-title">Burger Combo</h4>
					<p class="food__movie-slogan">
						Burger Combo
					</p>
					<p class="food__current-price">$8.00</p>
					<p class="food__old-price">$14.99</p>
					<a href="Images/Order.php">
					<button class="food__buy-btn">Buy a Ticket &amp;<br>Bundle it now</button>
						</a>
				</div>
			</div>
		</div>

		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="Images/Combo/FriesCombo.jpg" class="poster" /></a>
			</div>
			<div class="food-container">
				<div class="food__content">
					<h4 class="food__movie-title">Fries Combo</h4>
					<p class="food__movie-slogan">Fries combo</p>
					<p class="food__current-price">$10.75</p>
					<p class="food__old-price">$20.99</p>
					<a href="Order.php">
					<button class="food__buy-btn">Buy a Ticket &amp;<br>Bundle it now</button>
						</a>
				</div>
			</div>
		</div>
		</div>
		</div>

</body>
	
<footer> 
			<h3>Software Development Board 2023</h3><br>
			<p>Pop-Up Cinema in Town</p>
			<?php echo $message; ?>
</footer>

</html>
	<script>
		let subMenu = document.getElementById("subMenu");
		
		function toggleMenu(){
			subMenu.classList.toggle("open-menu");
		}
	</script>
