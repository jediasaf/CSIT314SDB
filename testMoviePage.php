
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MovieList</title>
<style type="text/css">
@import url("css/MoviePage.css");
</style>
</head>
	<div class="hero">
	  <nav id="navbar" class=""> 
		<div class="logo">
		<a href="#HomePage">
		<img width= "50px" height="auto" src="Images/D.png"/>
		</a>
	    </div>

	<ul id="menu">
      <li><a href="HomePage SDB.php">Home</a></li><!--
   --><li><a href="MoviePage.php">Movies</a></li><!--
   --><li><a href="AboutUs.php">About Us</a></li><!--
   --><li><a href="ContactUs.php">Contact Us</a></li>
    </ul>
		  <div class="searchbar">
		<form action="" class="search-bar">
			<input type="text" placeholder="Search Movie" name="q">
			<button type="submit"><img align-   width="15px" height="15px" src="Images/search.png"width="10px" height="10px"></button>
				
		</form>
		</div>
		  <a href="LoginPage.php">
		  <button class="button-27" role="button" style="height:10px;width=20px" onClick="">Login/Sign Up</button>
	    </a>
	<img src="Images/user.png" width="50" height="50" alt="" class="user-pic" onclick="toggleMenu()"/>
	    <div class="sub-menu-wrap" id="subMenu">
		  	<div class="sub-menu">
			  <div class="user-info"> <img src="user.png" width="50" height="50" alt="" class="user-pic"/>
				  <h3> Website Designer</h3>
				  <div class="points">
				  <h7>Loyalty Points: </h7>
			    </div>
			  </div>
				<hr>
				<a href="EditProfile.php" class="sub-menu-link">
					<img src="Images/profile.png"/> 
					<p>Edit Profile</p>
					<span>></span>
				</a>
				<a href="Preferences.php" class="sub-menu-link">
					<img src="Images/setting.png" />
					<p>Preferences</p>
					<span>></span>
				</a>
				<a href="LogOut.php" class="sub-menu-link">
					<img src="Images/logout.png" />
					<p>Logout</p>
					<span>></span>
				</a>
			</div>
		</div>
</nav>
	<div class="menuIcon">
  <span class="icon icon-bars"></span>
  <span class="icon icon-bars overlay"></span>
		
</div>

</div>
<body>
<h2>showing now.</h2>

<?php 

include ("dbFunctions.php");

$result1 = $conn -> query("SELECT * FROM moviedb where yearReleased >= 2020");
$result2 = $conn -> query("SELECT * FROM moviedb where yearReleased < 2020");
while($row1 = $result1 -> fetch_assoc()){
    echo'<div class="hero-container">';
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
                echo'<a href="Order.php">';
                echo'<button class="ticket__buy-btn">Buy now</button>';
                echo' </a>';
                echo'</div>';
                echo'</div>';
                echo' </div>';
                echo' </div>';
}
    
?>

</body>
	
<body>
	<h2>coming soon.</h2>
	
		<?php 
        while($row2 = $result2 -> fetch_assoc()){
            echo '<div class="hero-container">';
            echo'<div class="main-container">';
                echo'<div class="poster-container">';
                    echo'<a href="#"><img src="Images/MovieImage/'.$row2["moviePicName"].'" class="poster" /></a>';
                echo'</div>';
                echo'<div class="ticket-container">';
                    echo'<div class="ticket__content">';
                        echo'<h4 class="ticket__movie-title">'.$row2["movieTitle"].'</h4>';
                        echo'<p class="ticket__movie-slogan">
                            '.$row2['description'].'
                        </p>';
                        echo'<a href="Order.php">';
                        echo'<button class="ticket__buy-btn">Buy now</button>';
                        echo' </a>';
                        echo'</div>';
                        echo'</div>';
                        echo' </div>';
                        echo' </div>';
            }
        ?>
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
