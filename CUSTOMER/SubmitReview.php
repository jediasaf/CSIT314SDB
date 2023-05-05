<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Submit Review</title>
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
		
.star-rating {
  display: flex;
  align-items: center;
  width: 180px;
  flex-direction: row-reverse;
  justify-content: space-between;
  margin: 10px auto;
  position: relative;
}
/* hide the inputs */
.star-rating input {
  display: none;
}
/* set properties of all labels */
.star-rating > label {
  width: 30px;
  height: 30px;
  font-family: Arial;
  font-size: 30px;
  transition: 0.2s ease;
  color: orange;
}
/* give label a hover state */
.star-rating label:hover {
  color: #ff69b4;
  transition: 0.2s ease;
}
.star-rating label:active::before {
  transform:scale(1.1);
}

/* set shape of unselected label */
.star-rating label::before {
  content: '\2606';
  position: absolute;
  top: 0px;
  line-height: 30px;
}
/* set full star shape for checked label and those that come after it */
.star-rating input:checked ~ label:before {
  content:'\2605';
}

</style>
</head>

<body>
<nav>
         <ul>
                <li><a href="">Home</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Book Ticket</a></li>
				<li><a href="">My Bookings</a></li>
				<li><a href="">My Profile</a></li>
                <li><a href="">Change Password</a></li>
                <li><a href="">Log Out</a></li>
            </ul>
        </nav>

		<center>
        <div id="content">
		<h2>Let us know <span style="color:#F8F8F8;"> your feedbacks!</span></h2>
		</div>
		
 <div class="form">
            <form action="">
                <div class="row">
                    <div class="col">
  <form action="" class="contact-form">
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Username: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
    <div class="col-sm-9">
      <div class="input-block textarea">
        <label for="">Drop your feedback here:</label>
        <textarea rows="3" type="text" class="form-control"></textarea>
      </div>
    </div>
       <div>
	   
	    <div class="col-sm-6">
      <div class="input-block">
		 <label for="">Rating: </label>
		 
	<div class="star-rating">
      <input type="radio" name="stars" id="star-a" value="5"/>
      <label for="star-a"></label>

      <input type="radio" name="stars" id="star-b" value="4"/>
      <label for="star-b"></label>
  
      <input type="radio" name="stars" id="star-c" value="3"/>
      <label for="star-c"></label>
  
      <input type="radio" name="stars" id="star-d" value="2"/>
      <label for="star-d"></label>
  
      <input type="radio" name="stars" id="star-e" value="1"/>
      <label for="star-e"></label>
	</div>
	
    <div class="col-md-12">
		<div class="form-group">
		<input type="submit" value="Send Message" class="btn btn-primary">
		<div class="submitting"></div>
		</div>
		</div>
  </div>
</form>       
</body>
</html>