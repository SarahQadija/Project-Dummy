<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "pr_parking");
    $sql = "SELECT * FROM report ORDER BY idReport";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output = '<tr>
        <td>' . $row["idReport"] . '</td>
        <td>' . $row["floor_number_park"] . '</td>
        <td>' . $row["lot_number"] . '</td>
        <td>' . $row["status_parking"] . '</td>
        <td>' . $row["time"] . '</td>
        <td>' . $row["date"] . '</td>
        <td>' . $row["summary"] . '</td>
        </tr>
        ';
    }
    return $output;
}
if (isset($_POST["generate_pdf"])) {
    require_once('tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("REPORT");
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 11);
    $obj_pdf->AddPage();
    $content = '';
    $content .= '  
    <h4 align="center">Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br /> 
    <table border="1" cellspacing="0" cellpadding="3">  
         <tr>  
              <th width="5%">Id</th>  
              <th width="30%">Name</th>  
              <th width="15%">Age</th>  
              <th width="50%">Email</th>  
         </tr>  
    ';
    $content .= fetch_data();
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf', 'I');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>REPORT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="projek.css">
</head>

<body class="background">
    <div>
        <img src="gambar/logo.png" width="200px" height="200px">
    </div>
    <ul>
        <li><a href="senarai.php">Display Parking</a></li>
        <li><a href="info.php">Info Parking</a></li>
        <li><a href="print.php">Report Monthly Parking</a></li>
        <li style="float:right" class="active"><a href="login_html.php">Logout</a></li>
    </ul>
    <p>
    <div class="container">
        <h1 align="center">REPORT</h1>
        <div class="table-responsive">
            <div class="col-md-12" align="right">
                <form method="post">
                    <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
                    <input type="submit" name="generate_print" class="btn btn-success" value="Print" />
                </form>
            </div>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th width="5%">Id</th>
                    <th width="30%">Floor</th>
                    <th width="15%">lotNumber</th>
                    <th width="50%">status</th>
                    <th width="50%">time</th>
                    <th width="date">status</th>
                    <th width="50%">summary</th>
                </tr>
                <?php
                echo fetch_data();
                ?>
            </table>
        </div>
    </div>
</body>

</html>
