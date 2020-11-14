<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie de l'Etudiant</title>
</head>
<body>

<form action="addstudent.php" method="post" enctype="multipart/form-data">

	<table style="border: 10px solid white; box-shadow: 4px 3px 5px 15px #0b0a0a6b; margin-left: 350px; margin-top: 60px; margin-bottom: 60px;">
		<tr>
			<td>Nom:</td>
			<td><input type="text" name="nom"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Photo:</td>
			<td><input type="file" name="photo"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Enregistrer"></td>
		</tr>
	</table>
	
</form>

</body>
</html>