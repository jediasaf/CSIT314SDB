<?php

class CustomerPage{

    function display(){
        if(!isset($_SESSION)){
            session_start();
            #$message = '<h1>UNAUTHORISED. PLEASE DO NOT PROCEED</h1><br><meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';

        }
        
            
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
        <th>Seat Preference</th>
        <th>View Profile</th>
        </tr>
        </thead>
        <tbody>
        
        
        ';
        include ("dbFunctions.php");
        $controller = new controller();
        $search_username = isset($_GET['name']) ? $_GET['name'] : '';
        $row = $controller ->run("retrieveCustomerDB");
        if (!empty($search_username)) {
            $filtered_rows = array_filter($row, function ($userdetails) use ($search_username) {
                return strpos($userdetails['username'], $search_username) !== false;
            });
            $row = $filtered_rows;
        }
        foreach($row as $userdetails){
            $message = $message. '<tr>';
            $message = $message.  '<td>'.$userdetails['phoneNo'].'</td>';
            $message = $message.  '<td>'.$userdetails['username'].'</td>';
            $message = $message.  '<td>'.$userdetails['hashedPassw'].'</td>';
            $message = $message.  '<td>'.$userdetails['email'].'</td>';
            $message = $message.  '<td>'.$userdetails['age'].'</td>';
            $message = $message.  '<td>'.$userdetails['genrePref'].'</td>';
            $message = $message.  '<td>'.$userdetails['loyaltyPts'].'</td>';
            $message = $message.  '<td>'.$userdetails['seatPref'].'</td>';
            $message = $message. '<td><a href="ViewCustomerProfile.php?username='.$userdetails['username'].'">View</a></td>';
            

            $message = $message.  '</td>';
            $message = $message.  '</tr>';
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
                <h2>Customer<span style="color:#F8F8F8;"> Profiles</span></h2>
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

$display = new CustomerPage();
$display->display();




?>

