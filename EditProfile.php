<?php
include ("../AdminNavBar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit User Profile</title>
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

# this page is meant for testing purposes only

class EditProfile{
  function display(){
    echo'
    <!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <style type="text/css">
    @import url("CSS/EditProfile.css");
    </style>
    </head>
    <div class="hero">
    <?php include("navbar.php");?>
    <body>
      <div class="box-form">
      <!--made changes here-->
       <form class="edit-form" method = "POST" action = "doEditProfile.php"> 
          <div class="container">
           <img width="200px" src="Images/D.png">
    <h1>Edit Your Profile&nbsp;</h1>
    <h6>Kindly fill in this form to edit your profile.</h6>
            <label for="email"><b>Email</b></label>
            <input
              type="text"
              placeholder="Enter Email"
              name="email"
              id="email"
              required
            />

          <label for="Age"><b>Age</b></label>
            <input
              type="number"
              placeholder="Enter Your Age"
              name="age"
              id="age"
              required
            />
         <label for="Preferences"><b>Preferences</b></label> <br>
          <select name="role" id="role">
          <option value="No Preferences">Choose your preference</option>
          <option value="Thriller">Thriller</option>
          <option value="Adventure">Adventure</option>
          <option value="Horror">Horror</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Fantasy">Fantasy</option>
            <option value="Drama">Drama</option>
            <option value="Animation">Animation</option>
            <option value="Comedy">Comedy</option>
            <option value="Crime">Crime</option>
            <option value="Mystery">Mystery</option>
            <option value="Romance">Romance</option>
            <option value="Action">Action</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Musical">Musical</option>
          </select>
          <br>
            <!-- submit button -->
          <a href="LoginPage.php">
            <button id="submit_button" type="submit">Update</button>
          </a>
          </div>
      </form>
          </div>
    </body>
    <footer> 
          <h3>Software Development Board 2023</h3><br>
          <p>Pop-Up Cinema in Town</p>
    </footer>
    </html>
      <script>
        let subMenu = document.getElementById("subMenu");
        
        function toggleMenu(){
          subMenu.classList.toggle("open-menu");
        }
      </script>';
  }
}

# Initialising a class and calling the class method display
$display = new EditProfile();
$display->display();
?>

