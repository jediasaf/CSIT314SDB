<?php

class ListAllUsers{

    function display(){
        if(!isset($_SESSION)){
            session_start();
            #$message = '<h1>UNAUTHORISED. PLEASE DO NOT PROCEED</h1><br><meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';

        }
        
            if($_SESSION['roles'] == "Admin"){
                $message = '
                <div class="searchbar">
                <form action="SearchUser.php" class="search-bar" method = "GET">
                    <input type="text" placeholder="Search User" name="name">
                    <input type="submit" value="Search">
                </form>
                </div>
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
                include ("dbFunctions.php");

                $controller = new controller();
                $row = $controller ->run("getAllUsers");

                for($i = 0; $i < sizeof($row);$i++){
                    $message = $message. '<tr>';
                    $message = $message.  '<td>'.$row[$i]['phoneNo'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['username'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['hashedPassw'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['email'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['age'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['genrePref'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['loyaltyPts'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['roles'].'</td>';
                    $message = $message.  '<td>'.$row[$i]['seatPref'].'</td>';
                    if($_SESSION['roles'] == "Admin"){
                        $message = $message. '<td><a href="ViewProfile.php?username='.$row[$i]['username'].'">View</a></td>';
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
        @import url("CSS/AllUsers.css"); 
        </style>';


        echo'
        </head>';
        include('navbar.php');
       

        echo'<body>


                <center>
                <div id="content">
                <h2>All User<span style="color:#F8F8F8;"> Profiles</span></h2>
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

$display = new ListAllUsers();
$display->display();




?>

