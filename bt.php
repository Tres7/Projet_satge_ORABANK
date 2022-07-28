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
    
    //Préparation à la question "Bonjour" du client
    $user_mes = $bdd -> prepare("SELECT Reponse FROM initial");
    $user_mes->execute();
    /*$user_m = $bdd -> prepare("SELECT Question FROM initial");
    $user_m->execute();*/
    if($_POST['messageValue'] == "Bonjour"){
    $max_r = $user_mes->fetch(PDO::FETCH_ASSOC);
    $ma = $max_r['Reponse'];
    echo $ma;
}   


/*else{
    echo "Nous n'avons pas pu nous connecter à la base de données:" .$e->getMessage() ."<br/>";
}

die;*/
}
?>