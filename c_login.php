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
    $erreur = "This email already exist !";
  }
  else{
    if($_POST['inputPassword'] == $_POST['inputRepeatPassword']){
      createUser(
        trim(filter_input(INPUT_POST,'inputEmail',FILTER_SANITIZE_STRING)),
        trim(filter_input(INPUT_POST,'inputPassword',FILTER_SANITIZE_STRING)),
        0,
        0);
        $erreur = "Your account have been registered successfuly <a href=\"c_login.php\"> You can login ! </a>";
    }
    else{
      $erreur = "The passwords don't match !";
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
      $erreur = "Your account is banned :( you cannot connect but you still can play !";
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
    $erreur = "Your email or your password is wrong !";
  }
}

include 'views/login.php';
?>
