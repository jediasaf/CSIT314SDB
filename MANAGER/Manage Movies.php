<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manager Manage Movies</title>
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
.table-title {
padding-bottom: 25px;
margin: 0 0 10px;
}
.table-title h2 {
margin: 25px 0 0;
font-size: 28px;
}

table.table {
table-layout: fixed;
border-radius: 25px;
border-top: 2px solid black;
}
table.table tr th, table.table tr td {
 border-left: 2px solid black;
 border-right: 2px solid black;
 border-bottom: 2px solid black;
 border-radius: 55px;
}
table.table th i {
font-size: 20px;
margin: 0 5px;
cursor: pointer;
}
table.table th:last-child {
width: 150px;
}
table.table td a {
cursor: pointer;
display: inline-block;
margin: 0 5px;
min-width: 30px;
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


</head>
<body>
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
		<h2>Manage <span style="color:#F8F8F8;"> Movies</span></h2>
		</div>
 
        <div class="form">
		<div class="table-table">
            <form action="">
                <table class="table table-bordered">
</div>
</div>
<table class="table table-bordered">
<thead>
<tr>
<th>Movie ID</th>
<th>Movie Title</th>
<th>Director Name</th>
<th>Description</th>
<th>Cast</th>
<th>Ratings</th>
<th>Movie Picture</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>AWhiskerAway2020</td>
<td>A Whisker Away</td>
<td>Junichi Sato</td>
<td>Miyo Sasaki is in love with her classmate Kento Hinode and tries repeatedly 
to get Kento's attention by transforming into a cat, 
but at some point, the boundary 
between herself and the cat becomes ambiguous.</td>
<td>Mirai Shida,Natsuki Hanae,Hiroaki Ogi</td>
<td>6.7</td>
<td>
<img src="\xampp\htdocs\SDB\Movies\AWhiskerAway2020.png" alt="" height=100 width=100/></td>
<td>
<button class="edit-btn" title="Edit" data-toggle="tooltip">Edit</button>
<button class="delete-btn" title="Delete" data-toggle="tooltip">Delete</button>
</td>
</tr>
</tbody>
</table>
</body>
</html> 