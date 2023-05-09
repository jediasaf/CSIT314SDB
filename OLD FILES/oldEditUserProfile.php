<?php
include ("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Edit User Profiles</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
@import url("CSS/ManagerCSS.css");
</style>
</head>

<body>

		<center>
        <div id="content">
		<h2>Edit <span style="color:#F8F8F8;"> User Profile</span></h2>
		</div>
 <div class="form">
            <form action="">
                <div class="row">
                    <div class="col">
  <form action="" class="contact-form">
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Username: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	<div class="col-sm-5">
      <div class="input-block">
        <label for="">Phone: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Email: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
		
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Age: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	 <div class="col-sm-5">
  <div class="input-block">
    <label for="genre">Genre Preference: </label>
    <select id="genre" class="form-control">
      <option value="action">Thriller</option>
      <option value="comedy">Adventure</option>
      <option value="drama">Horror</option>
      <option value="horror">Fantasy</option>
	  <option value="horror">Drama</option>
	  <option value="horror">Animation</option>
	  <option value="horror">Comedy</option>
	  <option value="horror">Crime</option>
	  <option value="horror">Mystery</option>
      <option value="romance">Romance</option>
	  <option value="horror">Action</option>
	  <option value="horror">Sci-Fi</option>
	  <option value="horror">Musical</option>
    </select>
  </div>
</div>

	
	<div class="col-sm-5">
  <div class="input-block">
    <label for="">Role: </label>
    <select class="form-control">
	<option value="analyst">Admin</option>
      <option value="manager">Manager</option>
      <option value="developer">Customer</option>
      <option value="designer">Staff</option>
    </select>
  </div>
</div>

	 
<div class="col-sm-5">
  <div class="input-block">
    <label for="">Seat Preference: </label>
    <select class="form-control">
      <option value="window">Front</option>
      <option value="aisle">Back</option>
      <option value="middle">Center</option>
	  <option value="middle">None</option>
    </select>
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