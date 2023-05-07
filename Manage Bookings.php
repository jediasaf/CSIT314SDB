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
                    $message = $message. '<a href="EditBookings.php?action=edit&bookingid='.$row[$i]['bookingID'].'">Edit</a>';
                    $message = $message. '<a href="EditBookings.php?action=delete&bookingid='.$row[$i]['bookingID'].'">Delete</a>';
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
li > a::after { content: " +";}
li > a:only-child::after {
    content: ";
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

table.table {
table-layout: fixed;
border-radius: 25px;
border-top: 2px solid black;
overflow-wrap: break-word;
}
table.table tr th, table.table tr td {
 border-left: 2px solid black;
 border-right: 2px solid black;
 border-bottom: 2px solid black;
 border-radius: 55px;
 overflow-wrap: break-word;
}
table.table th i {
font-size: 30px;
margin: 0 5px;
cursor: pointer;
overflow-wrap: break-word;
}
table.table th:last-child {
width: 150px;
}
table.table td a {
cursor: pointer;
display: inline-block;
margin: 0 5px;
min-width: 30px;
overflow-wrap: break-word;
}

table.table td a.edit {
color: #000000;
}
table.table td a.delete {
color: #E34724;
}


table.table td i {
font-size: 25px;
}

table.table td .add {
display: none;
}

</style>';


echo'
<script type="text/javascript">
$(document).ready(function(){
$('.'[data-toggle="tooltip"]'.').tooltip();
var actions = $("table td:last-child").html();
// Append table with add row form on add new button click
$(".add-new").click(function(){
$(this).attr("disabled", "disabled");
var index = $("table tbody tr:last-child").index();
var row = '.'<tr>'.' +
'.'<td><input type="text" class="form-control" name="name" id="name"></td>'.' +
'.'<td><input type="text" class="form-control" name="department" id="department"></td>'.' +
'.'<td><input type="text" class="form-control" name="phone" id="phone"></td>'.' +
'.'<td>'.' + actions + '.'</td>'.' +
'.'</tr>'.';
$("table").append(row);
$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
$('.'[data-toggle="tooltip"]'.').tooltip();
});
// Add row on add button click
$(document).on("click", ".add", function(){
var empty = false;
var input = $(this).parents("tr").find('.'input[type="text"]'.');
input.each(function(){
if(!$(this).val()){
$(this).addClass("error");
empty = true;
} else{
$(this).removeClass("error");
}
});
$(this).parents("tr").find(".error").first().focus();
if(!empty){
input.each(function(){
$(this).parent("td").html($(this).val());
});
$(this).parents("tr").find(".add, .edit").toggle();
$(".add-new").removeAttr("disabled");
}
});
// Edit row on edit button click
$(document).on("click", ".edit", function(){
$(this).parents("tr").find("td:not(:last-child)").each(function(){
$(this).html('.'<input type="text" class="form-control" value="'.' + $(this).text() + '.'">'.');
});
$(this).parents("tr").find(".add, .edit").toggle();
$(".add-new").attr("disabled", "disabled");
});
// Delete row on delete button click
$(document).on("click", ".delete", function(){
$(this).parents("tr").remove();
$(".add-new").removeAttr("disabled");
});
});
</script>
</head>';
include('navbar.php');


echo'<body>
<nav>
        <ul>
                <li><a href="">Home</a></li>
				<li><a href="">About Us</a></li>
                <li><a href="">Manage Movies</a>
                <!--First Tier Drop Down-->
                <ul>
                    <li><a href="">Movies List</a></li>
                    <li><a href="">Add Movie</a></li>
                </ul>
				<li><a href="">Manage Shows</a>
                <!--First Tier Drop Down-->
                <ul>
                    <li><a href="">Shows List</a></li>
                    <li><a href="">Add Show</a></li>
                </ul>
				<li><a href="">Manage Bookings</a>
                <!--First Tier Drop Down-->
                <ul>
                    <li><a href="">Bookings List</a></li>
                </ul>
				<li><a href="">Reports</a>
                <!--First Tier Drop Down-->
                <ul>
                    <li><a href="">Sales</a></li>
                </ul>
                <li><a href="">Change Password</a></li>
                <li><a href="">Log Out</a></li>
            </ul>
        </nav>

		<center>
        <div id="content">
		<h2>Manage<span style="color:#F8F8F8;"> Bookings List</span></h2>
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

