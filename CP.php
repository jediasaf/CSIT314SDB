<?php
session_start();
include ("navbar.php");
class changePassword{
	function display(){
#echo "<h1>".$_SESSION['username']."</h1>";

#include ("navbar.php");
include ("dbFunctions.php");
$message = "";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$username = $_POST['username'];
	$old = $_POST['old'];
	$oldhashed = hash("sha256",$old);
	$new = $_POST['new'];
	$newhashed = hash("sha256",$new);
	$role = $_SESSION['roles'];
	

	/*
	echo "<h1>".$username."</h1>";
	echo "<h1>".$old."</h1>";
	echo "<h1>".$new."</h1>";
	echo "<h1>".$newhashed."</h1>";
	*/


	$controller = new controller();
	$result = $controller->run("updatePassword",$username,$oldhashed,$newhashed,$role);
	$validatePasswordChange = $controller -> run("validatePasswordChange",$username,$role);

	if($result == 1){
		if($validatePasswordChange[0]['hashedPassw'] == $newhashed){
			$message = '<h2>Password Changed Successfully</h2>
			<meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';
		}
		else if($validatePasswordChange[0]['hashedPassw'] == $oldhashed){
		}
		else{
			$message = '<h2>Input Error, Please Try Again</h2><meta http-equiv="refresh" content="5; url='.'CP.php'.'" />';
		}
	}
	else{
		$message = '<h2>Unsuccessful, Please Try Again.</h2><meta http-equiv="refresh" content="5; url='.'CP.php'.'" />';
	}
}

echo'
<!DOCTYPE html>
<html lang="en">
<head>
<script>
        function checkPasswords() {
          if (document.getElementById("new").value == document.getElementById("newcfm").value) {
            document.getElementById("submit").disabled = false;
            document.getElementById("message").style.color = "green";
            document.getElementById("message").innerHTML = "matching";
          } else {
            document.getElementById("submit").disabled = true;
            document.getElementById("message").style.color = "red";
            document.getElementById("message").innerHTML = "not matching";
    
          }
        }
      </script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Change Password</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.form-style-10{
	width:450px;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	border-radius: 6px;
	margin-bottom: 15px;
}
.form-style-10 h1{
	background: #2A88AD;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px "Bitter", serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: #888;
	margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
	font: normal 20px "Bitter", serif;
	color: #2A88AD;
	margin-bottom: 5px;
}
.form-style-10 .section span {
	background: #2A88AD;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -45px;
	color: #fff;
	margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
	background: #2A88AD;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px "Bitter", serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
	font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
	background: #2A6881;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
	float: right;
	width: 250px;
	font: 12px Arial, Helvetica, sans-serif;
	color: #4D4D4D;
	margin-top: 10px;
	text-align: right;
}
</style>






<div class="form-style-10">
<form action="?" method="post">
        <div class="inner-wrap">
			<label>Username: <input type="text" name="username" value="'. $_SESSION['username'] .'" readonly></label>	
		<label>Old Password <input type="password" name="old" id="old" /></label>
        <label>New Password <input type="password" name="new" id="new"onkeyup="checkPasswords();" /></label>
        <label>Confirm Password <input type="password" name="newcfm" id="newcfm" onkeyup="checkPasswords();" /></label>
    </div>
    <div class="button-section">
     <input type="submit" id="submit"/>
	 <span id="message"></span>';
	 
	echo $message;
	echo'
    </div>
</form>
</div>



';

	}
}








$display = new changePassword();
$display -> display();


?>
