
<?php
class ViewCustomer{

    function display(){
        include ("navbar.php");
        include ("dbFunctions.php");
        $controller = new controller();
        $row = $controller -> run("getCustomerList");
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manager View Customers</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
        @import url("CSS/AllUserCSS.css");
        </style>
        
        <body>
                <center>
                <div id="content">
                <h2>View Customers</h2>
                </div>
         
                <div class="form">
                    <form action="">
                        <table class="table table-bordered">
        <thead>
        
        <tr>
        <th>Phone No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Age</th>
        <th>Genre Preference</th>
        <th>Loyalty Points</th>
        <th>Role</th>
        <th>Seat Preference</th>
        
        </tr>
        </thead>
        
        <tbody>';

        for($i = 0; $i < sizeof($row);$i++){
            echo'
            <tr>
            <td>'.$row[$i]['phoneNo'].'</td>
            <td>'.$row[$i]['username'].'</td>
            <td>'.$row[$i]['email'].'</td>
            <td>'.$row[$i]['age'].'</td>
            <td>'.$row[$i]['genrePref'].'</td>
            <td>'.$row[$i]['loyaltyPts'].'</td>
            <td>'.$row[$i]['roles'].'</td>
            <td>'.$row[$i]['seatPref'].'</td>
            </tr>';
        }
       

        echo'
        
        </div>
        </body>
        </html> ';
    }
}


$display = new ViewCustomer();
$display -> display();



?>
