<!-- php start for bot-->
<!-- step 1 => create database for response and user messages -->
<!-- step 2 => create a connection -->

<?php
// server = localhost
// username = root
// password = "" (blank)
// database Name = your database name
include("Connexion.php");

//$conn = mysqli_connect("localhost","root","","onlinebot");

if(isset($_POST['messageValue'])){
    $bui = $_POST['messageValue']; 
    //préparer la requête pour les réponses
    $user_messages = $bdd -> prepare("SELECT reponses.libelle_reponse, questions.libelle_question FROM reponses, questions join qr on reponses.id_reponse = qr.id and questions.numero=qr.id where $bui = Numero_reponses or libelle_question like '%$bui%' ");
    $user_messages->execute();
    //$us=$user_messages->fetchAll();
    if($_POST['messageValue'] > 0 ){
        $max_row = $user_messages->fetch(PDO::FETCH_ASSOC);
        $max = $max_row['libelle_reponse'];
        echo $max;
}   else{
    echo "Non reconnu";}

    //Préparation à la question "Bonjour" du client
    /*$user_mes = $bdd -> prepare("SELECT Reponse FROM initial");
    $user_mes->execute();
   
    if($_POST['messageValue'] == "Bonjour"){
    $max_r = $user_mes->fetch(PDO::FETCH_ASSOC);
    $ma = $max_r['Reponse'];
    echo $ma;*/
}   


?>