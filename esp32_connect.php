<?php
    $host = "localhost"; // database hostname
    $user = "root"; // database username
    $password = ""; // database password
    $database = "pr_parking"; // database name

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
