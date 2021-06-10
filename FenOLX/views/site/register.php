<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo APPLICATION_PATH?>views/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <form class="container" action="<?php echo APPLICATION_PATH?>index.php" method="post">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign up for MUFC OLX <small>It's free!</small></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <input type="username" name="username" id="username" class="form-control input-sm" placeholder="Username">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="user_role"  class="form-control input-sm" placeholder="Role">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" name="sign_up" value="Sign Up"/>
    <a href="<?php echo APPLICATION_PATH?>index.php?login=true">Alredy have a registration?</a>
</form>
</body>
</html>
<style>
    body {
        background-image: url("https://live.staticflickr.com/2877/33823450815_411667305b_b.jpg") ;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
</style>