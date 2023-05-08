<?php

class EditUserProfile{
    function display(){
      include ("AdminNavBar.php");
      include ("dbFunctions.php");
      $controller = new controller ();
      $message = "";
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
          $action = $_GET['action'];
          $username = $_GET['username'];
        }

        $result = $controller->run("retrieveUser", $username);
        if($action == "edit"){
          $message = '<form action="?" class="contact-form" method="POST">
          <div class="col-sm-5">
             <div class="input-block">
               <label for="">Username: </label>
               <input type="text" name="username" value="'.$result[0]['username'].'" class="form-control" readonly>
             </div>
           </div>
         
         <div class="col-sm-5">
             <div class="input-block">
               <label for="">Phone Number: </label>
               <input type="text" name="phone" value="'.$result[0]['phoneNo'].'" class="form-control">
             </div>
           </div>
         
          <div class="col-sm-5">
             <div class="input-block">
               <label for="">Email: </label>
               <input type="text" name="email" value="'.$result[0]['email'].'" class="form-control">
             </div>
           </div>
         
         <div class="col-sm-5">
             <div class="input-block textarea">
               <label for="">Genre Preference:'.$result[0]['genrePref'].'</label>
               <select name="movieid" value="'.$result[0]['genrePref'].'" class="form-control">';
                
                 
                 for($i = 0; $i < sizeof($movie);$i++){
                   $message = $message.'<option value="'.$movie[$i]['movieID'].'">';
                   $message = $message. $movie[$i]['movieID'];
                   $message = $message. '</option>';
                 }
                 
                 $message = $message.'
               </select>
             </div>
           </div>
         
          <div class="col-sm-5">
             <div class="input-block">
               <label for="">No of Tickets: </label>
               <input type="text" name="nooftickets" value="'.$result[0]['noOfTickets'].'" class="form-control">
             </div>
           </div>
       
           <div class="col-sm-5">
             <div class="input-block">
               <label for="">Phone Number: </label>
               <input type="number" name="phonenum" value="'.$result[0]['phoneNo'].'" class="form-control">
             </div>
           </div>
         
          <div class="col-sm-5">
             <div class="input-block">
               <label for="">Claim: </label>
               <input type="text" name="isclaimed" value="'.$result[0]['isClaimed'].'" class="form-control">
             </div>
           </div>
          
           <div class="col-sm-5">
             <div class="input-block">
               <label for="">View Details: </label>
               <input type="text" name="seats" value="'.$result[0]['seats'].'" class="form-control">
             </div>
           </div>
             
           <div class="col-md-12">
           <div class="form-group">
           <input type="submit" name="submit" value="Edit" class="btn btn-primary">
           <div class="submitting"></div>
           </div>
           </div>
         </div>
       </form> ';
        }
    }
}

$display = new EditUserProfile();
$display->display();
?>