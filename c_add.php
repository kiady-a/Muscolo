<?php
require_once 'model/dao.php';
session_start();
if($_SESSION['log'] == false){
  header('Location: c_login.php');
}
include 'views/add.php';
?>
