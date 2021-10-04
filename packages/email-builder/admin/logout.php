<?php
session_start();
unset($_SESSION["AdminUserId"]);
header("Location: login.php");
die();
?>
