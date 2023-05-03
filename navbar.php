<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HomePage</title>
<link href="css/coba.css" rel="stylesheet" type="text/css">
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
		<form action="MoviePage.php" class="search-bar">
			<input type="text" placeholder="Search Movie" name="name">
			<button type="submit"><img align-   width="15px" height="15px" src="Images/search.png"width="10px" height="10px"></button>
				
		</form>
		</div>
		<?php
		if(!isset($_SESSION['username'])){
		echo'<a href="LoginPage.php">
		  <button class="button-27" role="button" style="height:10px;width=20px" onClick="">Login/Sign Up</button>
	    </a>';
		}

		if(isset($_SESSION['username'])){
				echo '<img src="Images/user.png" width="50" height="50" alt="" class="user-pic" onclick="toggleMenu()"/>
				<div class="sub-menu-wrap" id="subMenu">
					  <div class="sub-menu">
					  <div class="user-info"> <img src="Images/user.png" width="50" height="50" alt="" class="user-pic"/>
						  <h3>';
						  if(isset($_SESSION['username'])){
							echo $_SESSION["username"];
						  }
						  else{
							echo 'Please Log In';
						  }
						echo' </h3>
						  <div class="points">
						  <h7>Loyalty Points: ';
						  
						  if(isset($_SESSION['username'])){
							echo $_SESSION["loyaltypts"];
												  }
						  else{
							echo '0';
						  }
						  
						  
						 echo ' </h7>
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
				</div>';
		}
	
		?>
</nav>
	<div class="menuIcon">
  <span class="icon icon-bars"></span>
  <span class="icon icon-bars overlay"></span>
		
</div>

</div>
</html>
<script>
		let subMenu = document.getElementById("subMenu");
		
		function toggleMenu(){
			subMenu.classList.toggle("open-menu");
		}
	</script>