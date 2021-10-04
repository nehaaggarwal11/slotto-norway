<?php

session_start();
if (isset($_SESSION["AdminUserId"]) ) {
	header("Location: index.php?page=templates");
	die();
}

?>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Email Newsletter Builder </title>

    <!-- Bootstrap -->
    <link href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>


        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form>
                        <h1>Login</h1>
                        <div>
                            <input id="login-username" type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input id="login-password" type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <div>
                            <a class="btn btn-default submit" id="btn-login" >Log in</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">


                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-envelope"></i> Bal - Email Newsletter Builder </h1>
                                <p>©2016 All Rights Reserved.</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>


        </div>
    </div>

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>
