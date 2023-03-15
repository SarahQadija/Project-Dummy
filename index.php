<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Interface Using Bootstrap in PHP</title>
    <!-- Include the Bootstrap CSS file -->
    <link rel="stylesheet" href="project.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <label for="username" class="form-control-label">USERNAME</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-control-label">PASSWORD</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-6 login-btm login-text">
                                    </div>
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
</body>

</html>