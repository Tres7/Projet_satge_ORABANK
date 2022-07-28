<?php
  
 $boss='root';
 $bim='';

    

    try
{

$bdd = new PDO('mysql:host=localhost;dbname=premierpas',$boss,$bim);
//echo "Connexion réussie";

}
catch (PDOException $e)
{
echo "Nous n'avons pas pu nous connecter à la base de données:" .$e->getMessage() ."<br/>";
die;
}

  ?>