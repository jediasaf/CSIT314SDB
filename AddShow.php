<?php
include ("../ManagerNavbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add New Show</title>
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
		<h2>Add New <span style="color:#F8F8F8;"> Show</span></h2>
		</div>
 <div class="form">
            <form action="">
                <div class="row">
                    <div class="col">
  <form action="" class="contact-form">
    <div class="col-sm-5">
      <div class="input-block">
        <label for="">Movie ID: </label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-5">
      <div class="input-block">
        <label for="">Room ID: </label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-5">
      <div class="input-block">
        <label for="">Show Time: </label>
        <input type="text" class="form-control">
      </div>
    </div>
      
    <div class="col-md-12">
		<div class="form-group">
		<input type="submit" value="Add Show" class="btn btn-primary">
		<div class="submitting"></div>
		</div>
		</div>
  </div>
</form>       
</body>
</html>