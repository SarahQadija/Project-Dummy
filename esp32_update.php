<?php
//include('connection.php');
$con = mysqli_connect("localhost", "root", "", "pr_parking");

//$idPark = $_GET['idPark'];
$status = $_GET['status'];

echo "$idPark,$status";

$query_update = "UPDATE car_park SET status='$status' WHERE idPark='1'"; //nk panggil as apa sedangkn kita save kejadian tu wktu tu sepatutnya ada lgi satu table utk status parking saja.

$result = $con->query($query_update);

//echo "<br> Update Success! <br>";

