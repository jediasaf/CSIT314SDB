<?php
class SearchUser{
    function display(){
        echo'<!doctype html>';
        echo'<html>';
        echo'<head>';
        echo'<meta charset="UTF-8">';
        echo'<title>MovieList</title>';
        echo'<style type="text/css">';
        echo'@import url("CSS/MoviePage.css");';
        echo'@import url("CSS/coba.css");';	  
        echo'</style>';
        echo'</head>';
        include("navbar.php");
        include ("dbFunctions.php");
        $controller = new controller ();

        if(isset($_GET['name'])){
            $result = $controller->run("searchUser",$_GET['name']);
            $resultRow = $controller->run("searchUserNum",$_GET['name']);

            if($resultRow > 0){
                echo '<body>
                <table>
                </table>
                </body>';
            }
        }
    }
}
?>