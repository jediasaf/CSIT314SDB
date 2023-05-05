<?php

#retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];
$repeatpassword = $_POST['password'];
$age = $_POST['age'];
$preferences = $_POST['preferences'];
$hashedPassword = hash("sha256",$password);



# for connection and query to the database
include ("dbFunctions.php");
$controller = new controller();
$run = $controller -> run();

# retrieve the record with the username that matches the username of the current session
$result = $run -> retrieveUser($_SESSION['username']);
$row = $result -> fetch_assoc();
$rowcount = $result -> num_rows;
echo "query ran";
echo $rowcount;

# if username exists in the database, update said records
if($rowcount == 1){
    $result = $run -> updateUserInfo($email, $hashedPassword, $age, $preferences, $_SESSION['username']);
}

if($result){
	$redirect = '<meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';
}
else{
	$redirect = '<meta http-equiv="refresh" content="5; url='.'EditProfile.php'.'" />';
}
$run->close();

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
		  we bring your memories back of mixture of carnaval and cinema at the same time.&nbsp;&nbsp; 
		<?php 
		echo $redirect;
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