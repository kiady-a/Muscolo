<?php
//require_once 'model/fonctions.php';
session_start();
if($_SESSION['log'] == false){
  header('Location: c_login.php');
  exit();
}
include 'views/account.php';
?>
