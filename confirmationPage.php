<?php
    class doConfirmation{

        function display(){

          if(!isset($_SESSION)){
            session_start();
          }


          include('dbFunctions.php');
          $controller = new controller();

          #get relevant info from SESSION
          
          $username = $_SESSION['username'];
          $loyaltyPoints = $_SESSION['loyaltypts'];
          $number = $_SESSION['phoneNo'];

          #$loyaltyPoints = 100;
          #$username = 'cmelato28';
          #$number = 12345678;

          $_SESSION['invalid'] = '';

          $numSeniorTik = $_SESSION['SeniorNoTicket'];
          $numAdultTik = $_SESSION['AdultNoTicket'];
          $numStudentTik = $_SESSION['StudentNoTicket'];
          $numChildTik = $_SESSION['ChildNoTicket'];
          $totalTik = $numSeniorTik + $numAdultTik + $numStudentTik + $numChildTik;
          $seniorTotal = $numSeniorTik * 6;
          $adultTotal = $numAdultTik * 12;
          $studentTotal = $numStudentTik * 8;
          $childTotal = $numChildTik * 6;
          

          $foodSubTotal = $_SESSION['numFoodCombos'] * 8;
          /*
          $totalFoodOrder = 0;
          $foodSubtotal = array();
          $foodDetails = $controller -> run('getAvailableFoodDetails');
          for ($i = 0; $i < count($foodDetails); $i++) {
            $totalFoodOrder += $_SESSION[$foodDetails[$i]['foodName']];
            array_push($foodSubtotal, $_SESSION[$foodDetails[$i]['foodName']] * 8);
          }
          */


          $movieID = $_SESSION['movieID'];
          #$movieID = 'Belle2021';

          $movieDetails = $controller -> run('getMovieFromID',$movieID);
          $moviePicName = $movieDetails[0]['moviePicName'];
          $movieTitle =  $movieDetails[0]['movieTitle'];

          #seatName
          $roomPlan = $controller -> run('getRoomPlan',$movieID);
          $roomID = $roomPlan[0]['roomID'];


          $seatsOrder = '';

          if ($_SESSION['seats'] != ''){

            $seats = $_SESSION['seats'];
            $length = strlen($seats);
            $seats = substr($seats, 0, $length - 1);
            $pairs = explode(",",$seats);
            for ($i = 0; $i < count($pairs); $i++){
  
            }
            $seatsOrder = '';

            foreach ($pairs as $pair){
              $numbers = explode("*",$pair);
              $col = $numbers[0];
              $row = $numbers[1];
              $result = $controller -> run('getSeatName',$roomID,$row,$col);
              $seatStatusChange = $controller -> run("updateSeatStatus",$roomID,$result[0]['seatName']);
              $seatsOrder .= $result[0]['seatName'].', ';
            }
            
            $delimiter = ", ";
            $count = 1;
            #Find the position of the last occurrence of the delimiter
            $lastDelimiterPosition = strrpos($seatsOrder, $delimiter);
            #Remove the last two delimiters
            if ($lastDelimiterPosition !== false) {
            $seatsOrder = substr($seatsOrder, 0, $lastDelimiterPosition - ($count - 1) * strlen($delimiter));
            }
          } else {
            $seatsOrder = $_SESSION['seatsP'];
            $_SESSION['seatsP'] = '';
          }


          #get current date
          $currentDate = date('Y-m-d');

          if($_SESSION['amountSaved'] == 'invalid amount of points'){
            $amountSaved = 0;
          } else if($_SESSION['amountSaved'] == 0) {
            $amountSaved = 0;
          } else {
            $amountSaved = substr($_SESSION['amountSaved'], 1);
          }
          
          $totalBill = ($seniorTotal + $adultTotal + $childTotal + $studentTotal + ($_SESSION['numFoodCombos'] * 8)) - $amountSaved;

          $_SESSION['loyaltypts'] = $_SESSION['loyaltypts'] + $totalBill;
          $gainedPoints = $controller ->run('gainPoints',$number,$totalBill);

          $currentDate = date("Y-m-d");
          $claim = 0;
          $claimUsername = '';
          $msg ='';
          if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $result = $controller ->run('updateBookingdb',$number,$username,$currentDate,$movieID,$totalTik,$seatsOrder,$numAdultTik,$numSeniorTik,$numStudentTik,$numChildTik,$_SESSION['numFoodCombos'],$totalBill,$claim,$claimUsername);
            $msg .='    <a href="" onclick="window.print()">Print Screen</a>';
          }
          include('navbar.php');
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
              .table {
                border-collapse: separate;
                column-gap: 30px;
            }
            .table-hover > tbody > tr:hover > td,
            .table-hover > tbody > tr:hover > th {
                background-color: #eee;
            }
            .table thead > tr > th {
              border-bottom: 1px solid #C2C2C2;
              padding-bottom: 0;
            }
            .table tbody > tr > td {
              font-size: 0.875em;
              background: #f5f5f5;
              border-top: 10px solid #fff;
              vertical-align: middle;
              padding: 12px 8px;
            }
            .table tbody > tr > td:first-child,
            .table thead > tr > th:first-child {
              padding-left: 20px;
            }
            .table thead > tr > th span {
              border-bottom: 2px solid #C2C2C2;
              display: inline-block;
              padding: 0 5px;
              padding-bottom: 5px;
              font-weight: normal;
            }
            .table thead > tr > th > a span {
              color: #344644;
            }
            .table thead > tr > th > a span:after {
              content: "\f0dc";
              font-family: FontAwesome;
              font-style: normal;
              font-weight: normal;
              text-decoration: inherit;
              margin-left: 5px;
              font-size: 0.75em;
            }
            .table thead > tr > th > a.asc span:after {
              content: "\f0dd";
            }
            .table thead > tr > th > a.desc span:after {
              content: "\f0de";
            }
            .table thead > tr > th > a:hover span {
              text-decoration: none;
              color: #2bb6a3;
              border-color: #2bb6a3;
            }
            .table.table-hover tbody > tr > td {
              -webkit-transition: background-color 0.15s ease-in-out 0s;
              transition: background-color 0.15s ease-in-out 0s;
            }
            .table tbody tr td .call-type {
              display: block;
              font-size: 0.75em;
              text-align: center;
            }
            .table tbody tr td .first-line {
              line-height: 1.5;
              font-weight: 400;
              font-size: 1.125em;
            }
            .table tbody tr td .first-line span {
              font-size: 0.875em;
              color: #969696;
              font-weight: 300;
            }
            .table tbody tr td .second-line {
              font-size: 0.875em;
              line-height: 1.2;
            }
            .table a.table-link {
              margin: 0 5px;
              font-size: 1.125em;
            }
            .table a.table-link:hover {
              text-decoration: none;
              color: #2aa493;
            }
            .table a.table-link.danger {
              color: #fe635f;
            }
            .table a.table-link.danger:hover {
              color: #dd504c;
            }
            
            .table-products tbody > tr > td {
              background: none;
              border: none;
              border-bottom: 1px solid #ebebeb;
              -webkit-transition: background-color 0.15s ease-in-out 0s;
              transition: background-color 0.15s ease-in-out 0s;
              position: relative;
            }
            .table-products tbody > tr:hover > td {
              text-decoration: none;
              background-color: #f6f6f6;
            }
            .table-products .name {
              display: block;
              font-weight: 600;
              padding-bottom: 7px;
            }
            .table-products .price {
              display: block;
              text-decoration: none;
              width: 50%;
              float: left;
              font-size: 0.875em;
            }
            .table-products .price > i {
              color: #8dc859;
            }
            .table-products .warranty {
              display: block;
              text-decoration: none;
              width: 50%;
              float: left;
              font-size: 0.875em;
            }
            .table-products .warranty > i {
              color: #f1c40f;
            }
            .table tbody > tr.table-line-fb > td {
              background-color: #9daccb;
              color: #262525;
            }
            .table tbody > tr.table-line-twitter > td {
              background-color: #9fccff;
              color: #262525;
            }
            .table tbody > tr.table-line-plus > td {
              background-color: #eea59c;
              color: #262525;
            }
            .table-stats .status-social-icon {
              font-size: 1.9em;
              vertical-align: bottom;
            }
            .table-stats .table-line-fb .status-social-icon {
              color: #556484;
            }
            .table-stats .table-line-twitter .status-social-icon {
              color: #5885b8;
            }
            .table-stats .table-line-plus .status-social-icon {
              color: #a75d54;
            }
            
                </style>
                <body>
                  <div class="card">
                  <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                    <i class="checkmark">✓</i>
                  </div>
                    <h1>Success</h1> 
                  <h2>Dear, '.$username.'</h2>
                    <p>Your booking has been successful,<br/> Looking forward to seeing you again soon!</p>
                  </div>

                <form action="HomePage SDB.php" method = "GET">
                <div class="confirmationtable">
                  <body class="shoppingCart">
              <div style="min-height: 1350px" class="CartContainer">
                    <div class="Header">
                      <h3 class="Heading">&nbsp;</h3><h3 class="Heading">&nbsp;</h3><h3 class="Heading">Your Booking</h3>';
                      if ($_SESSION['roles'] == 'Customer'){
                        echo'<h5 class="Action">Loyalty Points: '.$_SESSION['loyaltypts'].'</h5>';
                      } else {
                        
                      }
                   echo'
                   <h5 class="Action"> Username: '.$username.'</h5>
                   <h5 class="Action"> Date of Booking : '.$currentDate.'</h5>
                    </div>
                
                
                <h4 style="text-align: center; margin-bottom: 30px;">Booked Seats Number : '.$seatsOrder.'</h4>
                <div class="col-lg-9 col-md-9 col-xs-12">
                    <div class="col-lg-12 col-xs-12 hero-feature">
                        <div class="table-responsive">
                            <table class="table table-bordered tbl-cart">
                                <thead>
                                    <tr>
                                        <td class="hidden-xs">Image</td>
                                        <td>Movie Name</td>
                                        <td>Ticket Type</td>
                                        <td>Amount</td>
                          <td>Ticket Price</td>
                                        <td>Sub-Total</td>
                          
                            
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="hidden-xs">
                                            <a href="#">
                                                <img margin-left="10px" src="Images/MovieImage/'.$moviePicName.'" style={{ height="200px" }} />
                                            </a>
                                        </td>
                                        <td><a href="#">'.$movieTitle.'</a>
                                        </td>
                                        <td><a href="#">Adult</a>
                                        </td>
                                        <td><a href="#">'.$numAdultTik.'</a>
                                        </td>
                                        <td class="price">$12</td>
                                        <td>$'.$adultTotal.'</td>
                          
                                    </tr>
                                    <tr>
                                        <td class="hidden-xs">
                                            <a href="#">
                                                
                                            </a>
                                        </td>
                                        <td><a href="#">'.$movieTitle.'</a>
                                        </td>
                                         <td><a href="#">Child</a>
                                        </td>
                                       </td>
                                        <td><a href="#">'.$numChildTik.'</a>
                                        </td>
                                        <td class="price">$6</td>
                                        <td>$'.$childTotal.'</td>
                          
                                    </tr>
                        <tr>
                                        <td class="hidden-xs">
                                            <a href="#">
                                                
                                            </a>
                                        </td>
                                        <td><a href="#">'.$movieTitle.'</a>
                                        </td>
                                         <td><a href="#">Senior</a>
                                        </td>
                                        </td>
                                        <td><a href="#">'.$numSeniorTik.'</a>
                                        </td>
                                        <td class="price">$6</td>
                                        <td>$'.$seniorTotal.'</td>
                          
                                    </tr>
                        <tr>
                                        <td class="hidden-xs">
                                            <a href="#">
                                                
                                            </a>
                                        </td>
                                        <td><a href="#">'.$movieTitle.'</a>
                                        </td>
                                         <td><a href="#">Student</a>
                                        </td>
                                        </td>
                                        <td><a href="#">'.$numStudentTik.'</a>
                                        </td>
                                        <td class="price">$8</td>
                                        <td>$'.$studentTotal.'</td>
                          
                                    </tr>
                        
                        <tr>
                        <td style="font-size: larger">Food Combos</td>
                        </tr>
                        <tr>
                                        <td>Amount</td>
                          <td>Sub-Total</td>
                            
                            
                                    </tr>
                    
                                </thead>
                                <tbody>';

                                    echo'<tr>
                                        </td>
                                       </td>
                                        <td><a href="#">'.$_SESSION['numFoodCombos'].'</a>
                                        </td>
                                        <td class="price">$'.$foodSubTotal.'</td>
                                       
                                    </tr>';
                                
                                
                          echo'<tr><td>
                        
                                    <tr>
                          
                                        <td colspan="6" align="right">Total</td>
                                        <td class="total" colspan="2"><b>$'.$totalBill.' <br>Amount deducted by points redemption:'.$_SESSION['amountSaved'].'</b>
                                        </td>
                                    </tr>
                        
                          
                                </tbody>
            
                    </table>
            
                <a href="HomePage SDB.php">
                  <button class="button">Checkout</button>
                 </a>
                <form>
                  </div>
                    </div>
                </div>	';
                echo$msg;
                    echo'</div>
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