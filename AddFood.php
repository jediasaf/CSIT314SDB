<?php
class AddFood{
  function display(){
    include ("navbar.php");
    include ("dbFunctions.php");
    $controller = new controller();
    $message = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $foodName = $_POST['foodName'];
      $quantity = $_POST['quantity'];
      $foodPicName = $_POST['foodPicName'];
      $status = $_POST['status'];

      $result = $controller -> run("addFood",$foodName, $quantity, $foodPicName, $status,$_SESSION['username'],date("Y-m-d"));

      if($result){
        $rowcount = $controller -> run("countRowFood",$foodName);
        if($rowcount == 1){
          $message .= 'Add Successful';
        }
        else{
          $message .= 'Add Unsuccessful';

        }
      }
      else{
        $message .= 'Query Unsuccessful';
      }
      
      $message .= '<meta http-equiv="refresh" content="5;URL='.'AddFood.php'.'" />';
      $message .= '';
    }
    else{
      $message .= '<form action="?" method="Post" class="contact-form">
      <div class="col-sm-5">
         <div class="input-block">
           <label for="">Food Name: </label>
           <input type="text" name="foodName" class="form-control">
         </div>
       </div>
     
     <div class="col-sm-5">
         <div class="input-block">
           <label for="">Quantity: </label>
           <input type="text" name="quantity" class="form-control">
         </div>
       </div>
     
      <div class="col-sm-5">
       <div class="input-block">
           <label for="">Food Picture: (.jpg files only)</label>
           <input type = "text" name = "foodPicName" class="form-control" />
         </div>
       </div>
     
        
         <div class="col-sm-5">
     <div class="input-block">
       <label for="">Status: </label>
       <div>
         <label>
           <input type="radio" name="status" value="1"> 1
         </label>
         <label>
           <input type="radio" name="status" value="0"> 0
         </label>
       </div>
     </div>
   </div>
     
         
       <div class="col-md-12">
       <div class="form-group">
       <input type="submit" value="Add New Food" class="btn btn-primary">
       <div class="submitting"></div>
       </div>
       </div>
     
   </form>';
    }








    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manager Add Food</title>
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
		<h2>Add New <span style="color:#F8F8F8;"> Food</span></h2>
		</div>
 <div class="form">
          <div class="row">
                <div class="col">';
                  echo $message;
  echo'
</div>      
</body>
</html>
    ';



  }
}


$display = new AddFood();
$display -> display();



?>

