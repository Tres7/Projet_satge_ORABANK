
<?php
include("Connexion.php");
if (isset($_POST['nom_ut']) && isset($_POST['password']) && isset($_POST['Nom']) && isset($_POST['Prenom']))
        {
            echo "Nouvel administrateur ajouté";
            $var=sha1($_POST['password']);
            $insertion=$bdd->prepare('insert into administrateur(nom_ut,password,Nom,Prenom,Accreditation) values(:nom_ut,:password,:Nom,:Prenom,:Accreditation)');
            $insertion->execute(array('nom_ut'=>$_POST['nom_ut'],'password'=>$var,'Nom'=>$_POST['Nom'],'Prenom'=>$_POST['Prenom'],'Accreditation'=>$_POST['Accreditation']));
        }
?>