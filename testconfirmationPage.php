<?php
    class doConfirmation{

        function display(){

          if(!isset($_SESSION)){
            session_start();
          }

          include('dbFunctions.php');
          $controller = new controller();

          #get relevant info from SESSION
          
          #$username = $_SESSION['username'];
          #$loyaltyPoints = $_SESSION['loyaltypts'];
          $loyaltyPoints = 100;
          $username = 'cmelato28';

          $numSeniorTik = $_SESSION['SeniorNoTicket'];
          $numAdultTik = $_SESSION['AdultNoTicket'];
          $numStudentTik = $_SESSION['StudentNoTicket'];
          $numChildTik = $_SESSION['ChildNoTicket'];
          $seniorTotal = $numSeniorTik * 6;
          $adultTotal = $numAdultTik * 12;
          $studentTotal = $numStudentTik * 8;
          $childTotal = $numChildTik * 6;
          

          $totalFoodOrder = 0;
          $foodDetails = $controller -> run('getAvailableFoodDetails');
          for ($i = 0; $i < count($foodDetails); $i++) {
            $totalFoodOrder += $_SESSION[$foodDetails[$i]['foodName']];
          }


          #$movieID = $_SESSION['movieID'];
          $movieID = 'Belle2021';

          $movieDetails = $controller -> run('getMovieFromID',$movieID);
          $moviePicName = $movieDetails[0]['moviePicName'];
          $movieTitle =  $movieDetails[0]['movieTitle'];

          #seatName
          $roomPlan = $controller -> run('getRoomPlan',$movieID);
          $roomID = $roomPlan[0]['roomID'];

          $seats = $_SESSION['seats'];
          $pairs = explode(",",$seats);
          $seatsOrdered = '';
          foreach ($pairs as $pair){
            $numbers = explode("*",$pair);
            $row = $numbers[0];
            $col = $numbers[1];
            $result = $controller -> run('getSeatName',$roomID,$row,$col);
            $seatsOrder .= $result[0]['seatName'].', ';
          }
          
          $delimiter = ", ";
          $count = 2;
          #Find the position of the last occurrence of the delimiter
          $lastDelimiterPosition = strrpos($seatsOrder, $delimiter);
          #Remove the last two delimiters
          if ($lastDelimiterPosition !== false) {
          $seatsOrder = substr($seatsOrder, 0, $lastDelimiterPosition - ($count - 1) * strlen($delimiter));
          }

          #get current date
          $currentDate = date('Y-m-d');



          $totalBill = $seniorTotal + $adultTotal + $childTotal + $studentTotal + ($totalFoodOrder * 8);



            echo'<!doctype html>
            <html>
            <head>
            <meta charset="UTF-8">
            <title>Untitled Document</title>
              
            <link href="CSS/coba.css" rel="stylesheet" type="text/css">
            </head>
            <style>
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

                <body>
                  <div class="card">
                  <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                    <i class="checkmark">✓</i>
                  </div>
                    <h1>Success</h1> 
                  <h2>Dear, Website Designer</h2>
                    <p>Your booking has been successful,<br/> looking forward to see u in the cinema!</p>
                  </div>
                
                <div class="confirmationtable">
                  <body class="shoppingCart">
              <div style="max-height: none" class="CartContainer">
                    <div class="Header">
                      <h3 class="Heading">&nbsp;</h3><h3 class="Heading">&nbsp;</h3><h3 class="Heading">Your Booking</h3>';
                      echo'<h5 class="Action">Booking ID: 12345678</h5>';
                  echo'<h5 class="Action">Loyalty Points: 12345678</h5>';
                  echo'<h5 class="Action"> Username: webDesigner</h5>';
                    echo'</div>
            
                <div class="image-box">
                          <img margin-bottom="10px" src="Images/MovieImage/'.$moviePicName.'" style={{ height="200px" }} />
                        </div>
                    <div class="Cart-Items">
                          <div class="about">';
                          echo'<h1 class="title">'.$movieTitle.'</h1>';
                          echo'<h3 class="subtitle">Child</h3>
                  <h3 class="subtitle">2pm</h3>
                        </div>
                        <div class="counter">
                          <div class="count">'.$numChildTik.'</div>
                        </div>
                        <div class="prices">
                          <div class="amount">$'.$childTotal.'</div>
                          <div class="save"><u>Points has been used</u></div>
                        </div>
                    </div>
            
                    <div class="Cart-Items">
                        <div class="about">';
                          echo'<h1 class="title">'.$movieTitle.'</h1>';
                          echo'<h3 class="subtitle">Adult</h3>
                  <h3 class="subtitle">2pm</h3>
                        </div>
                        <div class="counter">';
                          echo'<div class="count">'.$numAdultTik.'</div>';
                        echo'</div>
                        <div class="prices">
                          <div class="amount">$'.$adultTotal.'</div>
                          <div style="color: firebrick;" class="save"><u>No points has been used</u></div>
                        </div>
                    </div>
                
              <div class="Cart-Items">
                        <div class="about">
                          <h1 class="title">'.$movieTitle.'</h1>
                          <h3 class="subtitle">Senior</h3>
                  <h3 class="subtitle">2pm</h3>
                        </div>
                        <div class="counter">
                          <div class="count">'.$numSeniorTik.'</div>
                        </div>
                        <div class="prices">
                          <div class="amount">$'.$seniorTotal.'</div>
                          <div style="color: firebrick;" class="save"><u>No points has been used</u></div>
                        </div>
                    </div>
                <div class="Cart-Items">
                        <div class="about">
                          <h1 class="title">'.$movieTitle.'</h1>
                          <h3 class="subtitle">Student</h3>
                  <h3 class="subtitle">2pm</h3>
                        </div>
                        <div class="counter">
                          <div class="count">'.$numStudentTik.'</div>
                        </div>
                        <div class="prices">
                          <div class="amount">$'.$studentTotal.'</div>
                          <div style="color: firebrick;"class="save"><u>No points has been used</u></div>
                        </div>
                  
                    </div>
                <h4 style="text-align: center; margin-bottom: 10px;">Booked Seats Number :'.$seatsOrder.' </h4>
                <hr>
                <h5 style="text-align: center; margin-bottom: 10px;">food and beverages</h5>';


                for ($i = 0; $i < count($foodDetails); $i++) {
                  echo'
                  <div class="Cart-Items">
                  <div class="about">
                    <h1 class="title">'.$foodDetails[$i]['foodName'].'</h1>
                  </div>
                  <div class="counter">
                    <div style="margin-left: 45px;" class="count">'.$_SESSION[$foodDetails[$i]['foodName']].'</div>
                  </div>
                  <div class="prices">
                    <div class="amount">$8</div>
                  </div>';
                }
                  

                    echo'</div>
                <h1 style="color:black;" class="total">Total :$'.$totalBill.'</h1>
                <a href="PaymentPage.php">
                  <button class="button">Checkout</button>
                </a>
                </body>
            </html>
            <body>
            </body>
            </html>';
        }
    }

    $doConfirmation = new doConfirmation();
    $doConfirmation -> display();
?>