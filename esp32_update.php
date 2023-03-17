<?php
//include('connection.php');
$con = mysqli_connect("localhost", "root", "", "pr_parking");

$parkID = $_GET['id'];
$floorNum = $_GET['floor_number_park'];
$lotNum = $_GET['lot_number'];
$status = $_GET['status_parking'];

echo "$parkID, $floorNum, $lotNum, $status";

$query_update = "UPDATE report SET floor_number_park='$floorNum', lot_number='$lotNum',
                    status_parking='$status' WHERE pid='$plantID'"; //nk panggil as apa sedangkn kita save kejadian tu wktu tu sepatutnya ada lgi satu table utk status parking saja.

$result = $con->query($query_update);

echo "<br> Update Success! <br>";
