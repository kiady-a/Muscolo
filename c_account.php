<?php
require_once 'model/dao.php';
session_start();
if($_SESSION['log'] == false){
  header('Location: c_login.php');
  exit();
}
if($_SESSION['log'] == true){
  $myGroups = getGroup($_SESSION['id']);
}
include 'views/account.php';
?>
