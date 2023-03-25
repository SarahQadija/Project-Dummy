<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>smart-parking</title>
    <link rel="icon" href="assets/img/ny.jpg" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="dataTables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="dataTables/js/reports-plugins/buttons.dataTables.min.css" />
</head>

<body>
    <div class="container">
        <h4 align="center">REPORT</h4><br />
        <div class="table-responsive">
            <div class="col-md-12" align="right">
                <form method="post">
                    <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
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
            </table>
        </div>
    </div>

</body>

</html>