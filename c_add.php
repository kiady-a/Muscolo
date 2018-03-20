<?php
require_once 'model/dao.php';
session_start();
if($_SESSION['log'] == false){
  header('Location: c_login.php');
  exit();
}

$msg = "";

if (filter_has_var(INPUT_POST, 'submit')) {
  $sugg = trim(filter_input(INPUT_POST,'action',FILTER_SANITIZE_STRING));
  if (!empty($sugg)) {
    createActionSugg($sugg, $_SESSION['id']);
    $msg = "Votre proposition a bien été envoyée.";
  }else{
    $msg = "Votre proposition ne peut pas être vide !";
  }
}


include 'views/add.php';
?>
