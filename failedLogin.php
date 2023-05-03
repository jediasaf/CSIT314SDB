<?php include('../../Unnamed Site 2/navbar.php');?>

<html>
  <head>
	  <meta http-equiv="refresh" content="5; url=../../Unnamed Site 2/'HomePage SDB.php'" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
		  margin: 0 auto;
        background: black;
      }
        h1 {
          color:  #B40E10;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
		h2{
			 color:  #B40E10;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 30px;
          margin-bottom: 10px;
		}
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      strong {
        color: #B40E10;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <strong class="checkmark"><img width="200px" src="Images/forbidden.png"></strong>
      </div>
        <h1>Failed</h1> 
		  <h2>Access Denied</h2>
        <p>Your username or password is wrong,<br/> Please enter again!</p>
      </div>
    </body>
</html>
