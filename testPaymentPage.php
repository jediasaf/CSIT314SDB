<?php
class doPayment{
    
    function display(){
      
      if(!isset($_SESSION)){
        session_start();
      }
      $string ='';
      $msg = '';
      $seats = '';

      include('dbFunctions.php');
      $controller = new controller();

      #store relevent data from order.php to session
      # verification check

      $loyaltyPoints = $_SESSION['loyaltypts'];
      #$loyaltyPoints = 456;

      if($_SERVER['REQUEST_METHOD'] === 'GET'){

        $number = $_GET['paynow_number'];
        $name = $_GET['paynow_name'];
        $paymentType = $_GET['payment_type'];

        if (isset($_GET['redeemPoints'])){
          $true = $_GET['redeemPoints'];
          $pointsDeducted = floor($loyaltyPoints / 100) * 100;
          $amountSaved = $pointsDeducted / 100;
          $_SESSION['amountSaved'] = $amountSaved;
          $result = $controller -> run('redeemPoints',$_SESSION['phoneNo'],$pointsDeducted);
        }
        else{
          $_SESSION['amountSaved'] = 0;
        }

        if (preg_match('/^[a-zA-Z ]+$/', $name) && preg_match('/^[0-9]{8,10}$/', $number)) {
          // Valid name and phone number, continue with code
          if ($_GET['payment_type'] == 'PayNow') {
            $msg .= '<meta http-equiv="refresh" content="2;url=testPaynowPage.php">';
          }
          else if ($_GET['payment_type'] == 'Pay at Counter'){
            $msg .= '<meta http-equiv="refresh" content="2;url=testconfirmationPage.php">';
          }
          else {
          }
          #this closes the regex 
        }else{
          $msg .= 'invalid input, please try again';
        }
        #this closes the check if request method is get
      }
      else if($_SERVER['REQUEST_METHOD'] === 'POST'){
        #tickets
        $_SESSION['SeniorNoTicket'] = $_POST['SeniorNoTicket'];
        $_SESSION['AdultNoTicket'] = $_POST['AdultNoTicket'];
        $_SESSION['StudentNoTicket'] = $_POST['StudentNoTicket'];
        $_SESSION['ChildNoTicket'] = $_POST['ChildNoTicket'];

        # food
        $foodDetails = $controller -> run('getAvailableFoodDetails');
        for ($i = 0; $i < count($foodDetails); $i++) {
          $result = $foodDetails[$i]['foodName'];
          $result = str_replace(' ', '_', $result);
          $_SESSION[$foodDetails[$i]['foodName']] = $_POST[$result];
        }
        
        #seats
        $string = '';
        foreach($_POST as $key => $value) {
          if (strpos($value, '*') !== false){
            $string .= $value.',';
          }
        }

        $_SESSION['seats'] = $string;
        $seats = $_SESSION['seats'];
      }

      
      
      



      echo'<!doctype html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>payment page</title>
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
                  <form action="testPaymentPage.php" method = "GET">
                    <h1>Check Out</h1>
                    <h2>Payment Information</h2>
                      <p>Thank You, Please bring along your booking ID and or Proof of Payment when you come to the cinema.</p>
                      
                    <p>Name</p>
                    <input type="text" class="inputbox" name="paynow_name" id="paynow_name" required />
                      <p>Number</p>
                    <input type="number" class="inputbox" name="paynow_number" id="paynow_number" required />
        
        
                    <p>Payment Type</p>
                    <select class="inputbox" name="payment_type" id="payment_type" required>
                      <option value="">--Select a Payment Type--</option>
                      <option value="PayNow">PayNow</option>
                      <option value="Pay at Counter">Pay at Counter</option>
                    </select>
        
<input type="checkbox" id="redeemPoints" name="redeemPoints" value="redeemPts">
<label for="redeemPoints" style="font-size: larger;"> Redeem My Points* </label>
               
                    <p style="font-size: smaller;">*All points will be redeemed for 1 time use(100 Points = $1)</p>
                    <button type="submit" class="button">CheckOut</button>
                    ';
                    echo $msg;
                    echo'
                  </form>

                </div>
              </div>
            </div>
          
        
        <body>
        </body>
        </html>';

        
        
        
    
  } 
}

$doPayment = new doPayment();
$doPayment->display();
?>