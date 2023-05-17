<?php
class EditProfile{
  function display(){
    echo '<!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <style type="text/css">
    @import url("CSS/EditProfile.css");
    </style>
    </head>
    <div class="hero">
    ';
    include("navbar.php");
    echo'
    <body>
      <div class="box-form">
       <form class="edit-form" action="doEditProfile.php" method = "POST">
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
            />
    
          <label for="Age"><b>Age</b></label>
            <input
              type="number"
              placeholder="Enter Your Age"
              name="age"
              id="age"
            />
         <label for="Preferences"><b>Preferences</b></label> <br>
          <select name="role" id="role">
          <option value="No Preferences">Choose your preference</option>
          <option value="Thriller">Thriller</option>
          <option value="Adventure">Adventure</option>
          <option value="Horror">Horror</option>
          <option value="Documentary">Documentary</option>
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
            <button type="submit">Update</button>
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
      </script>
    
    ';
  }
}

$display = new EditProfile();
$display->display();

?>