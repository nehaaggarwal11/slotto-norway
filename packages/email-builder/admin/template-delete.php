<?php

  include_once 'includes/db.class.php';

  $response=array();
  $db = new Db();

  $templateId = $_POST['templateId'];

   $result = $db -> deleteTemplate( $templateId);
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
