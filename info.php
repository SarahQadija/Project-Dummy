<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEKAN RABU PARK</title>
    <link rel="icon" href="gambar/pekanrabu.jpg">
    <link rel="stylesheet" href="projek.css">
</head>

<body class="background">
    <div>
        <img src="gambar/logo.png" width="200px" height="200px">
    </div>
    <ul>
        <li><a href="senarai.php">Display Parking</a></li>
        <li><a href="info.php">Info Parking</a></li>
        <li><a href="#contact">Report Monthly Parking</a></li>
        <li style="float:right" class="active"><a href="index.php">Logout</a></li>
    </ul>
    <p>
    <h1>Info Parking</h1>
    <table border="1" class="header">
        <tr>
            <th>BIL++</th>
            <th>FLOOR NUMBER</th>
            <th>STATUS</th>
            <th>TINDAKAN</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td align="center"><a href="kemaskini.php" target="_blank" class="home">Edit</a>
                <a href="padam.php" target="_blank" class="home">Delete</a>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td align="center"><a href="kemaskini.php" target="_blank" class="home">Edit</a>
                <a href="padam.php" target="_blank" class="home">Delete</a>
            </td>
        </tr>
    </table>

    <?php
    $idPark = $_GET['edit'];
    $sql = "SELECT*FROM car_park WHERE idPark=$idPark";
    $row = $conn->query($sql)->fetch_object();
    ?>
    <form action="kemaskini.php" method="post">
        <input type="hidden" name="idPark" value="<?php echo $row->idPark; ?>">
        <fieldset>
            <legend>Edit Parking</legend>
            <table>
                <tr>
                    <td>FLOOR NUMBER</td>
                    <td><input type="text" name="floor_number" require value="<?php echo $row->floor_number; ?>"></td>
                </tr>
                <tr>
                    <td>STATUS</td>
                    <td><input type="boolval" name="status" required value="<?php echo $row->status; ?>"></td>
                </tr>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">BATAL</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <p>
    <div>
        <a href="index2.php" target="_blank" class="home">HOME</a>
    </div>
</body>

</html>