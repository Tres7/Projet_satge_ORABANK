<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <title>Formulaire</title>
  <link rel="stylesheet" href="question_css.css">
</head>
<body>
  <form method="post" class="box" enctype="multipart/form-data" action="question_recup.php">
    <h1>Question</h1>
    <div  class="inputs">
      <input type="text" name="Code_question" required="required" autocomplete="off" placeholder="Code question">
      <!--label>Code question:</label> <input type="text" name="Code_question" required="required" autocomplete="off"-->
      <input type="text" name="libelle_question" required="required" autocomplete="off" placeholder="Libellé de la question">
      <!--br><br><label>Libellé de la question:</label><input type="text" name="libelle_question" required="required" autocomplete="off"></br--> 
      <input type="reset"  class="submit" value="Annuler" name="Submit0">
      <input type="Submit" class="submit" value="Connexion" name="Submit">  
    </div>
  </form>  
</body>
</html>





