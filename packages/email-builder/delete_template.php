<?php
include_once 'includes/db.class.php';
session_start();

if (!isset($_POST['templateId']) ) {
   echo 'value not be null';
   return;
}

$db = new Db();
$UserId=$_SESSION["UserId"];
$templateId = $_POST['templateId'];

$result = $db -> deleteTemplate( $templateId,$UserId);
if ($result) {
  echo 'ok';
}else {
   echo 'error';
}


?>
