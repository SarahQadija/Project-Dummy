<?php
 $conn = mysqli_connect("localhost","root","","pr_parking");
 
 if(!$conn)
 {
    die('Connection Error');
 }