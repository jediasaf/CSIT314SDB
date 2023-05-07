<?php

class EditMovie{
  function display(){
    include ("ManagerNavbar.php");
    include("dbFunctions.php");
    $controller = new controller();

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
      $movieid = $_GET['movieid'];
      if($_GET['action'] == "edit"){
        $result = $controller->run("getMovieFromID",$movieid);
        $message = '<form action="?" method="POST" class="contact-form">
          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Movie ID: </label>
              <input type="text" name="movieID" value="'.$result[0]['movieID'].'" class="form-control" readonly>
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Movie Title: </label>
              <input type="text" name="movieTitle" value="'.$result[0]['movieTitle'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Genre: </label>
              <input type="text" name="genres" value="'.$result[0]['genres'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Director Name: </label>
              <input type="text" name="directorName" value="'.$result[0]['directorName'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block textarea">
              <label for="">Description: </label>
              <textarea rows="3" name="description" type="text" class="form-control">'.$result[0]['description'].'</textarea>
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Duration: </label>
              <input type="number" name="duration" value="'.$result[0]['duration'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Actor 1: </label>
              <input type="text" name="actor_1_name" value="'.$result[0]['actor_1_name'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Actor 2: </label>
              <input type="text" name="actor_2_name" value="'.$result[0]['actor_2_name'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Actor 3: </label>
              <input type="text" name="actor_3_name" value="'.$result[0]['actor_3_name'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Country: </label>
              <input type="text" name="country" value="'.$result[0]['country'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Classification Rating: </label>
              <input type="text" name="classificationRating" value="'.$result[0]['classificationRating'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Year Released: </label>
              <input type="text" name="yearReleased" value="'.$result[0]['yearReleased'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
            <div class="input-block">
              <label for="">Rating: </label>
              <input type="text" name="rantings" value="'.$result[0]['rantings'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
          <div class="input-block">
              <label for="">Trailer Link: </label>
              <input type = "text" name="trailerLink" value="'.$result[0]['trailerLink'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
          <div class="input-block">
              <label for="">Movie Picture: </label>
              <input type = "text" name="moviePicName" value="'.$result[0]['moviePicName'].'" class="form-control">
            </div>
          </div>

          <div class="col-sm-5">
          <div class="input-block">
              <label for="">Availability: </label>
              <input type = "text" name="availability" value="'.$result[0]['availability'].'" class="form-control">
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
          </form>  ';
      }


      else if($_GET['action'] == "delete"){
        $result = $controller->run("getMovieFromID",$movieid);
        $message =  '<form action="?" method="POST">';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Movie ID                     : '.$result[0]['movieID'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Movie Title                 : '.$result[0]['movieTitle'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Genre                        : '.$result[0]['genres'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Director Name           : '.$result[0]['directorName'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Description                : '.$result[0]['description'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Duration                    : '.$result[0]['duration'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Actor 1                      : '.$result[0]['actor_1_name'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Actor 2                      : '.$result[0]['actor_2_name'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Actor 3                      : '.$result[0]['actor_3_name'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Country                     : '.$result[0]['country'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Classification Rating : '.$result[0]['classificationRating'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Year Released          : '.$result[0]['yearReleased'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Ratings                     : '.$result[0]['rantings'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Trailer Link                : '.$result[0]['trailerLink'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Movie Pic Name       : '.$result[0]['moviePicName'].'</h4>';
        $message = $message.'<h4 style="text-align: left; white-space: pre;">Availability                : '.$result[0]['availability'].'</h4>';



        $message = $message.'<input type="hidden" name="movieID" value="'.$result[0]['movieID'].'" >';
        $message = $message.'<input type="submit" name="submit" value="delete">';
        $message = $message.'</form>';


      }
      
    }






    else if($_SERVER['REQUEST_METHOD'] === 'POST'){
      


      if($_POST['submit'] == "edit"){
        $movieID = $_POST['movieID'];
        $movieTitle = $_POST['movieTitle'];
        $genres = $_POST['genres'];
        $directorName = $_POST['directorName'];
        $description = $_POST['description'];
        $duration = $_POST['duration'];
        $actor_1_name = $_POST['actor_1_name'];
        $actor_2_name = $_POST['actor_2_name'];
        $actor_3_name = $_POST['actor_3_name'];
        $country = $_POST['country'];
        $classificationRating = $_POST['classificationRating'];
        $yearReleased = $_POST['yearReleased'];
        $rantings = $_POST['rantings'];
        $trailerLink = $_POST['trailerLink'];
        $moviePicName = $_POST['moviePicName'];
        $availability = $_POST['availability'];

        $changeddescription = $controller->run("escapeString",$description);

        $result = $controller->run("updateMovie",$movieID,$movieTitle,$genres,$directorName,$changeddescription,$duration,$actor_1_name,$actor_2_name,$actor_3_name,$country,
        $classificationRating,$yearReleased,$rantings,$trailerLink,$moviePicName,$availability);

        if($result){
          /*
          echo'<h1>'.
          $movieID.'<br>'.
          $movieTitle .'<br>'.
          $genres .'<br>'.
          $directorName .'<br>'.
          $description .'<br>'.
          $duration .'<br>'.
          $actor_1_name .'<br>'.
          $actor_2_name .'<br>'.
          $actor_3_name .'<br>'.
          $country .'<br>'.
          $classificationRating.'<br>'. 
          $yearReleased .'<br>'.
          $rantings.'<br>'.
          $trailerLink .'<br>'.
          $moviePicName .'<br>'.
          $availability .'<br></h1>';*/



          $check = $controller -> run("getMovieFromID",$movieID);
          if($check[0]['movieID'] == $movieID && $check[0]['movieTitle'] == $movieTitle && $check[0]['genres'] == $genres && $check[0]['directorName'] == $directorName && 
          $check[0]['description'] == $description && $check[0]['duration'] == $duration && $check[0]['actor_1_name'] == $actor_1_name && $check[0]['actor_2_name'] == $actor_2_name && 
          $check[0]['actor_3_name'] == $actor_3_name && $check[0]['country'] == $country && $check[0]['classificationRating'] == $classificationRating && 
          $check[0]['yearReleased'] == $yearReleased && $check[0]['rantings'] == $rantings && $check[0]['trailerLink'] == $trailerLink && 
          $check[0]['moviePicName'] == $moviePicName && $check[0]['availability'] == $availability){
          

            $message = 'Update Successful';
          }
          else{
            $message = 'Record Not Updated';
          }
        }
        else{
          $message = 'Update not successful';
        }

        $message = $message.'<meta http-equiv="refresh" content="5; url='.'ManageMovies.php'.'" />';
      }


      else if($_POST['submit'] == "delete"){
        $movieID = $_POST['movieID'];
        $result = $controller->run("deleteMovie",$movieID);
        if($result){
          $check = $controller->run("confirmMovieDeletion",$movieID);
          if($check == 0){
            $message = 'Delete Successful';
          }
          else{
            $message = 'Delete failed';
          }
        }
        else{
          $message = 'Delete Unsuccessful';
        }


        $message = $message.'<meta http-equiv="refresh" content="5; url='.'ManageMovies.php'.'" />';
      }
    
    }
    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manager Edit Movie </title>
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
    
        <center>
            <div id="content">
        <h2>Edit Movie</h2>
        </div>'.
     $message.'
           
    </body>
    </html>';

  }
}


$display = new EditMovie();
$display->display();

?>

