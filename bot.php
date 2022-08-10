<!-- php start for bot-->
<!-- step 1 => create database for response and user messages -->
<!-- step 2 => create a connection -->

<?php

include("Connexion.php");

//$conn = mysqli_connect("localhost","root","","onlinebot");

if(isset($_POST['messageValue'])){
    $bui = $_POST['messageValue']; 
    //préparer la requête pour les réponses
    $user_messages = $bdd -> prepare("SELECT libelle_reponses FROM qr where libelle_questions like '%$bui%'");
    $user_messages->execute();
    //$row_count =$result->fetchColumn();
    //$us=$user_messages->fetchColumn();
    $etat = $user_messages->rowCount();
    if( $etat > 0 ){
        $max_row = $user_messages->fetch(PDO::FETCH_ASSOC);
        $max = $max_row['libelle_reponses'];
        echo $max;
}   else{
    echo "Non reconnu";}

   
}



?>