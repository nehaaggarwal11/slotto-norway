<?php
  include_once 'config.php';

$todayh = getdate();
$filename= "upload-file-".$todayh[seconds].$todayh[minutes].$todayh[hours].$todayh[mday]. $todayh[mon].$todayh[year];

  if ( 0 < $_FILES['file']['error'] ) {
      echo 'Error: ' . $_FILES['file']['error'] . '<br>';
  }
  else {
      $ext=explode('.',$_FILES['file']['name'])[1];
      move_uploaded_file($_FILES['file']['tmp_name'], UPLOADS_DIRECTORY.$filename.'.'.$ext);
  }

?>
