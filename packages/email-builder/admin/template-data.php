<?php

  include_once 'includes/db.class.php';

  $response=array();
  $db = new Db();

  $templateId = $_POST['templateId'];

   $result = $db -> getTemplatesById( $templateId);
   if ($result==-1) {
     $response['code']=-1;
     $response['message']='Database error';
     echo  json_encode($response);
     return;
   }

   $response['code']=0;
   $response['message']='success';
   $response['name']=$result[0]['name'];
   $response['blocks']=$db -> get_template_blocksById( $templateId);

   echo  json_encode($response);
?>
