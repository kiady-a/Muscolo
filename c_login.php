<?php
require_once 'model/dao.php';

if(filter_has_var(INPUT_POST, 'submit') && isset($_GET['register'])){
  $erreur = null;
  if(verifieSiEmailExiste($_POST['inputEmail'])){
    $erreur = "L'email choisi existe déjà.";
  }
  else{
    if($_POST['inputPassword'] == $_POST['inputRepeatPassword']){
      createUser(
        trim(filter_input(INPUT_POST,'inputEmail',FILTER_SANITIZE_STRING)),
        trim(filter_input(INPUT_POST,'inputPassword',FILTER_SANITIZE_STRING)),
        0,
        0);
        $erreur = "Votre compte a bien été enregistré <a href=\"c_login.php\"> connectez-vous dès à présent ! </a>";
    }
    else{
      $erreur = "Les mots de passe ne correspondent pas";
    }
  }
}
elseif(filter_has_var(INPUT_POST, 'submit') && !isset($_GET['register'])){

}

include 'views/login.php';
?>
