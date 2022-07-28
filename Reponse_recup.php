
<?php
include("Connexion.php");
if (isset($_POST['Code_reponse']) && isset($_POST['libelle_reponse']))
        {

            $insertion=$bdd->prepare('insert into reponses (Code_reponse,libelle_reponse) values(:Code_reponse,:libelle_reponse)');

            $insertion->execute(array('Code_reponse'=>$_POST['Code_reponse'],'libelle_reponse'=>$_POST['libelle_reponse']));
        }


        
                                     


?>