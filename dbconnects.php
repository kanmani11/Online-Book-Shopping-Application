<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "bookstore";
 
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

     if($conn=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>