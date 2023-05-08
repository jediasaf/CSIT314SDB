<?php 
class LogOut{
    function display(){
        
        
        include('navbar.php');
        echo'
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Log Out</title>
	<style type="text/css">
@import url("CSS/LogOut.css");
</style>
 <style>
       
    </style>
</head>

<body>
</div>';
 
#echo $_SESSION['username'];
echo'
</div>
<center>
<div style="background:black" class="content">';
			
			session_destroy();
            echo '<meta http-equiv="refresh" content="2; url='.'HomePage SDB.php'.'" />';
			echo'
            <h1 style="color: gainsboro;">
                Thank You for using our system!
            </h1>
            <b>
                <p style="color:white">Hope it satisfy you!</p>
            </b>
            
        </div>
</center>
</body>
	  <footer> 
			<h3>Software Development Board 2023</h3><br>
			<p>Pop-Up Cinema in Town</p>
</footer>
</html>
        
        ';
    }
}

$display = new LogOut();
$display -> display();



?>
