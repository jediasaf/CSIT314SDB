<?php
include "dbFunctions.php";
$controller = new controller();
$result = $controller->run("retrieveUserDB");

if($result){
    while($row = $result->fetch_all(MYSQLI_BOTH)) {
        echo "<tr><td>".$row["username"]."</td><td>".$row["hashedPassw"]."</td><td>".$row["phoneNo"]."</td><td>".$row["email"]."</td><td>".$row["age"]."</td><td>".$row["genrePref"]."</td><td>".$row["loyaltyPts"]."</td><td>".$row["roles"]."</td><td>".$row["seatPref"]."</td><td>
        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a> 
        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> 
        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
    </td></tr>";
    }
} else {
    echo "0 results";
}

?>