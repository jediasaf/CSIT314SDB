<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	
<title>buy now</title>
<style type="text/css">
@import url("CSS/coba.css");
	
</style>
	

</head>
<?php include('navbar.php');?>
<body>
	 <div class="movie-container">
      <label> <br>
       Select a movie :</label>
      <select id="movie">
        <option value="1">A Whisker Away - Adult SG$10</option>
        <option value="2">A Whisker Away - Child SG$8</option>
		  <option value="3">A Whisker Away - Senior SG$8</option>
		  <option value="4">A Whisker Away - Student SG$9</option>
      </select>
</div>
	<div class="synopsis">
	<div class="hero-container">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="Images/MovieImage/AWhiskerAway2020.png" class="poster" /></a>
			</div>
			<div class="movie-detail-container">
				<div class="movie-detail__content">
					<h4 class="movie-detail__movie-title">A Whisker Away</h4>
					<p class="movie-detail__movie-slogan">
						Miyo Sasaki is in love with her classmate Kento Hinode and tries repeatedly to get Kento's attention by transforming into a cat, but at some point, the boundary between herself and the cat becomes ambiguous. 
					</p>
					<p class="movie-detail__movie-director">
						Directors: Junichi Sato, Tomotaka Shibayama
					</p>
					<p class="movie-detail__movie-duration">
						Duration: 120 mins
					</p>
					<p class="movie-detail__movie-actors-casts">
						Actors/Casts: Mirai Shida, Natsuki Hanae
					</p>
					<p class="movie-detail__movie-rating">
						Rating: 4/5 
					</p>
					
					<p class="movie-detail__current-price">$8.00</p>
					<p class="movie-detail__old-price">$14.99</p>
				</div>
			</div>
		</div>

		</div>

	
	
	</div>
<div class="cinemaSeating">
  <div class="title">
    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
		</div>
    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seat for a price of SG$<span
        id="total"
        >0</span
      >
    </p>
<script src="script.js"></script>
</div>
</body>
	<body>
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
					<button class="food__buy-btn">Add to Cart</button>
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
					<button class="food__buy-btn">Add to Cart</button>
				</div>
			</div>
		</div>
		</div>
	</body>
	
	<body class="shoppingCart">
	<div class="CartContainer">
   	   <div class="Header">
   	   	<h3 class="Heading">&nbsp;</h3><h3 class="Heading">&nbsp;</h3><h3 class="Heading">Shopping Cart</h3>
   	   	<h5 class="Action">Booking ID: 12345678</h5>
		   <h5 class="Action">Loyalty Points: 12345678</h5>
		   <h5 class="Action"> Username: webDesigner</h5>
   	   </div>

   	   <div class="Cart-Items">
   	   	  <div class="image-box">
   	   	  	<img src="Images/MovieImage/AWhiskerAway2020.png" style={{ height="200px" }} />
   	   	  </div>
   	   	  <div class="about">
   	   	  	<h1 class="title">A Whisker Away</h1>
   	   	  	<h3 class="subtitle">Child</h3>
			<h3 class="subtitle">2pmm</h3>
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

   	   <div class="Cart-Items">
   	   	  <div class="image-box">
   	   	  	<img src="Images/MovieImage/AWhiskerAway2020.png" style={{ height="200px" }} />
   	   	  </div>
   	   	  <div class="about">
   	   	  	<h1 class="title">A Whisker Away</h1>
   	   	  	<h3 class="subtitle">Adult</h3>
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
   	 <hr> 
   	 <div class="checkout">
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
	</html>

		<script>
		const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");

populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
  localStorage.setItem("selectedMoviePrice", moviePrice);
}

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;

  setMovieData(movieSelect.selectedIndex, movieSelect.value);
}


// Get data from localstorage and populate UI
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        console.log(seat.classList.add("selected"));
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
    console.log(selectedMovieIndex)
  }
}
console.log(populateUI())
// Movie select event
movieSelect.addEventListener("change", (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Seat click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");

    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();
		let subMenu = document.getElementById("subMenu");
		
		function toggleMenu(){
			subMenu.classList.toggle("open-menu");
		}

		</script>
