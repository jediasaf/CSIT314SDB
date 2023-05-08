<?php


class EditShow{
  function display(){
   
    include ("navbar.php");
    include ("dbFunctions.php");
    $controller = new controller();
    $message = "";

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
      if($_GET['action'] == "edit"){
          $message = '<center>
          

            
          <form action="?" method="post" class="contact-form">


          <div class="col-sm-5">
              <div class="input-block">
                <label for="">Room ID: </label>
                <input type="text" name="roomID" value="'.$_GET['roomID'].'" class="form-control" readonly>
              </div>
            </div>


          <div class="col-sm-5">
              <div class="input-block">
                <label for="">Movie ID: </label>
                <input type="text" name="movieID" class="form-control">
              </div>
            </div>

            <div class="col-sm-5">
              <div class="input-block">
                <label for="">Rows: </label>
                <select type="text" name="rows" class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
            </div>


            <div class="col-sm-5">
              <div class="input-block">
                <label for="">Columns: </label>
                <select type="text" name="columns" class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
            </div>

            <div class="col-md-12">
            <div class="form-group">
            <br><br>
            <input type="submit" value="edit" name="submit" class="btn btn-primary">
            <div class="submitting"></div>
            </div>
            </div>
          </div>
          </form>';
      }
      else{
        $row = $controller->run("getRoomPlanFromID",$_GET['roomID']);
        
        $message = $message.'<h2>Reset the following for Room ID: '.$row[0]['roomID'].' to empty values?</h2><br><br>';
        $message = $message.'<form action="?" method="post">';
        $message = $message.'<h4>Movie ID: '.$row[0]['movieID'].'</h4>';
        $message = $message.'<h4>Rows: '.$row[0]['rows'].'</h4>';
        $message = $message.'<h4>Columns: '.$row[0]['columns'].'</h4>';
        $message = $message.'<h4>Capacity: '.$row[0]['capacity'].'</h4>';
        $message = $message.'<input type="hidden" name="roomID" value="'.$row[0]['roomID'].'" ><br><br>';
        $message = $message.'<input type="submit" name="submit" value="reset">';
        $message = $message.'</form>';
        
      }


      
    }
    else{
      if($_POST['submit'] == "edit"){
        $roomID = $_POST['roomID'];
        $tempmovieID = $_POST['movieID'];
        $rows = $_POST['rows'];
        $columns = $_POST['columns'];
        $capacity = $rows * $columns;
        $movieID = $controller -> run("escapeString",$tempmovieID);

        $result = $controller -> run("updateRoomPlan",$roomID,$movieID,$rows,$columns,$capacity);
        if($result){
          $check = $controller -> run("getRoomPlanFromID",$roomID);

          if($check[0]['movieID'] == $movieID && $check[0]['rows'] == $rows && $check[0]['columns'] == $columns && $check[0]['capacity'] == $capacity){
            $message = $message.'Update successful';
          }
          else{
            $message = $message.'Update failed';
          }
        }
        else{
          $message = $message.'Query unsuccessful';

        }
        


      }
      else{
        $roomID = $_POST['roomID'];
        $result = $controller -> run("resetRoomPlan",$roomID);

        if($result){
          $check = $controller -> run("getRoomPlanFromID",$roomID);

          if($check[0]['movieID'] == '' && $check[0]['rows'] == '0' && $check[0]['columns'] == '0' && $check[0]['capacity'] == '0'){
            $message = $message.'Reset successful';
          }
          else{
            $message = $message.'Reset failed';
          }
        }
        else{
          $message = $message.'Query unsuccessful';
        }
        
      }

      
    }
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manager Edit Show</title>
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
    
    <body><div id="content">
    <h2>Edit Show</h2>
    </div>'
    .$message.
    ' </body>
    </html>';

  }
}

$display = new EditShow();
$display -> display();
?>
