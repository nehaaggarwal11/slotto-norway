<?php

  $response=array();
    try {
      $fileContent = file_get_contents($_FILES['importfile']['tmp_name']);

      $response['code']=0;
      $response['content']=( $fileContent);
    } catch (Exception $e) {
      $response['code']=-1;
      $response['content']='';
    }
    echo json_encode($response);
 ?>
