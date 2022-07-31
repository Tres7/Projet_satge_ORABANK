
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<link rel="stylesheet" type="text/css" href="AffAd.css">
	<title></title>
</head>
<body>
	<div class="boss" align="left">
		<img src="orabank-togo.jpg">
	</div>
	<table  class="tableau-style">
        <caption><strong>Affichage des adminstrateurs</strong></caption>
        <thead>
            <tr>
            	<th>Id</th>
                <th>Nom d'utilisateur</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Accréditation</th>
                <th> <a href='SupprimerAdmin.php'> </th>
            </tr> 
        </thead>
        <?php
            include("Connexion.php");
            //include("ProjetRecuperation.php");
            $requet=$bdd->query('select id,nom_ut,Nom,Prenom,Accreditation from administrateur');
            $requet->execute();
            while($data= $requet->fetch())
            {   

            	echo "<tbody>";
                    echo "<tr>";
                $id=$data['id'];
                echo" <td>".$data['id']."</td>
                    <td>".$data['nom_ut']."</td>
                    <td>".$data['Nom']."</td>
                    <td>".$data['Prenom']."</td>
                    <td>".$data['Accreditation']."</td>
                    <td><button type='submit'><a href='SupprimerAdmin.php?id=$id'> Supprimer</a></button></td>";

                    echo"</tr>";
                echo "<tbody>";
            }
            ?>        
	</table>
	<a href="session.php">Retour à la page d'acceuil</a>

</body>
</html>