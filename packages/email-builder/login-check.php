<?php

  include_once 'includes/db.class.php';

  $response=array();



  if (!isset($_POST['login']) || is_null($_POST['login'])
  || !isset($_POST['pass']) || is_null($_POST['pass'])) {
    $response['code']=-1;
    $response['message']='Values not be null';
    echo  json_encode($response);
     return;
  }
  $db = new Db();

  $login = $_POST['login'];
  $pass =$_POST['pass'];

   $userId = $db -> loginCheck( $login, sha1($pass));
   if ($userId==-3) {
     $response['code']=-1;
     $response['message']='Database error';
     echo  json_encode($response);
     return;
   }
   if(strlen($userId)<1 || $userId==0){
     $response['code']=-1;
     $response['message']='Check your username and password';
     echo json_encode($response);
     return;
    }
   session_start();
   $_SESSION["UserId"]=$userId;

   $response['code']=0;
   $response['message']='success';
    echo  json_encode($response);


?>
