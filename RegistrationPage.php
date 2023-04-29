<?php 
/*
require_once("RegistrationPage.php");
static $message = "";
$username = $_POST['username'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];
$phoneNum = $_POST['phoneNo'];
$email = $_POST['email'];
$age = $_POST['age'];
$genre = $_POST['role'];
$seat = $_POST['seat'];

include "dbFunctions.php";

$result = $conn->query("select count(*) from userdb where username = '$username'");
$row = $result->fetch_assoc();

if($password != $passwordRepeat){
  $message = "Password Do Not Match";
}
else if ($row['count']>0){ 
  $message = "Username Already Taken :(";
}
else { 
  

  
  
}

$conn->close();
*/
?>

<!doctype html>
<html>
<head>
  <script>
    function checkPasswords() {
      var password = document.getElementById("pwd").value;
      var confirm_password = document.getElementById("pwd-repeat").value;
      var submit_button = document.getElementById("submit_button");
      if (password == confirm_password) {
        submit_button.disabled = false;
      } else {
        submit_button.disabled = true;
      }
    }
  </script>
<meta charset="UTF-8">
<title>RegistrationPage</title>
	
<style type="text/css">

</style>
<link href="css/RegistrationForm.css" rel="stylesheet" type="text/css">
<!--<link href="RegistrationForm.css" rel="stylesheet" type="text/css">-->
</head>
	
	<body>
		<div class="box-form">
	 <form action="" method="post">
      <div class="container">
       <img width="200px" src="Images/D.png">
<h1>Register</h1>
<p>Kindly fill in this form to register.</p>
        
		  
		  <label for="First Name"><b>First Name</b></label>
        <input
          type="text"
          placeholder="Enter First Name"
          name="first name"
          id="firstname"
          required
        />
		  
		  <label for="Last Name"><b>Last Name</b></label>
        <input
          type="text"
          placeholder="Enter Last Name"
          name="last name"
          id="last name"
          required
        />
		  <label for="username"><b>Username</b></label>
        <input
          type="text"
          placeholder="Enter username"
          name="username"
          id="username"
          required
        />
		 

        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        />

        <label for="pwd"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="pwd"
          id="pwd"
          onkeyup="checkPasswords()"
          required
        />

        <label for="pwd-repeat"><b>Repeat Password</b></label>
        <input
          type="password"
          placeholder="Repeat Password"
          name="pwd-repeat"
          id="pwd-repeat"
          onkeyup="checkPasswords()"
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
        <button type="submit" id="submit_button" disabled>Register</button>
        <?php 
        #echo $message;
        ?>
      </div>
	</form>
			</div>
</body>

</html>
