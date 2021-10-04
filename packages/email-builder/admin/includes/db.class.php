<?php
include_once './../config.php';

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
	public function loginCheck($login,$pass) {
			try {
				$conn=$this->connect();
				$stmt = $conn->prepare("SELECT `Id` FROM `users` WHERE `Login`=? and `Password`=? and isadmin=1 ");

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
	public function deleteTemplate($TemplateId) {

	    try {
	      $conn=$this->connect();
				$stmt = $conn->prepare("DELETE FROM `templates` WHERE ID=?");
				$stmt->bind_param("i", $TemplateId);

		  	$stmt->execute();
				$stmt->close();
				$conn->close();
	      return true;

	    } catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
	      return false;
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
	public function getUsers() {
			try {
				$sql='SELECT * FROM `users`';
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
	public function get_blocks() {
			try {
				$sql='select c.name as cat_name, t.id,t.name,t.used_count from blocks as t
							inner join block_category as c on t.`cat_id`=c.`id`
							where t.`is_active`=1';
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
	public function deleteUser($id) {

	    try {
	      $conn=$this->connect();
				$stmt = $conn->prepare("DELETE FROM `users` WHERE ID=?");
				$stmt->bind_param("i", $id);

		  	$stmt->execute();
				$stmt->close();
				$conn->close();
	      return true;

	    } catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
	      return false;
	    }
  }
	public function delete_template_block($Id) {
			try {
				$conn = $this->connect();
				$stmt = $conn->prepare("UPDATE `blocks` SET  is_active=0 WHERE Id=?");
				$stmt->bind_param("s", $Id);

				$stmt->execute();
				$stmt->close();
				$conn->close();
				return true;

			} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return false;
			}
	}
	public function insert_template_block($Name,$icon,$category,$html,$Property) {
			try {
				$conn=$this->connect();
				$stmt = $conn->prepare("INSERT INTO `blocks`  (name,icon,cat_id,html,property) Values (?,?,?,?,?)");
				$stmt->bind_param("sssss", $Name,$icon,$category,$html,$Property);

				$stmt->execute();
				$stmt->close();
				$conn->close();
				return true;

			} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return false;
			}
	}
	public function update_template_block($Name,$icon,$category,$html,$Id,$property) {
			try {
				$conn=$this->connect();
				$stmt = $conn->prepare("UPDATE `blocks` SET  Name=?,icon=?,cat_id=?,html=?,property=? WHERE Id=?");
				$stmt->bind_param("ssssss", $Name,$icon,$category,$html,$property,$Id);

				$stmt->execute();
				$stmt->close();
				$conn->close();
				return true;

			} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return false;
			}
	}
	public function update_template_blocksById($content,$block_id) {
			try {
				$conn=$this->connect();
				$stmt = $conn->prepare("UPDATE `template_blocks` SET  content=? WHERE block_id=?");
				$stmt->bind_param("ss", $content,$block_id);

				$stmt->execute();
				$stmt->close();
				$conn->close();
				return true;

			} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return false;
			}
	}
	public function insertUser($Login,$Password,$Name,$Email,$isAdmin,$isUser) {
			try {
				$conn=$this->connect();
				$stmt = $conn->prepare("INSERT INTO `users`  (Login,Password,Name,Email,isAdmin,isUser) Values (?,?,?,?,?,?)");
				$stmt->bind_param("ssssss", $Login,$Password,$Name,$Email,$isAdmin,$isUser);

				$stmt->execute();
				$stmt->close();
				$conn->close();
				return true;

			} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return false;
			}
	}
	public function updateUser($Login,$Password,$Name,$Email,$isAdmin,$isUser,$Id) {
			try {
				$conn=$this->connect();
				$stmt = $conn->prepare("UPDATE `users` SET  Login=?,Password=?,Name=?,Email=?,isAdmin=?,isUser=? WHERE Id=?");
				$stmt->bind_param("sssssss", $Login,$Password,$Name,$Email,$isAdmin,$isUser,$Id);

				$stmt->execute();
				$stmt->close();
				$conn->close();
				return true;

			} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return false;
			}
	}
	public function checkLogin($login) {
		try {
			$conn=$this->connect();
			$stmt = $conn->prepare("SELECT count(*) FROM `users` WHERE `Login`=?");

		/* bind parameters for markers */
				$stmt->bind_param("s",$login);

				/* execute query */
				$stmt->execute();

				/* bind result variables */
				$stmt->bind_result($data);

				/* fetch value */
				$stmt->fetch();
				/* close statement */
				$stmt->close();
				$conn->close();
				return $data;
		} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return '-1';
		 }
	}
	public function checkLoginById($login,$id) {
		try {
			$conn=$this->connect();
			$stmt = $conn->prepare("SELECT count(*) FROM `users` WHERE `Login`=? and `Id`<>?");

		/* bind parameters for markers */
				$stmt->bind_param("ss",$login,$id);

				/* execute query */
				$stmt->execute();

				/* bind result variables */
				$stmt->bind_result($data);

				/* fetch value */
				$stmt->fetch();
				/* close statement */
				$stmt->close();
				$conn->close();
				return $data;
		} catch (Exception $e) {
				file_put_contents('error.txt', "\xEF\xBB\xBF".$e);
				return '-1';
		 }
	}
	public function getUserInfoById($id) {
			try {
				$sql='SELECT * FROM `users` WHERE id='.$id;
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
	public function get_template_blockById($id) {
			try {
				$sql='SELECT * FROM `blocks` WHERE id='.$id;
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
}

?>
