<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <title>Report</title>
</head>
<body>
<br />
         <div class="container">  
              <h4 align="center"> REPORT </h4><br />  
              <div class="table-responsive">  
                  <div class="col-md-12" align="right">
                   <form method="post">  
                        <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                   </form>  
                   </div>
                   <br/>
                   <br/>
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