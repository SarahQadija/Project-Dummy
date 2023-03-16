<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="projek.css">
</head>

<body class="background">
    <div>
        <img src="gambar/logo.png" width="200px" height="200px">
    </div>
    <ul>
        <li><a href="senarai.php">Display Parking</a></li>
        <li><a href="edit.php">Info Parking</a></li>
        <li><a href="#contact">Report Monthly Parking</a></li>
        <li style="float:right"><a class="active">Logout</a></li>
    </ul>
    <table border="1">
        <tr>
            <th>BIL++</th>
            <th>FLOOR NUMBER</th>
            <th>LOT NUMBER</th>
            <th>STATUS</th>
            <th>TIME</th>
            <th>DATE</th>
        </tr>
        <tr>
            <td>1.</td>
            <td>B1</td>
            <td>10</td>
            <td>available</td>
            <td>10:00</td>
            <td>2023/03/25</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>B2</td>
            <td>15</td>
            <td>unavailable</td>
            <td>10:30</td>
            <td>2023/03/25</td>
        </tr>
    </table>
</body>

</html>