<?php
class ViewCustomer{

    function display(){
        include ("navbar.php");
        include ("dbFunctions.php");
        $controller = new controller();
        $search_username = isset($_GET['username']) ? $_GET['username'] : '';
        $row = $controller -> run("getCustomerList");
        if (!empty($search_username)) {
            $filtered_rows = array_filter($row, function ($customer) use ($search_username) {
                return strpos($customer['username'], $search_username) !== false;
            });
            $row = $filtered_rows;
        }
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
        </head>
        <body>
            <center>
            <div id="content">
                <h2>View Customers</h2>
            </div>
            <form action="?" method="GET">
                <input type="text" name="username" placeholder="Search Username HERE">
                <input type="submit" name="submit" value="Search">
            </form>
            <div class="form">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Phone No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Genre Preference</th>
                            <th>Loyalty Points</th>
                            <th>Seat Preference</th>
                        </tr>
                    </thead>
                    <tbody>';

        foreach($row as $customer){
            echo '<tr>
                      <td>'.$customer['phoneNo'].'</td>
                      <td>'.$customer['username'].'</td>
                      <td>'.$customer['email'].'</td>
                      <td>'.$customer['age'].'</td>
                      <td>'.$customer['genrePref'].'</td>
                      <td>'.$customer['loyaltyPts'].'</td>
                      <td>'.$customer['seatPref'].'</td>
                  </tr>';
        }

        echo '</tbody>
              </table>
            </div>
        </body>
        </html> ';
    }
}

$display = new ViewCustomer();
$display -> display();
?>
