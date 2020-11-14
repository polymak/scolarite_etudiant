<?php 

require_once('config_bdd.php');

$code = $_GET['code'];

$req="SELECT * FROM etudiants WHERE code=$code";

$res=$conn->query($req);

$student= mysqli_fetch_assoc($res);

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie de l'Etudiant</title>
</head>
<body>

<form action="update_etudiant.php" method="post" enctype="multipart/form-data">

	<table>
		<tr>
			<td style="display: none;">Code:</td>
			<td><input type="text" name="nom" value="<?php echo $student['code']; ?>" style="display: none;" ></td>
		</tr>
		<tr>
			<td>Nom:</td>
			<td><input type="text" name="nom" value="<?php echo $student['nom']; ?>"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="email" value="<?php echo $student['email']; ?>"></td>
		</tr>
		<tr>
			<td>Photo:</td>
			<td>
				<img src="upload_photos/<?php echo $student['photo'];?>"  width="200px;" height="200px;">
				<input type="file" name="photo">
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="Modifier"></td>
		</tr>
	</table>
	
</form>

</body>
</html>