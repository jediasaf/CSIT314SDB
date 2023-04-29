<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Profile</title>
<style type="text/css">
@import url("css/EditProfile.css");
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
			  <div class="user-info"> <img src="Images/user.png" width="50" height="50" alt="" class="user-pic"/>
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
				<a href="HomePage SDB.php" class="sub-menu-link">
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
<body>
	<div class="box-form">
	 <form class="edit-form">
      <div class="container">
       <img width="200px" src="Images/D.png">
<h1>Edit Your Profile&nbsp;</h1>
<h6>Kindly fill in this form to edit your profile.</h6>
<label for="First Name"><b>First Name</b></label>
        <input
          type="text"
          placeholder="Enter First Name"
          name="first name"
          id="firstname"
          required
        />
		  
		  <label for="Last Name"><b>Last Name</b></label>
        <input
          type="text"
          placeholder="Enter Last Name"
          name="last name"
          id="last name"
          required
        />
		  <label for="username"><b>Username</b></label>
        <input
          type="text"
          placeholder="Enter username"
          name="username"
          id="username"
          required
        />
		 

        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        />

        <label for="pwd"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="pwd"
          id="pwd"
          required
        />

        <label for="pwd-repeat"><b>Repeat Password</b></label>
        <input
          type="password"
          placeholder="Repeat Password"
          name="pwd-repeat"
          id="pwd-repeat"
          required
        />
		  <label for="Age"><b>Age</b></label>
        <input
          type="number"
          placeholder="Enter Your Age"
          name="age"
          id="age"
          required
        />
		 <label for="Preferences"><b>Preferences</b></label> <br>
		  <select name="role" id="role">
			<option value="No Preferences">Choose your preference</option>
			<option value="Thriller">Thriller</option>
			<option value="Adventure">Adventure</option>
			<option value="Horror">Horror</option>
			<option value="Fantasy">Fantasy</option>
			<option value="Fantasy">Fantasy</option>
			  <option value="Drama">Drama</option>
			  <option value="Animation">Animation</option>
			  <option value="Comedy">Comedy</option>
			  <option value="Crime">Crime</option>
			  <option value="Mystery">Mystery</option>
			  <option value="Romance">Romance</option>
			  <option value="Action">Action</option>
			  <option value="Sci-Fi">Sci-Fi</option>
			  <option value="Musical">Musical</option>
			</select>
		  <br>
        <!-- submit button -->
		  <a href="LoginPage.php">
        <button type="submit">Register</button>
		  </a>
      </div>
	</form>
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

