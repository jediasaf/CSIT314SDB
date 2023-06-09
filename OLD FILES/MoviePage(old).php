<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MovieList</title>
<style type="text/css">
@import url("CSS/MoviePage.css");
</style>
</head>
	<?php include('navbar.php');?>
	 
<body>
<h2>showing now.</h2>
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
</body>
	
		<body>
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
</body>
	
<body>
<h2 id="fh2">leave a movie review.</h2>
<h6 id="fh6">Your review will help other customer and us.</h6>


<form id="feedback" action="">
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
  <input  name="movie title" placeholder="Movie Name" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-heart"><img width="15px" height="15px"src="Images/icons8-star-30.png"></i></span>
   <select class="form-control" id="rate">
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
  <textarea class="form-control" id="review" rows="3"></textarea>
 
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
	</script>
