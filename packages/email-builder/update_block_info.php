<?php
include_once 'includes/db.class.php';

$db = new Db();

$block_id=$_POST["block_id"];

$result = $db -> updateBlockUsedCount( $block_id );

if ($result) {
  echo 'ok';
}else {
   echo 'error';
}

 ?>
