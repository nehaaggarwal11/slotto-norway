<?php
include_once './config.php';

class Db{
	public function connect() {
		// Create connection
		$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}
	public function select() {
		try {
			$sql='SELECT * FROM `templates`';
			$conn=$this->connect();
			$result = mysqli_query($conn, $sql);
			$newArr=array();

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$newArr[]=$row;
				}
				mysqli_close($conn);
			} else {
				return 0;
			}
			return $newArr;
		} catch (Exception $e) {
		  	file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return -1;
		}


	}
	public function get_blocks_category() {
			try {
				$sql='select * from block_category ';
				$conn=$this->connect();
				$result = mysqli_query($conn, $sql);
				$newArr=array();

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						$newArr[]=$row;
					}
					mysqli_close($conn);
				} else {
					return 0;
				}
				return $newArr;
			} catch (Exception $e) {
					file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
					return -1;
			}
	}
	public function get_blocksByCat($catId) {
			try {
				$sql='select * from blocks where is_active=1 and cat_id='.$catId;
				$conn=$this->connect();
				$result = mysqli_query($conn, $sql);
				$newArr=array();

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						$newArr[]=$row;
					}
					mysqli_close($conn);
				} else {
					return 0;
				}
				return $newArr;
			} catch (Exception $e) {
					file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
					return -1;
			}
	}
	public function select_templates($userId) {
		try {
			$sql='SELECT * FROM `templates` WHERE `UserId`='.$userId;
			$conn=$this->connect();
			$result = mysqli_query($conn, $sql);
			$newArr=array();

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$newArr[]=$row;
				}
				mysqli_close($conn);
			} else {
				return 0;
			}
			return $newArr;
		} catch (Exception $e) {
		  	file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return -1;
		}
	}
    public function getTemplates() {
        try {
            $sql='select `b`.`id` AS `TemplateId`,`b`.`UserId` AS `UserId`,`b`.`name` AS `TemplateName`,`b`.`content` AS `TemplateContent`,`u`.`Name` AS `UserName` from (`templates` `b` left join `users` `u` on((`b`.`UserId` = `u`.`Id`)))';
            $conn=$this->connect();
            $result = mysqli_query($conn, $sql);
            $newArr=array();

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $newArr[]=$row;
                }
                mysqli_close($conn);
            } else {
                return 0;
            }
            return $newArr;
        } catch (Exception $e) {
            file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
            return -1;
        }
    }

	public function getTemplatesById($templateId) {
        try {
            $sql='select * from templates where id='.$templateId;
            $conn=$this->connect();
            $result = mysqli_query($conn, $sql);
            $newArr=array();

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $newArr[]=$row;
                }
                mysqli_close($conn);
            } else {
                return 0;
            }
            return $newArr;
        } catch (Exception $e) {
            file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
            return -1;
        }
    }

	public function get_template_blocks($tempId) {
		try {
			$sql='SELECT tb.*,b.`property` FROM `template_blocks` as tb inner join blocks as b on tb.`block_id`=b.`id` where tb.template_id='.$tempId;
			$conn=$this->connect();
			$result = mysqli_query($conn, $sql);
			$newArr=array();

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$newArr[]=$row;
				}
				mysqli_close($conn);
			} else {
				return 0;
			}
			return $newArr;
		} catch (Exception $e) {
		  	file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return -1;
		}
	}

	public function get_template_blocksById($templateId) {
        try {
            $sql='select * from template_blocks where template_id='.$templateId;
            $conn=$this->connect();
            $result = mysqli_query($conn, $sql);
            $newArr=array();

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $newArr[]=$row;
                }
                mysqli_close($conn);
            } else {
                return 0;
            }
            return $newArr;
        } catch (Exception $e) {
            file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
            return -1;
        }
    }

	public function insertTemplate($name,$UserId) {

    try {
      $conn=$this->connect();
			$stmt = $conn->prepare("INSERT INTO  `templates` (`name`,`UserId`) VALUES (?, ?)");
			$stmt->bind_param("ss", $name,$UserId);

	  	$stmt->execute();
			$stmt->close();
			$conn->close();
      return true;

    } catch (Exception $e) {
			file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
      return false;
    }
	}
	public function insertTemplateBlocks($template_id,$block_id,$content) {

		try {
			$conn=$this->connect();
			$stmt = $conn->prepare("INSERT INTO  `template_blocks` (`template_id`,`block_id`,`content`) VALUES (?, ?, ?)");
			$stmt->bind_param("sss", $template_id,$block_id,$content);

			$stmt->execute();
			$stmt->close();
			$conn->close();
			return true;

		} catch (Exception $e) {
			file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
			return false;
		}
	}
	public function deleteTemplate($templateId,$UserId) {

		try {
			$conn=$this->connect();
			$stmt = $conn->prepare("DELETE FROM `templates`  WHERE ID=? AND UserId=?");
			$stmt->bind_param("ss", $templateId , $UserId);

			$stmt->execute();
			$stmt->close();
			$conn->close();
			return true;

		} catch (Exception $e) {
			file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
			return false;
		}
	}
	public function updateTemplate($name,$id) {

		try {
			$conn=$this->connect();
			$stmt = $conn->prepare("UPDATE `templates` SET `name`=? WHERE id=?");
			$stmt->bind_param("ss", $name,$id);

			$stmt->execute();
			$stmt->close();
			$conn->close();
			return true;

		} catch (Exception $e) {
			file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
			return false;
		}
	}
	public function updateBlockUsedCount($block_id) {

		try {
			$conn=$this->connect();
			$stmt = $conn->prepare("UPDATE `blocks` SET used_count=used_count+1 WHERE id=?");
			$stmt->bind_param("s", $block_id);

			$stmt->execute();
			$stmt->close();
			$conn->close();
			return true;

		} catch (Exception $e) {
			file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
			return false;
		}
	}
	public function deleteTemplateBlocks($templateId) {

		try {
			$conn=$this->connect();
			$stmt = $conn->prepare("DELETE FROM `template_blocks`  WHERE template_id=? ");
			$stmt->bind_param("s", $templateId );

			$stmt->execute();
			$stmt->close();
			$conn->close();
			return true;

		} catch (Exception $e) {
			file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
			return false;
		}
	}
	public function loginCheck($login,$pass) {
			try {
				$conn=$this->connect();
				$stmt = $conn->prepare("SELECT `Id` FROM `users` WHERE `Login`=? and `Password`=? and isuser=1");

			/* bind parameters for markers */
					$stmt->bind_param("ss",$login,$pass);

					/* execute query */
					$stmt->execute();

					/* bind result variables */
					$stmt->bind_result($UserId);

					/* fetch value */
					$stmt->fetch();
					/* close statement */
					$stmt->close();
					$conn->close();
					return $UserId;
			} catch (Exception $e) {
					file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
					return -3;
			}
		}
    public function getLastTempId() {
        try {
            $conn=$this->connect();
            $stmt = $conn->prepare("SELECT `id` FROM `templates` order by id desc limit 1");

        /* bind parameters for markers */

                /* execute query */
                $stmt->execute();

                /* bind result variables */
                $stmt->bind_result($Name);

                /* fetch value */
                $stmt->fetch();
                /* close statement */
                $stmt->close();
                $conn->close();
                return $Name;
        } catch (Exception $e) {
                file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
                return '0';
        }
        }
	public function getUserName($Id) {
		try {
			$conn=$this->connect();
			$stmt = $conn->prepare("SELECT `Name` FROM `users` WHERE `Id`=?");

		/* bind parameters for markers */
				$stmt->bind_param("s",$Id);

				/* execute query */
				$stmt->execute();

				/* bind result variables */
				$stmt->bind_result($Name);

				/* fetch value */
				$stmt->fetch();
				/* close statement */
				$stmt->close();
				$conn->close();
				return $Name;
		} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return '0';
		}
	}
}

?>
