<?php
//include('connection.php');
$con = mysqli_connect("localhost","root","","pr_parking");

$parkID = $_GET['idPark'];
$floorNum = $_GET['floor_number'];
$status = $_GET['status'];

$query_insert = "INSERT INTO car_park (floor_number_park, lot_number, status_parking) 
                 VALUES ('$floorNum', '$lotNum', '$status')";

$result = $con -> query($query_insert);

echo "<br> Insertion Success! <br>";

?>