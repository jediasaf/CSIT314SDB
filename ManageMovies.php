<?php

class ManageMovies{
    function display(){
        include ("ManagerNavbar.php");
        include ("dbFunctions.php");
        $controller = new controller();

        echo'<!DOCTYPE html>
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
        </head>
        
        <body>
                <center>
                <div id="content">
                <h2>Manage <span style="color:#F8F8F8;"> All Movies</span></h2>
                </div>
         
                <div class="form">
                <div class="table-table">
                    <form action="">
                        <table class="table table-bordered">
        </div>
        </div>
        <table class="table table-bordered">
        <thead>
        <tr>
        <th>Movie ID</th>
        <th>Movie Title</th>
        <th>Director Name</th>
        <th>Description</th>
        <th>Cast</th>
        <th>Ratings</th>
        <th>Movie Picture</th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>';
        $result = $controller->run("getAllMovies");

        for($i = 0; $i < sizeof($result); $i ++){
            echo '<tr>';
            echo '<td width=100>'.$result[$i]['movieID'].'</td>';
            echo '<td width=100> '.$result[$i]['movieTitle'].'</td>';
            echo '<td width=100>'.$result[$i]['directorName'].'</td>';
            echo '<td width=600>'.$result[$i]['description'].'</td>';
            echo '<td width=100>'.$result[$i]['actor_1_name'].', '.$result[$i]['actor_2_name'].', '.$result[$i]['actor_3_name'].'</td>';
            echo '<td width=100>'.$result[$i]['rantings'].'</td>';
            echo '<td width=90 height=160><img src="Images/MovieImage/'.$result[$i]['moviePicName'].'" alt="" height=160 width=90/></td>';
            echo '<td><a href=EditMovie.php?action=edit&movieid='.$result[$i]['movieID'].'>Edit</a><br><br>

            <a href=EditMovie.php?action=delete&movieid='.$result[$i]['movieID'].'>Delete</a></td>';

            echo '</tr>';
        }

        echo '</tbody>
        </table>
        </body>
        </html> ';

    }
}


$display = new ManageMovies();
$display->display();

?>

