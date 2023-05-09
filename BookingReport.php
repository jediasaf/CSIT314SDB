<?php

class BookingReport{
    function display(){
        $months = array(
            1 => "January",
            2 => "February",
            3 => "March",
            4 => "April",
            5 => "May",
            6 => "June",
            7 => "July",
            8 => "August",
            9 => "September",
            10 => "October",
            11 => "November",
            12 => "December"
        );
        $message = '';
        include ("navbar.php");
        include("dbFunctions.php");
        $title = '';
        $controller = new controller();
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $filter = $_POST['filter'];
            $bookingCount = '';
            $sumSenior = '';
            $sumAdult = '';
            $sumStudent = '';
            $sumChild = '';
            $totalTickets = '';
            $totalPrice = '';
            $totalFood = '';
            


            if($filter == 'all-time'){
                $title = 'All Time';

                $report = $controller -> run("getBookingReportAllTime");
                $movies = $controller -> run("popularMoviesAllTime");
                $dates = $controller -> run("busyDatesAllTime");
            }
            else if($filter == 'year'){
                $title = $_POST['year'];
                $year = $_POST['year'];

                $report = $controller -> run("getBookingReportYear",$year);
                $movies = $controller -> run("popularMoviesYear",$year);
                $dates = $controller -> run("busyDatesYear",$year);

            }
            else if($filter == 'month-year'){
                $title = $months[$_POST['month']].' '.$_POST['year'];
                $year = $_POST['year'];
                $month = $_POST['month'];

                $report = $controller -> run("getBookingReportYearMonth",$year,$month);
                $movies = $controller -> run("popularMoviesYearMonth",$year,$month);
                $dates = $controller -> run("busyDatesYearMonth",$year,$month);
                
            }
            else if($filter == 'last-31'){
                $title = 'the last 31 days';
                $day = 31;
                $report = $controller -> run("getBookingReportDay",$day);
                $movies = $controller -> run("popularMoviesDay",$day);
                $dates = $controller -> run("busyDatesDay",$day);
                
            }
            else if($filter == 'last-7'){
                $title = 'the last 7 days';
                $day = 7;
                $report = $controller -> run("getBookingReportDay",$day);
                $movies = $controller -> run("popularMoviesDay",$day);
                $dates = $controller -> run("busyDatesDay",$day);
            }

            $bookingCount = $report[0]['bookingCount'];
            $sumSenior = $report[0]['sumSenior'];
            $sumAdult = $report[0]['sumAdult'];
            $sumStudent = $report[0]['sumStudent'];
            $sumChild = $report[0]['sumChild'];
            $totalTickets = $report[0]['totalTickets'];
            $totalPrice = $report[0]['totalPrice'];
            $totalFood = $report[0]['totalFood'];
            
            # BOOKING REPORT
            $message .= '
            <table class="table table-bordered">
            <thead>
            <tr>
            <th colspan=2>Booking Report For '.$title.'</th>
            </tr>
            </thead>
            <tbody>

            <tr>
            <td>Amount Of Bookings Made</td>
            <td>'.$bookingCount.'</td>
            </tr>

            <tr>
            <td>Total Senior Tickets Sold</td>
            <td>'.$sumSenior.'</td>
            </tr>

            <tr>
            <td>Total Adult Tickets Sold</td>
            <td>'.$sumAdult.'</td>
            </tr>

            <tr>
            <td>Total Student Tickets Sold</td>
            <td>'.$sumStudent.'</td>
            </tr>

            <tr>
            <td>Total Child Tickets Sold</td>
            <td>'.$sumChild.'</td>
            </tr>

            <tr>
            <td>Total Tickets Sold</td>
            <td>'.$totalTickets.'</td>
            </tr>

            <tr>
            <td>Total Food Sold</td>
            <td>'.$totalFood.'</td>
            </tr>

            <tr>
            <td>Total Revenue</td>
            <td>$'.$totalPrice.'</td>
            </tr>


            </tbody>
            </table>';


            #Busy Date Report
            $message .= '
            <table class="table table-bordered">
            <thead>
            <tr>
            <th colspan=3>Busiest Date Report For '.$title.'</th>
            </tr>
            <tr>
            <th>Date</th>
            <th>Booking Count</th>
            <th>Ticket Count</th>
            </tr>
            </thead>
            <tbody>';

            foreach($dates as $date){
                $message .= '
                <tr>
            <td>'.$date['bookingDate'].'</td>
            <td>'.$date['count'].'</td>
            <td>'.$date['ticketCount'].'</td>
            </tr>
                
                ';
            }


            $message .='
            </tbody>
            </table>';



            #Popular Movies Report
            $message .= '
            <table class="table table-bordered">
            <thead>
            <tr>
            <th colspan=3>Movies Report For '.$title.'</th>
            </tr>
            <tr>
            <th>Movie ID</th>
            <th>Booking Count</th>
            <th>Ticket Count</th>
            </tr>
            </thead>
            <tbody>';

            foreach($movies as $movie){
                $message .= '
                <tr>
            <td>'.$movie['movieID'].'</td>
            <td>'.$movie['count'].'</td>
            <td>'.$movie['ticketCount'].'</td>

            </tr>
                
                ';
            }
            $message .='
            </tbody>
            </table>';


        }
        else{
            $years = $controller -> run("getDistinctYear");


            $message .= '
            
            
            <form action="?" method="POST">
            <div style="display:block;">
  <label for="filter">Filter:</label>
  <select id="filter" name="filter">
    <option value="none">--Select Filter--</option>
    <option value="all-time">All Time</option>
    <option value="year">Year</option>
    <option value="month-year">Month and Year</option>
    <option value="last-31">Last 31 Days</option>
    <option value="last-7">Last 7 Days</option>
  </select>
  </div>
  
  <div id="year-filter" style="display:none;">
    <label for="year">Year:</label>
    <select id="year" name="year">
      <option value="none">--Select Year--</option>';
        
      foreach($years as $year){
        $message .= '<option value="'.$year['Years'].'">'.$year['Years'].'</option>';
      }
      $message .='
    </select>
  </div>

    <div id="month-year-filter" style="display:none;">
    <label for="month">Month:</label>
    <select id="month" name="month">
      <option value="none">--Select Month--</option>
      <option value="1">January</option>
      <option value="2">February</option>
      <option value="3">March</option>
      <option value="4">April</option>
      <option value="5">May</option>
      <option value="6">June</option>
      <option value="7">July</option>
      <option value="8">August</option>
      <option value="9">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>
  </div>
  
  <input type="submit" value="Generate Report">
</form>
            
<script>
const filter = document.querySelector("#filter");
const yearFilter = document.querySelector("#year-filter");
const monthYearFilter = document.querySelector("#month-year-filter");

filter.addEventListener("change", function() {
  if (filter.value === "year") {
    yearFilter.style.display = "block";
    monthYearFilter.style.display = "none";
  } else if (filter.value === "month-year") {
    yearFilter.style.display = "block";
    monthYearFilter.style.display = "block";
  } else {
    yearFilter.style.display = "none";
    monthYearFilter.style.display = "none";
  }
});
</script>
            ';

        }
         
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manager Manage Movies</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
        @import url("CSS/AllUsers.css");
        </style>
        </head>
        
        <body>
                <div id="content">
                <h2>Booking Reports</h2>
                </div>
        
                <div class="table-container">
        <div class="table-wrapper">
        <div class="table-title">
        <div class="row">
        <div class="col-sm-4">';
        
        echo $message;
        echo '
        </div>
        </div>
        
        </body>
        </html>';














    }

}


$display = new BookingReport();
$display -> display();

?>

 
