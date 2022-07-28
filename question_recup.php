
<?php
include("Connexion.php");
if (isset($_POST['Code_question']) && isset($_POST['libelle_question']))
        {

            $insertion=$bdd->prepare('insert into questions (Code_question,libelle_question) values(:Code_question,:libelle_question)');

            $insertion->execute(array('Code_question'=>$_POST['Code_question'],'libelle_question'=>$_POST['libelle_question']));
        }



?>