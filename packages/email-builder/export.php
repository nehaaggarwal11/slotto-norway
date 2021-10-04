<?php
  include_once 'config.php';
  include_once 'includes/utils.php';
  //for demo
  //include_once 'includes/demo/demo.php';



// if (IS_DEMO) {
//     $demo = new Demo();
//       //if demo user used 5 times, this user can not use some functions of plugin(such as export ,preview,etc)
//     $checkUseCount=$demo->checkUser();
//     if ($checkUseCount==1) {
//         $response['code']=-5;
//         echo json_encode($response);
//         return;
//     }
// }

$response=createHtmlandZipFile($_POST['html']);
echo  json_encode($response);

//header("Location: download.php");

?>
