<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Preferences</title>
	<style type="text/css">
@import url("CSS/Preferences.css");
</style>
</head>
<?php include('navbar.php');?>

<body>
<div class="box-form">
	 <form class="edit-form">
      <div class="container">
       <img width="200px" src="Images/D.png">
<h1>Choose Your Preferences&nbsp;</h1>
<h6>Kindly fill in this form to choose and change your movie preferences.</h6>
		 <label for="Preferences"><b>Current Preferences</b></label> <br>
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
		  <label for="Preferences"><b>New Preferences</b></label> <br>
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
		  <a href="MoviePage.php">
        <button type="submit">Submit</button>
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

