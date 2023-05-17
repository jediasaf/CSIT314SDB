<?php

class EditFood{
  function display(){
    include ("navbar.php");
    include ("dbFunctions.php");
    $message = '';
    $controller = new controller();
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
      $foodName = $_GET['foodName'];
      $row = $controller->run("getFoodFromName",$foodName);

      if($_GET['action'] == "edit"){
        #$foodName = $_GET['foodName'];
        #$message = '<h1>'.$foodName.'</h1>';
        
        $message = ' <div class="form">
        
            <div class="row">
                <div class="col"><form action="?" method="POST" class="contact-form">
        <div class="col-sm-5">
           <div class="input-block">
             <label for="">Food Name: </label>
             <input type="text" name="foodName" value="'.$row[0]['foodName'].'" class="form-control">
           </div>
         </div>
       
       <div class="col-sm-5">
           <div class="input-block">
             <label for="">Quantity: </label>
             <input type="text" name="quantity" value="'.$row[0]['quantity'].'" class="form-control">
           </div>
         </div>
       
        <div class="col-sm-5">
         <div class="input-block">
             <label for="">Food Picture Name: (only .jpg files)</label>
             <input type="text" name="foodPicName" value="'.$row[0]['foodPicName'].'" class="form-control"/>
           </div>
         </div>
       
     <div class="col-sm-5">
       <div class="input-block">
         <label for="">Status: (Current Status = '.$row[0]['status'].')</label>
         <div>';

        if($row[0]['status'] == 1){
          $message .= '<label>
          <input type="radio" name="status" value="1" checked> 1
        </label>
        <label>
          <input type="radio" name="status" value="0"> 0
        </label>';
        }
        else{
          $message .= '<label>
          <input type="radio" name="status" value="1"> 1
        </label>
        <label>
          <input type="radio" name="status" value="0" checked> 0
        </label>';
        }


           $message .='
         </div>
       </div>
     </div>
     
       
           
         <div class="col-md-12">
         <div class="form-group">
         <input type="submit" name="submit" value="edit" class="btn btn-primary">
         <div class="submitting"></div>
         </div>
         </div>
       </div>
     </form>   ';

      }
      else if($_GET['action'] == "delete"){
        $message =  ' <div class="form">
        
            <div class="row">
                <div class="col">
                <form action="?" method="POST">';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Food Name        : '.$row[0]['foodName'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Quantity             : '.$row[0]['quantity'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">foodPicName    : '.$row[0]['foodPicName'].'</h4>';
    $message = $message.'<h4 style="text-align: left; white-space: pre;">Status                 : '.$row[0]['status'].'</h4>';
    $message = $message.'<input type="hidden" name="foodName" value="'.$row[0]['foodName'].'" >';
    $message = $message.'<input type="submit" name="submit" value="delete">';
    $message = $message.'</form>';
      }
      

      
    }
    else if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $foodName = $_POST['foodName'];
      $foodName = str_replace("_"," ",$foodName);
      if($_POST['submit'] == "edit"){
        $quantity = $_POST['quantity'];
        $foodPicName = $_POST['foodPicName'];
        $status = $_POST['status'];

        $result = $controller -> run("updateFood",$foodName,$quantity,$foodPicName,$status,$_SESSION['username'],date("Y-m-d"));

        if($result){
          $check = $controller -> run("getFoodFromName",$foodName);

          if($check[0]['foodName'] == $foodName && $check[0]['quantity'] == $quantity && $check[0]['foodPicName'] == $foodPicName && $check[0]['status'] == $status ){
            $message .= '<p style="colour:white">Update Successful</p>';
          }
          else{
            $message .= '<p style="colour:white">Update Failed</p>';
          }
          $message .= '<meta http-equiv="refresh" content="5;URL='.'ManageFood.php'.'" />';


        }
        else{
          $message .= '<p style="colour:white">Query Failed</p>';
        }
      }

      else if($_POST['submit'] == "delete"){
        #$message = $message.$foodName;
        
        $result = $controller -> run("deleteFood",$foodName);

        if($result){
          #$message .= "Query Passed";
          $check = $controller -> run("confirmDeleteFood",$foodName);

          if($check == 0){
            $message .= '<p style="colour:white">Delete Successful</p>';
            
          }
          else {
            $message .= '<p style="colour:white">Delete Failed</p>';

          }
          $message .= '<meta http-equiv="refresh" content="5;URL='.'ManageFood.php'.'" />';

        }
        else{
          $message .= '<p style="colour:white">Query Failed</p>';
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
<title>Manager Edit Food</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
@import url("CSS/AllUsersCSS.css");
</style>
</head>

<body>
		<center>
        <div id="content">
		<h2>Edit Food</h2>
		</div><div class="row">
    <div class="col">';
 
   echo $message; 
   echo'  
   </div>
   </div>
</body>
</html>
    ';
  }
}


$display = new EditFood();
$display -> display();
?>
