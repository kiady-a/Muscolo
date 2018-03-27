<?php
require_once 'model/dao.php';
session_start();

if($_SESSION['admin'] <= 0){
  header('Location: c_login.php');
  exit();
}

$propositions = getActionSugg();
$id = $_POST['id'];
$email = $_POST['email'];

if (filter_has_var(INPUT_POST, "validate")) {
  $action = getActionsuggById($id);
  addActionSuggInAction($action);
  delActionSugg($id);
  $_SESSION["msg"] = "A suggestion has been accepted !";
  header("Refresh:0");
}

if (filter_has_var(INPUT_POST, "delete")) {
  delActionSugg($id);
  $_SESSION["msg"] = "A suggestion has been refused !";
  header("Refresh:0");
}

if (filter_has_var(INPUT_POST, "banUser")) {
  banUser($email, 1);
  $_SESSION["msg"] = "A user has been banned !";
  delActionSugg($id);
  header("Refresh:0");
}

include 'views/admin.php';
?>
