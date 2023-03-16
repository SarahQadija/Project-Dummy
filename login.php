<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pr_parking";
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to check if the user exists
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // User exists, start a session and redirect to dashboard page
    session_start();
    $_SESSION['username'] = $username;
    header("Location: index2.php");
} else {
    // User doesn't exist, show an error message
    echo "Invalid username or password";
}

// Close the database connection
mysqli_close($conn);
?>
