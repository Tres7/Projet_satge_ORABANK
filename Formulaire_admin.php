<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<title>Formulaire</title>
	<link rel="stylesheet" href="admin_design.css">
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="recup.php">
		<h1>Connexion</h1>
		<div  class="inputs">
			<label>Nom d'utilisateur:</label> <input type="text" name="nom_ut" required="required" autocomplete="off">
			<br><br><label>Mot de passe:</label><input type="password" name="password" required="required" autocomplete="off"></br> 
			<label>Accréditation:</label> <input type="text" name="Accreditation" required="required" autocomplete="off">
			<br><br><input type="reset"  class="submit" value="Annuler" name="Submit0">
			<input type="Submit" class="submit" value="Connexion" name="Submit">	
		</div>
	</form>  
</body>
</html>





