<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Ajout_admin.css">
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="Recup_ajout_ad.php">
		<h1>Ajouter un nouvel administrateur</h1>
		<div  class="form-group">
            <input type="text" name="nom_ut" required="required" autocomplete="off" placeholder="Nom d'utilisateur">
                <br><br></label><input type="password" name="password" required="required" autocomplete="off" placeholder="Mot de passe"></br>
			    <br><input type="text" name="Nom" required="required" autocomplete="off" placeholder="Nom"></br>
			    <br></label><input type="text" name="Prenom" required="required" autocomplete="off" placeholder="Prénom"></br>
			    <br></label><input type="text" name="Accreditation" required="required" autocomplete="off" placeholder="Accréditation"></br>
			    <br><br><input type="reset"  class="submit" value="Annuler" name="Submit0">
			    <input type="Submit" class="submit" value="Ajouter" name="Submit">
    </form>	

</body>
</html>