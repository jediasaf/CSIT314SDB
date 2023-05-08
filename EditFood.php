<?php
include ("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manager Edit Food</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
@import url("CSS/AllUsersCSS.css");
</style>
</head>

<body>
		<center>
        <div id="content">
		<h2>Edit Food</h2>
		</div>
 <div class="form">
            <form action="">
                <div class="row">
                    <div class="col">
  <form action="" class="contact-form">
	 <div class="col-sm-5">
      <div class="input-block">
        <label for="">Food Name: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	<div class="col-sm-5">
      <div class="input-block">
        <label for="">Quantity: </label>
        <input type="text" class="form-control">
      </div>
    </div>
	
	 <div class="col-sm-5">
	  <div class="input-block">
        <label for="">Food Picture: </label>
        <input type = "file" name = "fileupload" accept = "image/*" />
      </div>
    </div>
	
<div class="col-sm-5">
  <div class="input-block">
    <label for="">Status: </label>
    <div>
      <label>
        <input type="radio" name="status" value="1"> 1
      </label>
      <label>
        <input type="radio" name="status" value="0"> 0
      </label>
    </div>
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