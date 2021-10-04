<?php

  include_once 'includes/db.class.php';
  $db = new Db();

  if (!isset($_POST['Name']) || is_null($_POST['Name'])
  || !isset($_POST['Category']) || is_null($_POST['Category'])) {
    $response['code']=-1;
    $response['message']='Values not be null';
    echo  json_encode($response);
     return;
  }

$Name = $_POST['Name'];
$Icon =$_POST['Icon'];
$HTML = $_POST['HTML'];
$Category =$_POST['Category'];
$Id =$_POST['id'];
$isUpdate=$_POST['isUpdate'];
$property=$_POST['Property'];


$result = $db -> update_template_block($Name,$Icon,$Category,$HTML,$Id,$property);
if ($result==false) {
   $response['code']=-1;
   $response['message']='Database error';
   echo  json_encode($response);
   return;
}

if ($isUpdate==true) {
  $db->update_template_blocksById($HTML,$Id);
}



$response['code']=0;
$response['message']='success';
echo  json_encode($response);


?>
