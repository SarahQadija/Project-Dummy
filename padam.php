<?php
require 'conn.php';

$idPark = $_GET['idPark'];
$sql = "DELETE FROM car_park WHERE idPark = $idPark";
$conn->query($sql);

header('location: info.php#contact');