<?php
class doPaynow{

    function display(){
    if(!isset($_SESSION)){
        session_start();
    }

    include('dbFunctions.php');
    $controller = new controller();

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

    if($_SESSION['amountSaved'] == 'invalid amount of points'){
      $amountSaved = 0;
    } else {
      $amountSaved = substr($_SESSION['amountSaved'], 1);
    }
    $totalBill = ($seniorTotal + $adultTotal + $childTotal + $studentTotal + ($totalFoodOrder * 8)) - $amountSaved;
    $seats = $_SESSION['seats'];

    echo'<!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>PaynowPage</title>
    <style type="text/css">
    @import url("CSS/PaymentPage.css");
    </style>
    </head>
    
        <div class="mainscreen">
          <div class="card">
            <div class="leftside">
              <img
                src="Images/D.png"
                class="product"
                alt="Shoes"
              />
            </div>
            <div class="rightside">
              <form action="testconfirmationPage.php">
                <h1></h1>
                <h2>PayNow QR Code</h2>
                  <p>Thank You for your order, Please scan the QR code below for confirming your booking.</p>
                  <h2>Total : $'.$totalBill.' <br>Amount deducted by points redemption:'.$_SESSION['amountSaved'].'</h2>
                  <img src="Images/paynow.png"> 
                <p></p>
                  <a href="HomePage SDB.php">
                <button type="submit" class="button">Payment Done</button>
                      </a>
              </form>
            </div>
          </div>
        </div>
      
    
    <body>
    </body>
    </html>';
    }
}

$doPaynow = new doPaynow();
$doPaynow->display();
?>