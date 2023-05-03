
<!doctype html>
<html>
<head>
  <script>
    function checkPasswords() {
      if (document.getElementById("pwd").value == document.getElementById("pwd-repeat").value) {
        document.getElementById("submit_button").disabled = false;
        document.getElementById("message").style.color = "green";
        document.getElementById("message").innerHTML = "matching";
      } else {
        document.getElementById("submit_button").disabled = true;
        document.getElementById("message").style.color = "red";
        document.getElementById("message").innerHTML = "not matching";

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
        
		  
		  <label for="firstName"><b>First Name</b></label>
        <input
          type="text"
          placeholder="Enter First Name"
          name="firstName"
          id="firstName"
          required
        />
		  
		  <label for="lastName"><b>Last Name</b></label>
        <input
          type="text"
          placeholder="Enter Last Name"
          name="lastName"
          id="lastName"
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
          onkeyup="checkPasswords();"
          required
        />

        <label for="pwd-repeat"><b>Repeat Password</b></label>
        <input
          type="password"
          placeholder="Repeat Password"
          name="pwd-repeat"
          id="pwd-repeat"
          onkeyup="checkPasswords();"
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
		  <label for="phoneNo"><b>Phone Number</b></label>
        <input
          type="number"
          placeholder="Enter Your Phone Number"
          name="phoneNo"
          id="phoneNo"
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
		  <label for="seatPref"><b> Seat Preferences</b></label> <br>
		  <select name="role" id="role">
			<option value="None">Choose your preference</option>
			<option value="back">Back</option>
			<option value="center">Center</option>
			</select>
		  <br>
		  
        <!-- submit button -->
        <button type="submit" id="submit_button" disabled>Register</button>
        <span id="message"></span>
        <?php 
        #echo $message;
        ?>
      </div>
	</form>
			</div>
</body>

</html>
