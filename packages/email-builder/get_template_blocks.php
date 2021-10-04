<?php
include_once 'includes/db.class.php';

session_start();
$db = new Db();
$response=array();
$UserId=$_SESSION["UserId"];

if (is_null($UserId)) {
  header("Location: login.php");
  return;
}
$tempId=$_POST['id'];
if (!isset($tempId)) {
  $response['code']=-1;
  echo json_encode($response);
  return;
}
$rows = $db -> get_template_blocks($tempId);




if($rows==-1)
{
   $response['code']=-1;
   echo json_encode($response);
   return;
}
if($rows==0)
{
   //not found
   $response['code']=1;
   echo json_encode($response);
   return;
}

//print_r($rows);

$response['code']=0;
$response['blocks']=$rows;


echo json_encode($response);
?>
