<?php
include("navbar.php");
class ViewCustomerProfile{
    function display(){
        include("dbFunctions.php");
        $message = "";
        $controller = new controller ();
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $username = $_GET['username'];
            $result = $controller->run("retrieveCustomer", $username);

            $message =  '<form action="?" method="POST">';
            $message = $message.'<h4 style="text-align: left; white-space: pre;">Username                              : '.$result[0]['username'].'</h4>';
            $message = $message.'<h4 style="text-align: left; white-space: pre;">Phone Number                     : '.$result[0]['phoneNo'].'</h4>';
            $message = $message.'<h4 style="text-align: left; white-space: pre;">Email                                       : '.$result[0]['email'].'</h4>';
            $message = $message.'<h4 style="text-align: left; white-space: pre;">Age                                          : '.$result[0]['age'].'</h4>';
            $message = $message.'<h4 style="text-align: left; white-space: pre;">Genre Preference                 : '.$result[0]['genrePref'].'</h4>';
            $message = $message.'<h4 style="text-align: left; white-space: pre;">Loyalty Points                        : '.$result[0]['loyaltyPts'].'</h4>';
            $message = $message.'<h4 style="text-align: left; white-space: pre;">Seat Preference                    : '.$result[0]['seatPref'].'</h4>';
            $message = $message.'</form>';
        }

        echo '
    <!DOCTYPE html>
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
    
    body {
    color: #404E67;
    background: #000000;
    font-family: "Open Sans", sans-serif;
    text-align: center;
    padding: 40px 0;
    margin: 0 auto;
    background: black;
    }
      h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
      }
  h2{
     color: #88B04B;
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
    i {
      color: #9ABC66;
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
    .dropdown-menu {
       position: relative;
       display: inline-block;
    }
    
    nav{
        background-color: #F8F8F8;
    }
    nav ul {
        padding: 0;
        margin: 0;
        list-style: none;
        position: relative;
    }
    nav ul li{
        display: inline-block;
        background-color: #F8F8F8;
    }
    nav a{
        display: block;
        padding: 0 10px;
        color: #000000;
        line-height: 60px;
        font-size: 15px;
        text-decoration: none;
    }
    /* Hide Dropdown by Default*/
    nav ul ul {
        display: none;
        position: absolute;
        top: 60px;
    }
    /* hover */
    nav a:hover{
        background-color: #F8F8F8;
    }
    /* Display Dropdown on Hover */
    nav ul li:hover > ul {
        display: inherit;
    }
    /* Fisrt Tier Dropdown */
    nav ul ul li{
        width: 150px;
        float: none;
        display: list-item;
        position: relative;
    
    }
    
    /* Change this in order to change the Dropdown symbol */
    li > a::after { content: "+";}
    li > a:only-child::after {
        content: "";
    }
    
    #content h2 {
      margin: 0 0 0 0;
      font: 130% verdana, "Trebuchet MS", arial, tahoma, sans-serif;
      padding: 5px;
      text-transform: uppercase;
      letter-spacing: 5px;
      color: #F8F8F8;
      background: inherit;
    }
    
    .form{
                background-color: #F8F8F8;
                margin: 0 5%;
                padding: 30px 60px;
                border-radius: 20px;
            }
            .row {
                display: grid;
                grid-template-columns: auto auto auto auto;
                
            }
            .col {
                padding: 20px 40px;
                text-align: leftwards;
                margin: auto;
            }
            .form-control{
                width: 100%;
                border: none;
                padding: 10px 25px;
            }
            label{
                display: block;
                text-align: leftwards;
            }
           
            button{
            position:absolute;
            bottom:0;}
            @media only screen and (max-width: 900px) {
                .row {
                    
                    grid-template-columns: auto auto;
                    
                }
            }
            @media only screen and (max-width: 600px) {
                .row {
                    grid-template-columns: auto;
                    
                }
            }
            
    </style>
    </head>
    
    <body>';
    
  
    echo'
    
        <center>
            <div id="content">
        <h2>View<span style="color:#F8F8F8;"> User Profile</span></h2>
        </div>
    
        
     <div class="form">
                    <div class="row">
                        <div class="col">';
    
                        echo $message;
          echo'
    </body>
    </html>';
    }
}

$display = new ViewCustomerProfile();
$display->display();
?>