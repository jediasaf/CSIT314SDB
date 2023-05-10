<?php


class SearchUser{

    function display(){
        #include ("navbar.php");
        include ("dbFunctions.php");

        $controller = new controller();
        if(!isset($_SESSION)){
            session_start();
            #$message = '<h1>UNAUTHORISED. PLEASE DO NOT PROCEED</h1><br><meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';

        }
        $search_username = isset($_GET['name']) ? $_GET['name'] : '';
        $row = $controller ->run("getAllUsers");
        if (!empty($search_username)) {
            $filtered_rows = array_filter($row, function ($userdetails) use ($search_username) {
                return strpos($userdetails['username'], $search_username) !== false;
            });
            $row = $filtered_rows;
        }
        
            if($_SESSION['roles'] == "Admin" ){
                $message = '
                <thead>


                <div class="table-container">
                <div class="table-wrapper">
                <div class="table-title">
                <div class="row">
                <div class="col-sm-4">
                </div>
                </div>
                </div>

                <form action="?" method="GET">
                <input type="text" name="name" placeholder="Search username HERE">
                <input type="submit" name="submit" value="Search">
                </form>
                <table class="table table-bordered">
                <thead>
                <tr>
                <th>Phone</th>
                <th>Username</th>
                <th>Password Hashes</th>
                <th>Email</th>
                <th>Age</th>
                <th>Genre Preference</th>
                <th>Loyalty Points</th>
                <th>Role</th>
                <th>Seat Preference</th>
                <th>View Profile</th>
                </tr>
                </thead>
                <tbody>';
                

                foreach($row as $userdetails){
                    $message = $message. '<tr>';
                    $message = $message.  '<td>'.$userdetails['phoneNo'].'</td>';
                    $message = $message.  '<td>'.$userdetails['username'].'</td>';
                    $message = $message.  '<td>'.$userdetails['hashedPassw'].'</td>';
                    $message = $message.  '<td>'.$userdetails['email'].'</td>';
                    $message = $message.  '<td>'.$userdetails['age'].'</td>';
                    $message = $message.  '<td>'.$userdetails['genrePref'].'</td>';
                    $message = $message.  '<td>'.$userdetails['loyaltyPts'].'</td>';
                    $message = $message.  '<td>'.$userdetails['roles'].'</td>';
                    $message = $message.  '<td>'.$userdetails['seatPref'].'</td>';
                    if($_SESSION['roles'] == "Admin"){
                        $message = $message. '<td><a href="ViewProfile.php?username='.$userdetails['username'].'">View</a></td>';
                    }
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
<title>View User Profiles</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
@import url("CSS/AllUsersCSS.css");
center{
background:black;
}

</style>';


echo'
</head>';
include('navbar.php');

echo'<body style="background:white">
		<center>
        <div id="content">
		<h2 style="color:white" >All User Profiles List</h2>
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

$display = new SearchUser();
$display->display();




?>

