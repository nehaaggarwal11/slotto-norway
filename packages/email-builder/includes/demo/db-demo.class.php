<?php

include_once '../../config.php';

class DbDemo{

	public function connect() {
		// Create connection
		$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}

	public function select($ip) {
		try {
			$sql="SELECT use_count FROM `bal_email_limiter` WHERE `ip`='$ip'";
			$conn=$this->connect();
			$result = mysqli_query($conn, $sql);
			$newArr=array();

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$newArr[]=$row;
				}
				mysqli_close($conn);
			} else {
				return -3;
			}
			return $newArr;
		} catch (Exception $e) {
		  	file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return -1;
		}
	}

	public function insert($ip) {

    try {
      $conn=$this->connect();
			$stmt = $conn->prepare("INSERT INTO `bal_email_limiter` (`ip`,`use_count`) VALUES (?, 0)");
			$stmt->bind_param("s", $ip);

	  	$stmt->execute();
			$stmt->close();
			$conn->close();
      return true;

    } catch (Exception $e) {
			file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
      return false;
    }


  }
	public function update($ip) {

    try {
      $conn=$this->connect();
			$stmt = $conn->prepare("UPDATE `bal_email_limiter` SET `use_count`=use_count+1 WHERE `ip`=?");
			$stmt->bind_param("s", $ip);

	  	$stmt->execute();
			$stmt->close();
			$conn->close();
      return true;

    } catch (Exception $e) {
			file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
      return false;
    }
  }

}

?>
