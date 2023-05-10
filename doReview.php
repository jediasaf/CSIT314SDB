<?php

class doReview{
  function display(){
    include('navbar.php');
    include ("dbFunctions.php");
    $email = $_POST['email'];
    $star = $_POST['star'];
    $text = $_POST['text'];
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
            $message.= '<meta http-equiv="refresh" content="5; url='.'MoviePage.php'.'" />';
    }else {
        $message = '<div class="card">
            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
              <i class="checkmark">✘</i>
            </div>
            
              <h1>Error</h1>
              <p>Sorry, there was an error submitting your review. Please try again later.</p>
            </div>';
        $message.= '<meta http-equiv="refresh" content="5; url='.'MoviePage.php#feedback'.'" />';
    }

    echo '
    <!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Submit Review</title>
<style type="text/css">
          body {
            text-align: center;
            padding: 40px 0;
          margin: 0 auto;
            background: black;
          }
            h1 {
              color: #88B04B;
              font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
              font-weight: 900;
              font-size: 40px;
              margin-bottom: 10px;
            }
        h2{
           color: #88B04B;
              font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
              font-weight: 900;
              font-size: 30px;
              margin-bottom: 10px;
        }
            p {
              color: #404F5E;
              font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
              font-size:20px;
              margin: 0;
            }
          i {
            color: #9ABC66;
            font-size: 100px;
            line-height: 200px;
            margin-left:-15px;
          }
          .card {
            background: white;
            padding: 60px;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
          }

</style>
<link href="CSS/MoviePage.css" rel="stylesheet" type="text/css">
</head>
	<div class="hero">

		
</div>
<body>
<div class="responsive-container-block bigContainer">';
		 
echo $message;
echo'
  
</div>
</body>
	<footer> 
			<h3>Software Development Board 2023</h3><br>
			<p>Pop-Up Cinema in Town</p>
</footer>
</html>
    ';






  }
}


$display = new doReview();
$display -> display();


?>


