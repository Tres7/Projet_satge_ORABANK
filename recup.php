<?php
session_start();
include("Connexion.php");
if (isset($_POST['nom_ut']) && isset($_POST['password']) && isset($_POST['Accreditation'])) {
	//$config["SECRET_KEY"];
	$bar=sha1($_POST['password']);
	$insertion=$bdd->prepare("select * from administrateur where nom_ut=? and password=? and Accreditation=?");
    $insertion->execute(array($_POST['nom_ut'],$bar,$_POST['Accreditation']));
    $erreur="";
    $user=$insertion->fetchAll();
	if(count($user) > 0){
		$_SESSION["bin"] = ucfirst(strtoupper($user[0]["Nom"])) .
" "  .  strtolower($user[0]["Prenom"]);
$_SESSION["connecter"] = "yes";

$_SESSION["Accreditation"] = $user["Accreditation"];

header("location:session.php");
		
	}else{
		$erreur="Mauvais login ou mot de passe";
		echo $erreur; 
	}

}
?>