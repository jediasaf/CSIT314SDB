<?php
#include ("navbar.php");

class AdminNav{
    function display(){
        echo '<html lang="en">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
        body {
        color: #404E67;
        background: #000000;
        font-family: "Open Sans", sans-serif;
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
        li > a::after { content: " +"";}
        li > a:only-child::after {
            content: "";
        }
        
        
        
        </style>
        
        
        </head>
        <body>
        <nav>
                <ul>
                        <li><a href="AddUser.php">Add Profile</a>
                        <li><a href="StaffPage.php">Manage Staff</a>
                        <li><a href="ManagerPage.php">Manage Managers</a>
                    </ul>
                </nav>
        ';
    }
}


$display = new AdminNav();
$display -> display();

?>
