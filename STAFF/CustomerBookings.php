<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Staff View All Bookings</title>
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
font-family: 'Open Sans', sans-serif;
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
li > a::after { content: ' +';}
li > a:only-child::after {
    content: '';
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

</style>

<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
var actions = $("table td:last-child").html();
// Append table with add row form on add new button click
$(".add-new").click(function(){
$(this).attr("disabled", "disabled");
var index = $("table tbody tr:last-child").index();
var row = '<tr>' +
'<td><input type="text" class="form-control" name="name" id="name"></td>' +
'<td><input type="text" class="form-control" name="department" id="department"></td>' +
'<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
'<td>' + actions + '</td>' +
'</tr>';
$("table").append(row);
$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
$('[data-toggle="tooltip"]').tooltip();
});
// Add row on add button click
$(document).on("click", ".add", function(){
var empty = false;
var input = $(this).parents("tr").find('input[type="text"]');
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
$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
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
</head>
<body>
<nav>
        <ul>
                <li><a href="">Home</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="CustomerBookings.html">Bookings</a></li>
				<li><a href="">My Profile</a></li>
                <li><a href="">Change Password</a></li>
                <li><a href="">Log Out</a></li>
            </ul>
        </nav>

		<center>
        <div id="content">
		<h2>Customer<span style="color:#F8F8F8;"> Bookings List</span></h2>
		</div>
 
        <div class="form">
            <form action="">
                <table class="table table-bordered">
<thead>

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
<th>Username</th>
<th>Booking Date</th>
<th>Movie ID</th>
<th>No.Of Tickets</th>
<th>Claim</th>
<th>View Details</th>
<th>Actions</th>
</tr>
</thead>
<tbody>

<tr>
<td>1</td>
<td>cmelato28</td>
<td>13/2/23</td>
<td>AWhiskerAway2020</td>
<td>2</td>
<td>1</td>
<td onClick="location.href='http://www.stackoverflow.com';">
Ticket Confirmation</td>
<td>
<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</body>
</html> 