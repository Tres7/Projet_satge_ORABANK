
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
            	<th>libelle_question</th>
                <th>libelle_reponse</th>
                <th> <a href='SupprimerQuest.php'> </th>
            </tr> 
        </thead>
        <?php
            include("Connexion.php");
            //include("ProjetRecuperation.php");
            $requet=$bdd->query('select libelle_question, libelle_reponse from questions , reponses join qr on qr.Numero_questions=questions.numero and qr.Numero_reponses=reponses.id_reponse');
            $requet->execute();
            while($data= $requet->fetch())
            {   

            	echo "<tbody>";
                    echo "<tr>";
                $id=$data['id'];
                echo" <td>".$data['libelle_question']."</td>
                    <td>".$data['libelle_reponse']."</td>
                    <td><button type='submit'><a href='SupprimerQuest.php?id=$id'> Supprimer</a></button></td>";

                    echo"</tr>";
                echo "<tbody>";
            }
            ?>        
	</table>
	<a href="session.php">Retour à la page d'acceuil</a>

</body>
</html>