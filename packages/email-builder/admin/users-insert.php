<?php

  include_once 'includes/db.class.php';
  $db = new Db();

  if (!isset($_POST['Login']) || is_null($_POST['Login'])
  || !isset($_POST['Pass']) || is_null($_POST['Pass'])) {
    $response['code']=-1;
    $response['message']='Values not be null';
    echo  json_encode($response);
     return;
  }

  $Login = $_POST['Login'];
  $Pass =$_POST['Pass'];
  $Name = $_POST['Name'];
  $Email =$_POST['Email'];
  $isAdmin = $_POST['isAdmin'];
  $isUser =$_POST['isUser'];




  $check=$db->checkLogin($Login);
  if ($check=='-1') {
    $response['code']=-1;
    $response['message']='Database error';
    echo  json_encode($response);
    return;
  }
  if ($check!='0') {
    $response['code']=-1;
    $response['message']='This login not empty';
    echo json_encode($response);
      return;
  }


   $result = $db -> insertUser($Login,sha1($Pass),$Name,$Email,$isAdmin,$isUser);
   if ($result==false) {
     $response['code']=-1;
     $response['message']='Database error';
     echo  json_encode($response);
     return;
   }

   $response['code']=0;
   $response['message']='success';
    echo  json_encode($response);


?>
