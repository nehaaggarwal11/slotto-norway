<?php

session_start();

if (isset($_SESSION["UserId"]) ) {
	header("Location: index.php");
	die();
}

?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
      <meta name="description" lang="en" content=" Email Newsletter Builder - This is a drag & drop email builder plugin based on Jquery and PHP for developer. You can simply integrate this script in your web project and create custom email template with drag & drop">
      <meta name="keywords" lang="en" content="bounce, bulk mailer, campaign, campaign email, campaign monitor, drag & drop email builder, drag & drop email editor, mailchimp, mailer, newsletter, newsletter email, responsive, retina ready, subscriptions, templates">
      <meta name="robots" content="index, follow">
      <title>Login -  Email Builder</title>

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/login.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body >
    <div class="container">
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info" >
              <div class="panel-heading">
                  <div class="panel-title">Login</div>
              </div>
              <div style="padding-top:30px" class="panel-body" >
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                  <form id="loginform" class="form-horizontal" role="form">
                      <div style="margin-bottom: 25px" class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input id="login-username" type="text" class="form-control" name="username" placeholder="username">
                      </div>
                      <div style="margin-bottom: 25px" class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input id="login-password" type="password" class="form-control" name="password" placeholder="password" >
                      </div>
                      <div class="input-group">
                                <div class="checkbox">
                                  <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                  </label>
                                </div>
                      </div>


                      <div style="margin-top:10px" class="form-group">
                              <!-- Button -->

                              <div class="col-sm-12 controls">
                                <a id="btn-login" href="#" class="btn btn-primary btn-block">Login  </a>
                              </div>
                      </div>
                      </form>
                  </div>
              </div>
  </div>
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>

  </body>
</html>
