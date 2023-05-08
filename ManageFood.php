<?php

class ManageFood{
  function display(){
    include ("navbar.php");
    include ("dbFunctions.php");
    $controller = new controller();
    $row = $controller -> run("getAllFood");
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manager Manage Food</title>
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

<body>
		<center>
        <div id="content">
		<h2>Manage Food</h2>
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
<th>Food Name</th>
<th>Quantity</th>
<th>Food Picture</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>
<tbody>';


for($i = 0; $i < sizeof($row); $i ++){
    echo'
    <tr>
    <td>'.$row[$i]['foodName'].'</td>
    <td>'.$row[$i]['quantity'].'</td>
    <td>'.$row[$i]['foodPicName'].'</td>
    <td>'.$row[$i]['status'].'</td>
    <td>
    <a href="EditFood.php?action=edit&foodName='.$row[$i]['foodName'].'">Edit</a>
    <a href="EditFood.php?action=delete&foodName='.$row[$i]['foodName'].'">Delete</a>
    </td>
    </tr>';
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


$display = new ManageFood();
$display -> display();
?>

