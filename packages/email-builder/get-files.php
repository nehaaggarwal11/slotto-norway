<?php
    include_once 'config.php';

    //get all files in uploads folder
    $files = array_diff(scandir(UPLOADS_DIRECTORY), array('.', '..'));

    //creating response
    $response=array();

    $response['code']=0;
    $response['files']=$files;
    $response['directory']=UPLOADS_URL;

    //convert to json
    echo json_encode($response);
?>
