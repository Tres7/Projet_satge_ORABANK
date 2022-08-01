<?php
session_start();
include("Connexion.php");
//include("SuperAdmin.php");
$erreur= null;
if (isset($_POST['nom_ut']) && isset($_POST['password']) && isset($_POST['Accreditation'])) {
	$bar=sha1($_POST['password']);
	$insertion=$bdd->prepare("select * from administrateur where nom_ut=? and password=? and Accreditation=?");
    $insertion->execute(array($_POST['nom_ut'],$bar,$_POST['Accreditation']));
    //$erreur="Erreur";
    $user=$insertion->fetchAll();
	if(count($user) > 0 && $_POST['Accreditation']=="Super admin"){
		$_SESSION["bin"] = ucfirst(strtoupper($user[0]["Nom"])) .
" "  .  strtolower($user[0]["Prenom"]);
$_SESSION["connecter"] = "yes";
header("location:SuperAdmin.php");	
	}else{
		$erreur="Erreur!";
	}
	if(count($user) > 0 && $_POST['Accreditation']=="admin"){
		$_SESSION["bin"] = ucfirst(strtoupper($user[0]["Nom"])) .
" "  .  strtolower($user[0]["Prenom"]);
$_SESSION["connecter"] = "yes";
header("location:SecondAdmin.php");
	}else{
		echo "Erreur !";
	}

}
?>