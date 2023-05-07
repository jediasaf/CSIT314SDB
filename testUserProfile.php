<?php
include ("AdminNavBar.php");

class UserProfile{
    function display(){
        echo '<!DOCTYPE html>
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
        </style>
        </head>
        
        <body>
        
                <center>
                <div id="content">
                <h2>User <span style="color:#F8F8F8;"> Profiles</span></h2>
                </div>
         
                <div class="form">
                    <form action="">
                        <table class="table table-bordered">
        <thead>
        
        <tr>
        <th>Username</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Age</th>
        <th>Genre Preference</th>
        <th>Role</th>
        <th>Seat Preference</th>
        <th>Actions</th>
        </tr>
        </thead>
        
        <tbody>
        <tr>
        <td>cheildsj</td>
        <td>89156711</td>
        <td>cvankeevj
        @time.com</td>
        <td>39</td>
        <td>None</td>
        <td>Admin</td>
        <td>None</td>
        <td>
        <button class="edit-btn" title="Edit" data-toggle="tooltip">Edit</button>
        <button class="delete-btn" title="Delete" data-toggle="tooltip">Delete</button>
        </td>
        </tr>
        
        <tr>
        <td>cflewittg</td>
        <td>88100004</td>
        <td>cwedgeg
        @guardian.co
        .uk</td>
        <td>31</td>
        <td>None</td>
        <td>Manager</td>
        <td>None</td>
        <td>
        <button class="edit-btn" title="Edit" data-toggle="tooltip">Edit</button>
        <button class="delete-btn" title="Delete" data-toggle="tooltip">Delete</button>
        </td>
        </tr>
        
        <tr>
        <td>acalafato1x</td>
        <td>88999886</td>
        <td>icrocombe1x@alexa.com</td>
        <td>45</td>
        <td>Documentary</td>
        <td>Customer</td>
        <td>Back</td>
        <td>
        <button class="edit-btn" title="Edit" data-toggle="tooltip">Edit</button>
        <button class="delete-btn" title="Delete" data-toggle="tooltip">Delete</button>
        </td>
        </tr>
        </tbody>
        </div>
        </body>
        </html> ';
    }

}

$display = new UserProfile();
$display->display();
?>