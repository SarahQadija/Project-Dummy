<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// If the user is logged in, show the dashboard page
echo "Welcome " . $_SESSION['username'] . "!";
?>