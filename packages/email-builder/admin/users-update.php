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
  $PassOld =$_POST['PassOld'];
  $Name = $_POST['Name'];
  $Email =$_POST['Email'];
  $isAdmin = $_POST['isAdmin'];
  $isUser =$_POST['isUser'];
  $Id =$_POST['id'];

//echo strlen($Pass).' -- '.$Pass.'<br>';

  if (strlen($Pass)>0) {
    $Pass=sha1($Pass);
  }else {
    $Pass=$PassOld;
  }

//echo strlen($Pass).' -- '.$Pass;
//return;

  $check=$db->checkLoginById($Login,$Id);
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


   $result = $db -> updateUser($Login,$Pass,$Name,$Email,$isAdmin,$isUser,$Id);
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
