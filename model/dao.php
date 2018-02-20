<?php
require_once 'dbConnection.php';

function getAction(){
	$db = myPdo();
    $requete = $db->prepare("select * from action");
    $requete->execute();

    return $requete;
}
function getUser(){
	$db = myPdo();
    $requete = $db->prepare("select * from utilisateurs");
    $requete->execute();

    return $requete;
}
function getGroup(){
	$db = myPdo();
    $requete = $db->prepare("select * from groupe");
    $requete->execute();

    return $requete;
}

function createUser($email, $password, $admin, $banni){
	$db = myPdo();
    $requete = $db->prepare("INSERT INTO utilisateurs(email, password, admin, banni)
							 VALUES (:email, :password, :admin, :banni);");
    $requete->execute(array(
        'email' => $email, 'password' => $password, 'admin'=>$admin, 'banni'=>$banni
    ));
	return $requete;
}
function verifieSiEmailExiste($emailUser){
    $db= myPdo();
    $request = $db->prepare("SELECT count(*) from utilisateurs WHERE email=:emailUser");
    $request->execute(array(
        'emailUser' => $emailUser
    ));
    $requete = $request->fetch();
    return $requete[0] != 0;
}
