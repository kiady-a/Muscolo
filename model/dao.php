<?php
require_once 'dbConnection.php';

function getAction(){
	$db = myPdo();
    $requete = $db->prepare("select * from action");
    $requete->execute();

    return $requete;
}

function getActionSugg(){
	$db = myPdo();
    $requete = $db->prepare("select * from actionssugg a, utilisateurs u where a.idUtilisateur=u.idUtilisateur");
    $requete->execute();

    return $requete;
}

function getActionsuggById($id){
	  $db = myPdo();
		$requete = $db->prepare("select nomAction from actionssugg where idActionSugg=:id");
		$requete->execute(array('id'=>$id));
		return $requete->fetch()[0];
}

function getUser(){
	$db = myPdo();
    $requete = $db->prepare("select * from utilisateurs");
    $requete->execute();

    return $requete;
}

function getUserByEmail($email){
	$db = myPdo();
    $requete = $db->prepare("select * from utilisateurs where email=:email");
    $requete->execute(array('email'=>$email));
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
		$password = sha1($password);
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

function createActionSugg($nom, $id){
	$db=myPdo();
	$request = $db->prepare("INSERT INTO actionssugg(nomAction, idUtilisateur)
							 VALUES (:nom,:id);");
	$request->execute(array('nom'=>$nom, 'id'=>$id));
	return $request;
}

function createGroup($nom, $id){
	$db = myPdo();
	$request = $db->prepare("INSERT INTO groupe(nom, idUtilisateur)
							 VALUES (:nom,:id);");
	$request->execute(array('nom'=>$nom, 'id'=>$id));
	return $request;
}

function updateUser($email, $admin, $banni, $id){
	$db=myPdo();
	$request = $db->prepare("UPDATE utilisateurs SET email = :email, admin = :admin, banni = :banni where idUtilisateur = :id;");
	$request->execute(array('email'=>$email, 'admin'=>$admin, 'banni'=>$banni, 'id'=>$id));
	return $request;
}

function login($email, $password){
	$users=getUserByEmail($email)->fetch();
	return (sha1($password) == $users['password']);
}

function delActionSugg($id){
	$db=myPdo();
	$request = $db->prepare("DELETE FROM actionssugg WHERE idActionSugg = :id");
	$request->execute(array('id'=>$id));
	return $request;
}

function addActionSuggInAction($action){
	$db=myPdo();
	$request = $db->prepare("INSERT INTO action(action) VALUES (:action);");
	$request->execute(array('action'=>$action));
	return $request;
}

function banUser($email, $banni){
	$db=myPdo();
	$request = $db->prepare("UPDATE utilisateurs SET banni = :banni where email = :email;");
	$request->execute(array('email'=>$email, 'banni'=>$banni));
	return $request;
}
