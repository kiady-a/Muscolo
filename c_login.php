<?php
require_once 'model/dao.php';
session_start();
if($_SESSION['log'] == true){
  header('Location: index.php');
  exit();
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
    $user = getUserByEmail($_POST['inputEmail'])->fetch();

    $_SESSION['email'] = $user['email'];
    $_SESSION['id'] = $user['idUtilisateur'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['banni'] = $user['banni'];
    if ($_SESSION['banni'] > 0) {
      $erreur = "Vous êtes banni donc vous ne pouvez pas vous connecter ! Vous pouvez malgré tout jouer au jeu.";
    }elseif ($_SESSION['admin'] > 0) {
      $_SESSION['log'] = true;
      header('Location: c_admin.php');
      exit();
    }else {
      $_SESSION['log'] = true;
      header('Location: index.php');
      exit();
    }

  }
  else{
    $erreur = "Les identifiants ne correspondent pas";
  }
}

include 'views/login.php';
?>
