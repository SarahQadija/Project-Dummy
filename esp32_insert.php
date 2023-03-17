<?php
//include('connection.php');
$con = mysqli_connect("localhost","root","","pr_parking");

$parkID = $_GET['id'];
$floorNum = $_GET['floor_number_park'];
$lotNum = $_GET['lot_number'];
$status = $_GET['status_parking'];

$query_insert = "INSERT INTO report (floor_number_park, lot_number, status_parking) 
                 VALUES ('$floorNum', '$lotNum', '$status')";

$result = $con -> query($query_insert);

echo "<br> Insertion Success! <br>";

?>