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
      #if ($_SESSION['loyaltypts'])
      if ($_SESSION['roles'] == 'customer'){
        $loyaltyPoints = $_SESSION['loyaltypts'];
        $seatPref = $_SESSION['seatPref'];
      } else {

      }

      #$seatPref = 'front';
      #$loyaltyPoints = 99;

      if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $_SESSION['SeniorNoTicket'] = $_POST['SeniorNoTicket'];
        $_SESSION['AdultNoTicket'] = $_POST['AdultNoTicket'];
        $_SESSION['StudentNoTicket'] = $_POST['StudentNoTicket'];
        $_SESSION['ChildNoTicket'] = $_POST['ChildNoTicket'];
        $totalTickets = $_SESSION['SeniorNoTicket'] + $_SESSION['AdultNoTicket'] + $_SESSION['StudentNoTicket'] + $_SESSION['ChildNoTicket'];

        # food
        /*
        $foodDetails = $controller -> run('getAvailableFoodDetails');
        for ($i = 0; $i < count($foodDetails); $i++) {
          $result = $foodDetails[$i]['foodName'];
          $result = str_replace(' ', '_', $result);
          $_SESSION[$foodDetails[$i]['foodName']] = $_POST[$result];
        }
        */
        $_SESSION['numFoodCombos'] = $_POST['foodcombos'];
        
        #seats
        $string = '';
        $hasAsterisk = false;
        $count = 0;
        $stop = 0;
        foreach($_POST as $key => $value) {
          if (strpos($value, '*') !== false){
            $string .= $value.',';
            $_SESSION['seats'] = $string;
            $hasAsterisk = true;
            $count += 1;
          }
        }
        if($hasAsterisk) {
          if($count > $totalTickets or $count < $totalTickets && $count !== 0){
            # seat selected but does not match ticket count
            $_SESSION['invalid'] = 'Seats selected do not match ticket amount';
            $msg .= '<meta http-equiv="refresh" content="2;url=Order.php">';
          } else {
            # seats selected and ticket count match 
          }
        } else if ($_SESSION['roles'] == 'customer') {
          # seat not selected (use preference)
          if ($seatPref == 'back'){
            for($r = 1 ; $r <= $_SESSION['row']; $r++ ){
              for($c = 1 ; $c <= $_SESSION['cols']; $c++){
                $result = $controller -> run("getSeatStatus",$_SESSION['roomID'],$r,$c);
                if($result == 1){
                #seat already booked
              } 
              else if($result == 0 && $stop < $totalTickets){
                #seat open for booking
                $result = $controller -> run("getSeatName",$_SESSION['roomID'],$r,$c);
                $seatStatusChange = $controller -> run("updateSeatStatus",$_SESSION['roomID'],$result[0]['seatName']);
                $string .= $result[0]['seatName'].', ';
                $stop++;
                } else {
                }
              }
            }
            $string = substr($string, 0, -2);
            $_SESSION['seatsP'] = $string;
            $seatsP = $_SESSION['seatsP'];

          } else if ($seatPref == 'front'){

            for($r = $_SESSION['row'] ; $r >= 1 ; $r-- ){
              for($c = $_SESSION['cols'] ; $c >= 1 ; $c--){
                $result = $controller -> run("getSeatStatus",$_SESSION['roomID'],$r,$c);
                if($result == 1){
                #seat already booked
              } 
              else if($result == 0 && $stop < $totalTickets){
                #seat open for booking
                $result = $controller -> run("getSeatName",$_SESSION['roomID'],$r,$c);
                $seatStatusChange = $controller -> run("updateSeatStatus",$_SESSION['roomID'],$result[0]['seatName']);
                $string .= $result[0]['seatName'].', ';
                $stop++;
                } else {
                }
              }
            }
            $string = substr($string, 0, -2);
            
            $_SESSION['seatsP'] = $string;
            $seatsP = $_SESSION['seatsP'];
          }
          } else {

          }

        #this closes the check if request method is get
      }
      else if($_SERVER['REQUEST_METHOD'] === 'GET'){


        $number = $_GET['paynow_number'];
        $name = $_GET['paynow_name'];
        $paymentType = $_GET['payment_type'];



        if (preg_match('/^[a-zA-Z ]+$/', $name) && preg_match('/^[0-9]{8,10}$/', $number)) {
          // Valid name and phone number, continue with code
          if ($_GET['payment_type'] == 'PayNow') {
            if (isset($_GET['redeemPoints'])){
              if($loyaltyPoints >= 100){
                $true = $_GET['redeemPoints'];
                $pointsDeducted = floor($loyaltyPoints / 100) * 100;
                $_SESSION['loyaltypts'] = $_SESSION['loyaltypts'] - $pointsDeducted;
                $amountSaved = $pointsDeducted / 100;
                $_SESSION['amountSaved'] = '$'.$amountSaved;
                $result = $controller -> run('redeemPoints',$_SESSION['phoneNo'],$pointsDeducted);
                $msg .= '<meta http-equiv="refresh" content="2;url=PaynowPage.php">';
              } else {
                $_SESSION['amountSaved'] = 'invalid amount of points';
                $msg .= '<meta http-equiv="refresh" content="2;url=PaynowPage.php">';
              }
            }
            else{
              $_SESSION['amountSaved'] = 0;
              $msg .= '<meta http-equiv="refresh" content="2;url=PaynowPage.php">';
            }
          }
          else if ($_GET['payment_type'] == 'Pay at Counter'){
            if (isset($_GET['redeemPoints'])){
              if($loyaltyPoints >= 100){
                $true = $_GET['redeemPoints'];
                $pointsDeducted = floor($loyaltyPoints / 100) * 100;
                $_SESSION['loyaltypts'] = $_SESSION['loyaltypts'] - $pointsDeducted;
                $amountSaved = $pointsDeducted / 100;
                $_SESSION['amountSaved'] = $amountSaved;
                $result = $controller -> run('redeemPoints',$_SESSION['phoneNo'],$pointsDeducted);
                $msg .= '<meta http-equiv="refresh" content="2;url=confirmationPage.php">';
              } else {
                $_SESSION['amountSaved'] = 'invalid amount of points';
                $msg .= '<meta http-equiv="refresh" content="2;url=confirmationPage.php">';
              }
            }
            else{
              $_SESSION['amountSaved'] = 0;
              $msg .= '<meta http-equiv="refresh" content="2;url=confirmationPage.php">';
            }
          }
          else {
          }
          #this closes the regex 
        }else{
          $msg .= 'invalid input, please try again';
        }
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
                  <form action="PaymentPage.php" method = "GET">
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
                    </select>';
        if ($_SESSION['roles'] == 'customer'){
          echo'<input type="checkbox" id="redeemPoints" name="redeemPoints" value="redeemPts">
          <label for="redeemPoints" style="font-size: larger;"> Redeem My Points* </label>
          <p style="font-size: smaller;">*All points will be redeemed for 1 time use(100 Points = $1)</p>';
        } else {

        }

               
                    echo'<button type="submit" class="button">CheckOut</button>
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