<?php
class ManageShows{
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
<title>Manager Manage Movies</title>
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

<body>
		<center>
        <div id="content">
		<h2>Manage Shows</h2>
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
<th>Room ID</th>
<th>Movie ID</th>
<th>Rows</th>
<th>Columns</th>
<th>Capacity</th>
<th>Actions</th>
</tr>
</thead>
<tbody>

';

$row = $controller->run("getRoomPlandb");

for($i = 0; $i < sizeof($row); $i++){
    echo '<tr>';
    echo '<td>'.$row[$i]['roomID'].'</td>';
    echo '<td>'.$row[$i]['movieID'].'</td>';
    echo '<td>'.$row[$i]['rows'].'</td>';
    echo '<td>'.$row[$i]['columns'].'</td>';
    echo '<td>'.$row[$i]['capacity'].'</td>';

    if($_SESSION['roles'] == "Manager"){
        echo '<td><a href="EditShow.php?action=edit&roomID='.$row[$i]['roomID'].'">Edit</a><br>
        <a href="EditShow.php?action=reset&roomID='.$row[$i]['roomID'].'">Reset</a>
        </td>';
    }
    echo '</tr>';

}


echo'
</tbody>
</table>
</div>
</div>
</body>
</html> ';
    }
}


$display = new ManageShows();
$display->display();
?>
