
<?php
include("Connexion.php");
if (&& isset($_POST['libelle_question']) && isset($_POST['libelle_reponse']))
        {

            $insertion=$bdd->prepare('insert into questions (Code_question,libelle_question) values(:libelle_question)');
            $insert=$bdd->prepare('insert into reponses (libelle_reponse) values(:libelle_reponse)');

            $insertion->execute(array('libelle_question'=>$_POST['libelle_question']));
            $insert->execute(array('libelle_reponse'=>$_POST['libelle_reponse']));
        }

?>