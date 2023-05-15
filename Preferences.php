<?php 
class Preferences{
	function display(){
		include('navbar.php');
		include ("dbFunctions.php");
		$controller = new controller();
		$message = '';
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$username = $_SESSION['username'];
			$genrePref = $_POST['genres'];
			$seatPref = $_POST['seatPref'];
			
			$result = $controller -> run("updatePref",$username,$genrePref,$seatPref);

			if($result){
				$check = $controller -> run("getPref",$username);

				if($check[0]['seatPref'] == $seatPref && $check[0]['genrePref'] == $genrePref){
					$message = $message.'<h2 style="color:white">Preferences Updated</h2>';
					$_SESSION['genrePref'] = $genrePref;
					$_SESSION['seatPref'] = $seatPref;
				}
				else{
					$message = $message.'<h2 style="color:white">Preferences Updated</h2>';

				}
			}
			else{
				$message = $message.'<h2 style="color:white">Query Failed</h2>';
			}
		}
		else{
			$message = $message.'<div class="box-form"><form class="edit-form" action="?" method="POST">
			<div class="container">
			 <img width="200px" src="Images/D.png">
	  <h1>Choose Your Preferences&nbsp;</h1>
	  <h6>Kindly fill in this form to choose and change your movie preferences.</h6>
			   <label for="Preferences"><b>Genre Preferences</b></label> <br>
			   <label for="Preferences"><b>Current Preferences: '.$_SESSION['genrePref'].'</b></label> <br>
				<select name="genres" id="role">
				  <option value="None">Choose your preference</option>
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
				<label for="Preferences"><b>Seat Preferences</b></label> <br>
				<label for="Preferences"><b>Current Preferences: '.$_SESSION['seatPref'].'</b></label> <br>
				<select name="seatPref" id="role">
				  <option value="none">None</option>
				  <option value="back">Back</option>
				  <option value="front">Front</option>
				  </select>
				<br>
			  <!-- submit button -->
				<a href="MoviePage.php">
			  <button type="submit">Submit</button>
				</a>
			</div>
		  </form></div>';
		}

		echo'
		<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Preferences</title>
	<style type="text/css">
@import url("CSS/Preferences.css");
</style>
</head>

<body>';
echo $message;
echo'
			
</body>
<footer> 
			<h3>Software Development Board 2023</h3><br>
			<p>Pop-Up Cinema in Town</p>
</footer>

</html>

		
		';

		
		
	}
}


$display = new Preferences();
$display -> display();

?>



