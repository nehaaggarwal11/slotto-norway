<?php
include_once 'db-demo.class.php';

class Demo{

  	public function checkUser() {
      $ip=$_SERVER['REMOTE_ADDR'];

      $db = new DbDemo();
      $result = $db -> select($ip);

      if ($result==-3) {
        //ip found in db, that is why insert ip to db
        $db -> insert($ip);
        return 0;
      }
      //if demo user used 3 times this user can not use some functions of plugin(such as export ,preview,etc)
      if ($result[0]['use_count']>=5) {
        return 1;
      }

      $db -> update($ip);
      return 0;
    }
}


?>
