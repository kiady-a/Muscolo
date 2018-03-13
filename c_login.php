<?php
require_once 'model/dao.php';
session_start();
if($_SESSION['log'] == true){
  header('Location: index.php');
}
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
  if(login($_POST['inputEmail'], $_POST['inputPassword'])){
    // getUserByEmail($email) si banni afficher erreur        
    $_SESSION['log'] = true;
    $_SESSION['email'] = $_POST['inputEmail'];
    header('Location: index.php');
  }
  else{
    $erreur = "Les identifiants ne correspondent pas";
  }
}

include 'views/login.php';
?>
