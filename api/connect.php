<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "voting";

// // Create connection
// $connect = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$connect) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// echo "Connected successfully";


$con = mysqli_connect("localhost", "root", "","voting");
if(!$con){
    die(mysqli_error($con));
}

?>