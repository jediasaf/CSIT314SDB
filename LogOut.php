<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<style type="text/css">
@import url("LogOut.css");
</style>
 <style>
       
    </style>
</head>
  <div class="hero">
	  <nav id="navbar" class=""> 
		<div class="logo">
		<a href="#HomePage">
		<img width= "50px" height="auto" src="D.png"/>
		</a>
	    </div>

	<ul id="menu">
      <li><a href="HomePage SDB.html">Home</a></li><!--
   --><li><a href="MoviePage.html">Movies</a></li><!--
   --><li><a href="AboutUs.html">About Us</a></li><!--
   --><li><a href="ContactUs.html">Contact Us</a></li>
    </ul>
		  <div class="searchbar">
		<form action="" class="search-bar">
			<input type="text" placeholder="Search Movie" name="q">
			<button type="submit"><img align-   width="15px" height="15px" src="search.png"width="10px" height="10px"></button>
				
		</form>
		</div>
		  <a href="LoginPage.html">
		  <button class="button-27" role="button" style="height:10px;width=20px" onClick="">Login/Sign Up</button>
	    </a>
	<img src="user.png" width="50" height="50" alt="" class="user-pic" onclick="toggleMenu()"/>
	    <div class="sub-menu-wrap" id="subMenu">
		  	<div class="sub-menu">
			  <div class="user-info"> <img src="user.png" width="50" height="50" alt="" class="user-pic"/>
				  <h3> Website Designer</h3>
				  <div class="points">
				  <h7>Loyalty Points: </h7>
			    </div>
			  </div>
				<hr>
				<a href="EditProfile.html" class="sub-menu-link">
					<img src="profile.png"/> 
					<p>Edit Profile</p>
					<span>></span>
				</a>
				<a href="Preferences.html" class="sub-menu-link">
					<img src="setting.png" />
					<p>Preferences</p>
					<span>></span>
				</a>
				<a href="LogOut.html" class="sub-menu-link">
					<img src="logout.png" />
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
<body>
<div class="box">
        <a href="#popup-box"> 
            Logout Now?
        </a>
    </div>
<div id="popup-box" class="modal">
        <div class="content">
            <h1 style="color: gainsboro;">
                Thank You for using our system!
            </h1>
            <b>
                <p>Hope it satisfy you!</p>
            </b>
            <a href="#" 
               class="box-close">
                ×
            </a>
        </div>
    </div>
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
