<?php

class UserProfile{

    function display(){
        if(!isset($_SESSION)){
            session_start();
            #$message = '<h1>UNAUTHORISED. PLEASE DO NOT PROCEED</h1><br><meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';

        }
        
            if($_SESSION['roles'] == "Admin"){
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
                <th>Edit User</th>
                <th>Delete User</th>
                </tr>
                </thead>
                <tbody>
                
                
                ';
                include ("dbFunctions.php");
                $controller = new controller();
                $row = $controller ->run("retrieveUserDB");

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
                    $message = $message. '<td><a href="EditUserProfile.php?action=edit&username='.$row[$i]['username'].'">Edit</a></td>';
                    if($_SESSION['roles'] == "Admin"){
                        $message = $message. '<td><a href="EditUserProfile.php?action=delete&username='.$row[$i]['username'].'">Delete</a></td>';
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
        </style>';


        echo'
        </head>';
        include('navbar.php');
       

        echo'<body>


                <center>
                <div id="content">
                <h2>User<span style="color:#F8F8F8;"> Profiles</span></h2>
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

$display = new UserProfile();
$display->display();




?>

