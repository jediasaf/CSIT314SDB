<?php
class doPayment{
    
    function display(){
      
      if(!isset($_SESSION)){
        session_start();
      }
      $string ='';

      include('dbFunctions.php');
      $controller = new controller();

      #store relevent data from order.php to session
      # verification check

      if($_SERVER['REQUEST_METHOD'] === 'GET'){

        $number = $_GET['paynow_number'];
        $name = $_GET['paynow_name'];
        $paymentType = $_GET['payment_type'];

        if (preg_match('/^[a-zA-Z ]+$/', $name) && preg_match('/^[0-9]{8,10}$/', $number)) {
          // Valid name and phone number, continue with code
          if ($_GET['payment_type'] == 'PayNow') {
            echo'<meta http-equiv="refresh" content="2;url=testPaynowPage.php">';
          }
          else if ($_GET['payment_type'] == 'Pay at Counter'){
            echo'<meta http-equiv="refresh" content="2;url=testconfirmationPage.php">';
          }
          else {
          } 

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
      }

      
      $_SESSION['seats'] = $string;
      



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
                      <p>Thank You, Please'.$string.' bring along your booking ID and or Proof of Payment when you come to the cinema.</p>
                      
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
        <div class="paymentdate">
        

                </div>
                    <p></p>
                    <button type="submit" class="button">CheckOut</button>

                  </form>

                </div>
              </div>
            </div>
          
        
        <body>
        </body>
        </html>';

        
        
        
    }
  } 
}

$doPayment = new doPayment();
$doPayment->display();
?>