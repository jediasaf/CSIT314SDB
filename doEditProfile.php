<?php
session_start();

#retrieve form data
$email = $_POST['email'];
$age = $_POST['age'];
$preferences = $_POST['role'];

#connect to database and select the user from database
include "dbFunctions.php";
$controller = new controller();
$result = $controller->run("retrieveUser", $_SESSION['username']);

# update the user records
if($result){
	$result = $controller->run("updateUserInfo", $email, $age, $preferences, $_SESSION['username']);
	$message = '<div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
          <i class="checkmark">✓</i>
        </div>
        
          <h1>Success</h1>
          
          <h2>Dear '.$_SESSION["username"].',</h2>
          <p>Your profile has been updated! <br/> looking forward to see u in the cinema!
        <br/>Redirecting to HomePage in 5 seconds.  </p>
        </div>';
        echo '<meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';
}
else{
	$redirect = '<meta http-equiv="refresh" content="5; url='.'EditProfile.php'.'" />';
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Profile</title>
<style type="text/css">
@import url("CSS/AboutUs.css");
</style>
<link href="CSS/MoviePage.css" rel="stylesheet" type="text/css">
</head>
	<div class="hero">

		<?php include('navbar.php');?>
</div>
<body>
<div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container bottomContainer">
    <div class="ultimateImg">
      <img class="mainImg" src="Images/D.png">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
    </div>
    <div class="allText bottomText">
      <p class="text-blk headingText">
        About Us.
      </p>
      <p class="text-blk subHeadingText">
        Pop-Up Cinema.
      </p>
      <p class="text-blk description">
      we are the first pop-up cinema in town<br>
	we bring your memories back of mixture of carnival and cinema at the same time.&nbsp;&nbsp; 
		<?php 
		echo $message;
		?>
		</p>
    </div>
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