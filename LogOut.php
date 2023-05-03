<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<style type="text/css">
@import url("css/LogOut.css");
</style>
 <style>
       
    </style>
</head>
<?php include('navbar.php');?>
<body>
</div>
<?php 
echo $_SESSION['username'];
?>
</div>
<div class="box">
        <a href="#popup-box"> 
            Logout Now?
        </a>
    </div>
<div id="popup-box" class="modal">
        <div class="content">
			<?php
			session_destroy();
			?>
            <h1 style="color: gainsboro;">
                Thank You for using our system!
            </h1>
            <b>
                <p>Hope it satisfy you!</p>
            </b>
            <a href="#" 
               class="box-close">
                ×
            </a>
        </div>
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
