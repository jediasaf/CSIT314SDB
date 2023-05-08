<?php


class displayManageBookings{

    function display(){
        #include ("navbar.php");
        if(!isset($_SESSION)){
            session_start();
            #$message = '<h1>UNAUTHORISED. PLEASE DO NOT PROCEED</h1><br><meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';

        }
        
            if($_SESSION['roles'] == "Manager"){
                $message = '
                <thead>
                <div>Status Codes:<br>
                        0 = available    <br>
                        1 = claimed
                            
                        </div>
                <div class="table-container">
                <div class="table-wrapper">
                <div class="table-title">
                <div class="row">
                <div class="col-sm-4">
                </div>
                </div>
                </div>
                <table class="table table-bordered">
                <thead>
                <tr>
                <th>Booking ID</th>
                <th>Phone Number</th>
                <th>Username</th>
                <th>Booking Date</th>
                <th>Movie ID</th>
                <th>No.Of Tickets</th>
                <th>Seat Details</th>
                <th>Status</th>
                <th>Claim</th>
                <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                
                ';
                include ("dbFunctions.php");

                $controller = new controller();
                $row = $controller ->run("getBookings");

                for($i = 0; $i < sizeof($row);$i++){
                    $message = $message. '<tr>';
                    $message = $message.  '<td>'.$row[$i]['bookingID'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['phoneNo'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['username'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['bookingDate'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['movieID'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['noOfTickets'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['seats'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['isClaimed'].'</td>';
                    if($row[$i]['isClaimed'] == 1){
                        $message = $message.  '<td>
                    Ticket Claimed</td>
                    <td>';
                    }
                    else if ($row[$i]['isClaimed'] == 0){
                        $message = $message.  '<td>
                        <a href="EditBookings.php?action=claim&bookingid='.$row[$i]['bookingID'].'">Click to Claim</td></a>
                        <td>';
                    }
                    #<button class="edit-btn" title="Edit" data-toggle="tooltip">Edit</button>
                    #<button class="delete-btn" title="Delete" data-toggle="tooltip">Delete</button>
                    $message = $message. '<a href="EditBookings.php?action=edit&bookingid='.$row[$i]['bookingID'].'">Edit</a><br>';
                    if($_SESSION['roles'] == "Manager"){
                        $message = $message. '<a href="EditBookings.php?action=delete&bookingid='.$row[$i]['bookingID'].'">Delete</a>';
                    }

                    $message = $message.  '</td>';
                    $message = $message.  '</tr>';
                }
            }
            else{
                
                $message = '<h1>UNAUTHORISED. PLEASE DO NOT PROCEED</h1><br><meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';
            }
        
        
    echo'
<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manager Manage Bookings</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
@import url("CSS/AllUsers.css");
center{
background:white;
}

</style>';


echo'
</head>';
include('navbar.php');
#include ("ManagerNavbar.php");

echo'<body>


		<center>
        <div id="content">
		<h2>Manage Bookings List</h2>
		</div>
        
        <div class="form">
            <form action="">
                <table class="table table-bordered">';
echo $message;

echo'
</tbody>
</table>
</div>
</div>
</body>
</html> ';
    
    
    
    
    }




    
}

$display = new displayManageBookings();
$display->display();




?>

