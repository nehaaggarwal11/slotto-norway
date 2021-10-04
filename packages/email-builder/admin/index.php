<?php
include_once 'includes/db.class.php';

session_start();

if (!isset($_SESSION['AdminUserId'])) {
  header("Location: login.php");
  die();
}
$db = new Db();

$userName=$db->getUserName($_SESSION["AdminUserId"]);


$page='';
if (isset($_GET['page'])) {
  $page=$_GET['page'];
}


$pageName='';
$pageTitle='';
 switch ($page) {
   case 'users':
     $pageName= 'users.php';
     $pageTitle='Users';
     break;

   case 'users-insert-form':
       $pageName= 'users-insert-form.php';
       $pageTitle='Users';
       break;

   case 'users-edit-form':
       $pageName= 'users-edit-form.php';
       $pageTitle='Users';
       break;


  case 'blocks':
    $pageName= 'blocks.php';
    $pageTitle='Blocks';
  break;

  case 'block-insert-form':
    $pageName= 'block-insert-form.php';
    $pageTitle='Add template block';
   break;

   case 'block-edit-form':
     $pageName= 'block-edit-form.php';
     $pageTitle='Edit template block';
    break;



   case 'templates':
   default:
     $pageName= 'templates.php';
     $pageTitle='Templates';
     break;

 }



 ?>


 <html lang="en">

 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- Meta, title, CSS, favicons, etc. -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title><?php echo $pageTitle; ?> | Email Newsletter Builder</title>

     <!-- Bootstrap -->
     <link href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font Awesome -->
     <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <!-- NProgress -->
     <link href="assets/vendor/nprogress/nprogress.css" rel="stylesheet">
     <!-- iCheck -->
     <link href="assets/vendor/iCheck/skins/flat/green.css" rel="stylesheet">

     <!-- Datatables -->
     <link href="assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
     <!-- <link href="assets/vendor/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet"> -->

     <!-- Custom Theme Style -->
     <link href="assets/css/custom.css" rel="stylesheet">


     <!-- jQuery -->
     <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
     <!-- Bootstrap -->
     <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

     <!-- NProgress -->
     <script src="assets/vendor/nprogress/nprogress.js"></script>

     <!-- Datatables -->
     <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

     <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

     <!-- iCheck -->
     <script src="assets/vendor/iCheck/icheck.min.js"></script>


 </head>

 <body class="nav-md">
     <div class="container body">
         <div class="main_container">
             <div class="col-md-3 left_col">
                 <div class="left_col scroll-view">
                     <div class="navbar nav_title" style="border: 0;">
                         <a href="../admin" class="site_title"><i class="fa fa-envelope"></i> <span>Email Builder</span></a>
                     </div>

                     <div class="clearfix"></div>

                     <!-- menu profile quick info -->
                     <div class="profile">
                         <div class="profile_pic">
                             <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
                         </div>
                         <div class="profile_info">
                             <span>Welcome,</span>
                             <h2><?php echo $userName; ?></h2>
                         </div>
                     </div>
                     <!-- /menu profile quick info -->

                     <br />

                     <!-- sidebar menu -->
                     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                         <div class="menu_section">
                             <h3></h3>
                             <ul class="nav side-menu">
                                 <li>&nbsp;</li>
                                 <li ><a href="index.php?page=templates"><i class="fa fa-file-text"></i> Templates </a></li>
                                 <li><a href="index.php?page=users"> <i class="fa fa-users"></i> Users </a></li>
                                 <li><a href="index.php?page=blocks"> <i class="fa fa-th"></i> Blocks </a></li>

                             </ul>
                         </div>


                     </div>
                     <!-- /sidebar menu -->


                 </div>
             </div>

             <!-- top navigation -->
             <div class="top_nav">
                 <div class="nav_menu">
                     <nav>
                         <div class="nav toggle">
                             <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                         </div>

                         <ul class="nav navbar-nav navbar-right">
                             <li class="">
                                 <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                     <img src="assets/images/img.jpg" alt=""><?php echo $userName; ?>
                                     <span class=" fa fa-angle-down"></span>
                                 </a>
                                 <ul class="dropdown-menu dropdown-usermenu pull-right">

                                     <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                 </ul>
                             </li>
                             <li>
                                 <a href="<?php echo SITE_URL; ?>">Email Builder</a>
                             </li>
                         </ul>
                     </nav>
                 </div>
             </div>
             <!-- /top navigation -->

             <?php include $pageName;  ?>

             <!-- footer content -->
             <footer class="footer_fixed">
                 <div class="pull-right">
                   Email Newsletter Builder
                 </div>
                 <div class="clearfix"></div>
             </footer>
             <!-- /footer content -->
         </div>
     </div>


     <!-- Custom Theme Scripts -->
     <script src="assets/js/custom.min.js"></script>
   <script src="assets/js/admin.js?v=3"></script>
 </body>

 </html>
