<?php
class AddMovie{
  function display(){
    include ("ManagerNavbar.php");
    include ("dbFunctions.php");
    $controller = new controller();
    $message ="";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
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

      $changedmovieID = $controller->run("escapeString",$movieID);
      $changedmovieTitle = $controller->run("escapeString",$movieTitle);
      $changeddescription = $controller->run("escapeString",$description);
      $changedmoviePicName= $controller->run("escapeString",$moviePicName);

      $result = $controller -> run("addMovie",$changedmovieID,$changedmovieTitle,$genres,$directorName,$changeddescription,$duration,$actor_1_name,$actor_2_name,$actor_3_name,
      $country,$classificationRating,$yearReleased,$rantings,$trailerLink,$changedmoviePicName,$availability);

      $row = $controller->run("getMovieFromID",$changedmovieID);
 /*
      $message = $movieID.'<br>'.$movieTitle.'<br>'.$genres.'<br>'.$directorName.'<br>'.$description.'<br>'.$duration.'<br>'.$actor_1_name.'<br>'.$actor_2_name.'<br>'.$actor_3_name
      .'<br>'.$country.'<br>'.$classificationRating.'<br>'.$yearReleased.'<br>'.$rantings.'<br>'.$trailerLink.'<br>'.$moviePicName.'<br>'.$availability.'<br><br><br>';

     
      for($i = 0; $i < sizeof($row[0]); $i ++){
        $message = $message.$row[0][$i];
      }
    
      
      $message = $message.$row[0]['movieID'].'<br>'.$row[0]['movieTitle'].'<br>'.$row[0]['genres'].'<br>'.$row[0]['directorName'].'<br>'.
      $row[0]['description'].'<br>'.$row[0]['duration'].'<br>'.$row[0]['actor_1_name'].'<br>'.$row[0]['actor_2_name'].'<br>'.
      $row[0]['actor_3_name'].'<br>'.$row[0]['country'].'<br>'.$row[0]['classificationRating'].'<br>'.$row[0]['yearReleased'].'<br>'.$row[0]['rantings'].'<br>'
      .$row[0]['trailerLink'].'<br>'.$row[0]['moviePicName'].'<br>'.$row[0]['availability'].'<br>';
        */
    
      if($row[0]['movieID'] == $movieID && 
      $row[0]['movieTitle'] == $movieTitle && 
      $row[0]['genres'] == $genres &&  
      $row[0]['directorName'] == $directorName && 
      $row[0]['description'] == $description && 
      $row[0]['duration'] == $duration && 
      $row[0]['actor_1_name'] == $actor_1_name && 
      $row[0]['actor_2_name'] == $actor_2_name && 
      $row[0]['actor_3_name'] == $actor_3_name && 
      $row[0]['country'] == $country && 
      $row[0]['classificationRating'] == $classificationRating && 
      $row[0]['yearReleased'] == $yearReleased && 
      $row[0]['rantings'] == $rantings && 
      $row[0]['trailerLink'] == $trailerLink && 
      $row[0]['moviePicName'] == $moviePicName && 
      $row[0]['availability'] == $availability){
        $message = $message.'Added Successfully';
      }
      else{
        $message = $message.'Adding Movie Unsuccessful';
      }

    }
    else{
      $message = '<div id="content">
      <h2>Add New Movie</h2>
      </div>
      <form action="?" method="post" class="contact-form">
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Movie ID: </label>
          <input type="text" name="movieID" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Movie Title: </label>
          <input type="text" name="movieTitle" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
      <div class="input-block">
      <label for="genre">Genre: </label>
      <select id="genre" name="genres" class="form-control">
        <option value="Thriller">Thriller</option>
        <option value="Adventure">Adventure</option>
        <option value="Horror">Horror</option>
        <option value="Fantasy">Fantasy</option>
      <option value="Drama">Drama</option>
      <option value="Animation">Animation</option>
      <option value="Comedy">Comedy</option>
      <option value="Crime">Crime</option>
      <option value="Mystery">Mystery</option>
        <option value="Romance">Romance</option>
      <option value="Action">Action</option>
      <option value="Sci-Fi">Sci-Fi</option>
      <option value="Musical">Musical</option>
      </select>
      </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Director: </label>
          <input type="text" name="directorName" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block textarea">
          <label for="">Description: </label>
          <textarea rows="3" type="text" name="description" class="form-control"></textarea>
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Duration: </label>
          <input type="text" name="duration" class="form-control">
        </div>
      </div>	
       
        <div class="col-sm-5">
        <div class="input-block">
          <label for="">Actor 1: </label>
          <input type="text" name="actor_1_name" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Actor 2: </label>
          <input type="text" name="actor_2_name" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Actor 3: </label>
          <input type="text" name="actor_3_name" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Country: </label>
          <input type="text" name="country" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Classification: </label>
          <input type="text" name="classificationRating" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Year Released: </label>
          <input type="text" name="yearReleased" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Rating: </label>
          <input type="text" name="rantings" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
        <div class="input-block">
          <label for="">Trailer Link: </label>
          <input type="text" name="trailerLink" class="form-control">
        </div>
      </div>
      
      <div class="col-sm-5">
      <div class="input-block">
          <label for="">Movie Poster: (must be a png file)</label>
          <input type="text" name="moviePicName" class="form-control" />
        </div>
      </div>
      
      <div class="col-sm-5">
      <div class="input-block">
          <label for="">Availability: </label>
          <select type="text" name="availability" class="form-control">
          <option value="0">0</option>
          <option value="1">1</option>
          </select>
        </div>
      </div>
      
        
      <div class="col-md-12">
      <div class="form-group">
      <input type="submit" value="Add New Movie" class="btn btn-primary">
      <div class="submitting"></div>
      </div>
      </div>
      </div>
      </form>   ';
    }

echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Movie</title>
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
        <center>'.
                $message
    .'</body>
    </html>';
  }
}







$display = new AddMovie();
$display -> display();

?>

