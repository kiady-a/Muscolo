<?php
require_once 'model/dao.php';

if(filter_has_var(INPUT_POST, 'submit') && isset($_GET['register'])){
  $erreur = null;
  if(verifieSiEmailExiste($_POST['inputEmail'])){
    $erreur = "L'email choisi existe déjà.";
  }
  else{
    if($_POST['inputPassword'] == $_POST['inputRepeatPassword']){

    }
  }
  /*elseif(){

  }*/
}
elseif(filter_has_var(INPUT_POST, 'submit') && !isset($_GET['register'])){
  echo "hellow login";
}

include 'views/login.php';
?>
