<?php
require_once 'model/dao.php';
session_start();

if($_SESSION['admin'] <= 0){
  header('Location: c_login.php');
  exit();
}

$propositions = getActionSugg();

$id = 0;

if (filter_has_var(INPUT_POST, "validate")) {
}

if (filter_has_var(INPUT_POST, "delete")) {
  delActionSugg($id);
  //echo("<meta http-equiv='refresh' content='1'>");
}

include 'views/admin.php';
?>
