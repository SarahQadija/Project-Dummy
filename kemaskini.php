<?php
require 'conn.php';

$idPark = $_POST['idPark'];
$floor_number = $_POST['floor_number'];
$status = $_POST['status'];

$sql = "UPDATE car_park
SET floor_number = '$floor_number', status = '$status'
WHERE idPark = $idPark";
$conn->query($sql);

header('location: info.php#contact');