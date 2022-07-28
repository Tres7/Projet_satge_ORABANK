<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <title>Ajout d'une réponse</title>
  <link rel="stylesheet" href="question_css.css">
</head>
<body>
  <form method="post" class="box" enctype="multipart/form-data" action="Reponse_recup.php">
    <h1>Reponse</h1>
    <div>
      <input type="text" name="Code_reponse" required="required" autocomplete="off" placeholder="Code réponse">
      <!--label>Code réponse:</label> <input type="text" name="Code_reponse" required="required" autocomplete="off"-->
      <input type="text" name="libelle_reponse" required="required" autocomplete="off" placeholder="Libellé de la réponse"> 
      <input type="reset"  class="submit" value="Annuler" name="Submit0">
      <input type="Submit" class="submit" value="Connexion" name="Submit">  
    </div>
  </form>  
</body>
</html>





