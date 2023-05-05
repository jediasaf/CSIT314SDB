<?php
$email = $_POST['email'];
$star = $_POST['star'];
$text = $_POST['text'];

include "dbFunctions.php";
$controller = new controller();
$result = $controller -> run("addReview",$email,$text, $star);

if($result){
	$message = '<div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
          <i class="checkmark">✓</i>
        </div>
        
          <h1>Success</h1>
          <p>Thanks for leaving a review! <br/> Your review has been successfully submitted :)
        <br/>Redirecting to HomePage in 5 seconds.  </p>
        </div>';
        echo '<meta http-equiv="refresh" content="5; url='.'MoviePage.php'.'" />';
}else {
    $message = '<div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
          <i class="checkmark">✘</i>
        </div>
        
          <h1>Error</h1>
          <p>Sorry, there was an error submitting your review. Please try again later.</p>
        </div>';
    $redirect = '<meta http-equiv="refresh" content="5; url='.'MoviePage.php'.'" />';
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Submit Review</title>
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