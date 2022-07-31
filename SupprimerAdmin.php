<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS.css">
    <title></title>
</head>
<body>

</body>
</html>
<?php
include("Connexion.php");
echo"<h2>Suppression effectuée avec succès</h2>";

$supp=$bdd->prepare("delete from administrateur where id = :id ");
$supp->execute(array('id'=>$_GET['id']));

$affichage=$bdd->query("select * from administrateur");
	echo" <table border='2'>
        <thead>
		 <tr>
		    <td>id</td>
            <td>Nom d'utilisateur</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Accreditation</td>
            <td> <a href='SupprimerAdmin.php'> </td>   
		 </tr>
         <thead>";
 
		 while($data=$affichage->fetch())
		 {
			 $id=$data['id'];
		   echo"
			 <tr>
			    <td>".$data['id']."</td>
                <td>".$data['nom_ut']."</td>
                <td>".$data['Nom']."</td>
                <td>".$data['Prenom']."</td>
                <td>".$data['Accreditation']."</td>
                <td><button type='submit'> <a href='SupprimerAdmin.php?id=$id'> Supprimer</a></button</td>;	 
			 </tr>"; 
	 }


?>