<!DOCTYPE html>
<html lang="en">



    <head>
        <title>Login Interface Using Bootstrap in PHP</title>
        <!-- Include the Bootstrap CSS file -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" name="username" id="username" required><br><br>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password" required><br><br>
                                </div>
                                <input type="submit" name="submit" value="Login">
                            </form>
    </body>
    </html>




