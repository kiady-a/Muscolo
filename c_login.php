<?php
require_once 'model/dao.php';

if(filter_has_var(INPUT_POST, 'submit') && isset($_GET['register'])){
  if(verifieSiEmailExiste($emailUser)){
    $erreur = "L'email choisi existe déjà.";
  }
  header('Location: c_login.php?register=register');
}
elseif(filter_has_var(INPUT_POST, 'submit') && !isset($_GET['register'])){
  echo "hellow login";
}

include 'views/login.php';
?>
