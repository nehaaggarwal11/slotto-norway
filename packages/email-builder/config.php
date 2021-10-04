<?php

/*

  1. Make sure that you set SITE_URL and SITE_DIRECTORY correctly.
  2. Check uploads and exports folder in your server, if they do not exist ,please create those folders
  3. If you have any problem with installation, please create ticket in our support system.

*/
/*
  For example :
  define("SITE_URL", 'http://localhost:8888/email-builder/v2.0/');
  define("SITE_DIRECTORY",$_SERVER['DOCUMENT_ROOT'] .'/email-builder/v2.0/');
*/

define("SITE_URL", "https://slottomat.com/no/public/email-builder/");
define("SITE_DIRECTORY", __DIR__."/");


 //uploads directory,url
define("UPLOADS_DIRECTORY",SITE_DIRECTORY.'uploads/');
define("UPLOADS_URL",SITE_URL.'uploads/');

//EXPORTS directory,url
define("EXPORTS_DIRECTORY",SITE_DIRECTORY.'exports/');
define("EXPORTS_URL",SITE_URL.'exports/');

//Db settings

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'nj&*#^*H@*&29NJ');
define('DB_NAME', 'project_slottomat_norway_email_builder');

// Example DB
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'root');
// define('DB_NAME', 'email-builder');


define('EMAIL_SMTP','<Email stmp name>');
define('EMAIL_PASS' ,'<Email password >');
define('EMAIL_ADDRESS', '<Email address >');



?>
