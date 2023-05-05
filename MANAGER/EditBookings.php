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

<body>
<nav>
        <ul>
                <li><a href="ManageBookings.html">Home</a></li>
				<li><a href="">About Us</a></li>
				
                <li><a href="ManageMovies.html">Manage Movies</a>
                <!--First Tier Drop Down-->
                <ul>
                    <li><a href="AddMovie.html">Add Movie</a></li>
                </ul>
				<li><a href="ManageShows">Manage Shows</a>
                <!--First Tier Drop Down-->
                <ul>
                    <li><a href="AddShow.html">Add Show</a></li>
                </ul>
				<li><a href="BookingReport">Reports</a>
                <li><a href="CP.html">Change Password</a></li>
                <li><a href="">Log Out</a></li>
            </ul>
        </nav>

		<center>
        <div id="content">
		<h2>Edit <span style="color:#F8F8F8;"> Bookings</span></h2>
		</div>
 <div class="form">
            <form action="">
                <div class="row">
                    <div class="col">
  <form action="" class="contact-form">
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Booking ID: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	<div class="col-sm-5">
      <div class="input-block">
        <label for="">Username: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Booking Date: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	<div class="col-sm-5">
      <div class="input-block textarea">
        <label for="">Movie ID: </label>
        <textarea rows="3" type="text" class="form-control"></textarea>
      </div>
    </div>
	
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">No of Tickets: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Claim: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	 
    <div class="col-sm-5">
      <div class="input-block">
        <label for="">View Details: </label>
        <input type="text" class="form-control">
      </div>
    </div>
      
    <div class="col-md-12">
		<div class="form-group">
		<input type="submit" value="Submit" class="btn btn-primary">
		<div class="submitting"></div>
		</div>
		</div>
  </div>
</form>       
</body>
</html>