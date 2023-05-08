<?php
class MyBookings{
    function display(){
        include ("navbar.php");
        include ("dbFunctions.php");
        $controller = new controller();
        echo '
        
        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Bookings</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
@import url("CSS/AllUsers.css");
</style>
</head>

<body>
		<center>
        <div id="content">
		<h2>My Bookings</h2>
		</div>
 
        <div class="form">
            <form action="">
                <table class="table table-bordered">
<thead>

<tr>
<th>Booking ID</th>
<th>Booking Date</th>
<th>Movie ID</th>
<th>No.Of Tickets</th>
<th>Seat Detail</th>
</tr>
</thead>
<tbody>';

$username = $_SESSION['username'];
$row = $controller -> run("getBookingFromUsername",$username);

for($i = 0; $i < sizeof($row); $i ++){
    $result = $controller -> run("getMovieTitleFromID",$row[$i]['movieID']);
    $movieTitle = $result[0]['movieTitle'];
    echo '<tr>';
    echo '<td>'.$row[$i]['bookingID'].'</td>';
    echo '<td>'.$row[$i]['bookingDate'].'</td>';
    echo '<td>'.$movieTitle.'</td>';
    echo '<td>'.$row[$i]['noOfTickets'].'</td>';
    echo '<td>'.$row[$i]['seats'].'</td>';

    echo '</tr>';
}


echo' 
</tbody>
</table>
</div>
</div>
</body>
</html> 
        
        ';
    }
}


$display = new MyBookings();
$display -> display();
?>

