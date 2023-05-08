<?php

class EditBookings{
  function display (){
    include ("dbFunctions.php");
 $message = "";
$controller = new controller ();
if($_SERVER['REQUEST_METHOD'] === 'GET'){
  $action = $_GET['action'];
  $bookingid = $_GET['bookingid'];
  
  
  $result = $controller -> run("getBookingFromID",$bookingid);
  
  $movie = $controller -> run("getMovie1");
  
  if($action == "edit"){
    $message = '<form action="?" class="contact-form" method="POST">
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Booking ID: </label>
        <input type="text" name="bookingid" value="'.$result[0]['bookingID'].'" class="form-control" readonly>
      </div>
    </div>
	
	<div class="col-sm-5">
      <div class="input-block">
        <label for="">Username: </label>
        <input type="text" name="username" value="'.$result[0]['username'].'" class="form-control">
      </div>
    </div>
	
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Booking Date: </label>
        <input type="text" name="bookingdate" value="'.$result[0]['bookingDate'].'" class="form-control">
      </div>
    </div>
	
	<div class="col-sm-5">
      <div class="input-block textarea">
        <label for="">Movie ID:'.$result[0]['movieID'].'</label>
        <select name="movieid" value="'.$result[0]['movieID'].'" class="form-control">';
         
          
          for($i = 0; $i < sizeof($movie);$i++){
            $message = $message.'<option value="'.$movie[$i]['movieID'].'">';
            $message = $message. $movie[$i]['movieID'];
            $message = $message. '</option>';
          }
          
          $message = $message.'
        </select>
      </div>
    </div>
	
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">No of Tickets: </label>
        <input type="text" name="nooftickets" value="'.$result[0]['noOfTickets'].'" class="form-control">
      </div>
    </div>

    <div class="col-sm-5">
      <div class="input-block">
        <label for="">Phone Number: </label>
        <input type="number" name="phonenum" value="'.$result[0]['phoneNo'].'" class="form-control">
      </div>
    </div>
	
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Claim: </label>
        <input type="text" name="isclaimed" value="'.$result[0]['isClaimed'].'" class="form-control">
      </div>
    </div>
	 
    <div class="col-sm-5">
      <div class="input-block">
        <label for="">View Details: </label>
        <input type="text" name="seats" value="'.$result[0]['seats'].'" class="form-control">
      </div>
    </div>
      
    <div class="col-md-12">
		<div class="form-group">
		<input type="submit" name="submit" value="Edit" class="btn btn-primary">
		<div class="submitting"></div>
		</div>
		</div>
  </div>
</form> ';
  }
  else if($action == "delete"){
    $message =  '<form action="?" method="POST">';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Booking ID                : '.$result[0]['bookingID'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Phone Number        : '.$result[0]['phoneNo'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Username                 : '.$result[0]['username'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Booking Date            : '.$result[0]['bookingDate'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Movie ID                    : '.$result[0]['movieID'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Number of tickets    : '.$result[0]['noOfTickets'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Seat Details               : '.$result[0]['seats'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">isClaimed                   : '.$result[0]['isClaimed'].'</h4>';
    $message = $message.'<input type="hidden" name="bookingid" value="'.$result[0]['bookingID'].'" >';
    $message = $message.'<input type="submit" name="submit" value="Delete">';
    $message = $message.'</form>';
  }
  else if($action == "claim"){
    $message =  '<form action="?" method="POST">';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Booking ID                : '.$result[0]['bookingID'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Phone Number        : '.$result[0]['phoneNo'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Username                 : '.$result[0]['username'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Booking Date            : '.$result[0]['bookingDate'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Movie ID                    : '.$result[0]['movieID'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Number of tickets    : '.$result[0]['noOfTickets'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Seat Details               : '.$result[0]['seats'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">isClaimed                   : '.$result[0]['isClaimed'].'</h4>';
    $message = $message.'<input type="hidden" name="bookingid" value="'.$result[0]['bookingID'].'" >';
    $message = $message.'<input type="submit" name="submit" value="Claim">';
    $message = $message.'</form>';
  }
  

}
else if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if($_POST['submit'] == "Edit"){
    $seats = $_POST['seats'];
    $isclaimed = $_POST['isclaimed'];
    $phonenum = $_POST['phonenum'];
    $nooftickets = $_POST['nooftickets'];
    $movieid = $_POST['movieid'];
    $bookingdate = $_POST['bookingdate'];
    $username = $_POST['username'];
    $bookingid = $_POST['bookingid'];
    /*
    echo '<h1>'.$seats.'</h1>';
    echo '<h1>'.$isclaimed.'</h1>';
    echo '<h1>'.$phonenum.'</h1>';
    echo '<h1>'.$nooftickets.'</h1>';
    echo '<h1>'.$movieid.'</h1>';
    echo '<h1>'.$bookingdate.'</h1>';
    echo '<h1>'.$username.'</h1>';
    echo '<h1>'.$bookingid.'</h1>';*/
    $result = $controller->run("updateBookings",$bookingid,$phonenum,$username,$bookingdate,$movieid,$nooftickets,$isclaimed,$seats);

    #verify the update
    if($result){
      $result = $controller->run("getBookingFromID",$bookingid);
      if($result[0]['username'] == $username && $result[0]['bookingDate'] == $bookingdate && $result[0]['phoneNo'] == $phonenum 
      && $result[0]['movieID'] == $movieid && $result[0]['noOfTickets'] == $nooftickets && $result[0]['seats'] == $seats
      && $result[0]['isClaimed'] == $isclaimed)
      $message = 'Update Successful';
    }
    else{
      $message = 'Update Unsuccessful';
    }
    $message = $message.'<meta http-equiv="refresh" content="5; url='.'ManageBookings.php'.'" />';
  }
  else if($_POST['submit'] == "Delete"){
    $bookingid = $_POST['bookingid'];
    /*
    echo '<h1>'.$bookingid.'</h1>';
    */
    # do the delete
    $result = $controller->run("deleteBooking",$bookingid);
    if($result){
      $test = $controller->run("confirmDeletion",$bookingid);
      if($test == 0){
        $message = 'Booking Deleted';
      }
      else{
        $message = 'Booking not deleted';
      }
    }
    else{
      $message = 'failed to delete';
    }
    $message = $message.'<meta http-equiv="refresh" content="5; url='.'ManageBookings.php'.'" />';
  }
  else if($_POST['submit'] == "Claim"){
    $bookingid = $_POST['bookingid'];
    /*
    echo '<h1>'.$bookingid.'</h1>';
    */
    # do the claim
    $result = $controller->run("claimBooking",$bookingid);
    if($result == 1){
      $message = 'claimed successfully';
    }
    else{
      $message = 'not claimed';
    }
    $message = $message.'<meta http-equiv="refresh" content="5; url='.'ManageBookings.php'.'" />';
  }

}

echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Bookings</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

body {
color: #404E67;
background: #000000;
font-family: "Open Sans", sans-serif;
}
.dropdown-menu {
   position: relative;
   display: inline-block;
}

nav{
    background-color: #F8F8F8;
}
nav ul {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative;
}
nav ul li{
    display: inline-block;
    background-color: #F8F8F8;
}
nav a{
    display: block;
    padding: 0 10px;
    color: #000000;
    line-height: 60px;
    font-size: 15px;
    text-decoration: none;
}
/* Hide Dropdown by Default*/
nav ul ul {
    display: none;
    position: absolute;
    top: 60px;
}
/* hover */
nav a:hover{
    background-color: #F8F8F8;
}
/* Display Dropdown on Hover */
nav ul li:hover > ul {
    display: inherit;
}
/* Fisrt Tier Dropdown */
nav ul ul li{
    width: 150px;
    float: none;
    display: list-item;
    position: relative;

}

/* Change this in order to change the Dropdown symbol */
li > a::after { content: "+";}
li > a:only-child::after {
    content: "";
}

#content h2 {
  margin: 0 0 0 0;
  font: 130% verdana, "Trebuchet MS", arial, tahoma, sans-serif;
  padding: 5px;
  text-transform: uppercase;
  letter-spacing: 5px;
  color: #F8F8F8;
  background: inherit;
}

.form{
            background-color: #F8F8F8;
            margin: 0 5%;
            padding: 30px 60px;
            border-radius: 20px;
        }
        .row {
            display: grid;
            grid-template-columns: auto auto auto auto;
            
        }
        .col {
            padding: 20px 40px;
            text-align: leftwards;
            margin: auto;
        }
        .form-control{
            width: 100%;
            border: none;
            padding: 10px 25px;
        }
        label{
            display: block;
            text-align: leftwards;
        }
       
        button{
				position:absolute;
				bottom:0;}
        @media only screen and (max-width: 900px) {
            .row {
                
                grid-template-columns: auto auto;
                
            }
        }
        @media only screen and (max-width: 600px) {
            .row {
                grid-template-columns: auto;
                
            }
        }
</style>
</head>

<body>';

include ("ManagerNavBar.php");
echo'

		<center>
        <div id="content">
		<h2>Edit <span style="color:#F8F8F8;"> Bookings</span></h2>
		</div>

    
 <div class="form">
                <div class="row">
                    <div class="col">';

                    echo $message;
      echo'
</body>
</html>';
  }
}












$display = new EditBookings();
$display->display();


?>


