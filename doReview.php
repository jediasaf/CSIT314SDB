<?php

$name = $_POST['name'];
$email = $_POST['email'];
$movieTitle = $_POST['movietitle'];
$star = $_POST['star'];
$text = $_POST['text'];



?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
@import url("css/AboutUs.css");
</style>
<link href="css/MoviePage.css" rel="stylesheet" type="text/css">
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
		  we bring your memories back of mixture of carnaval and cinema at the same time.&nbsp;&nbsp; </p>
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