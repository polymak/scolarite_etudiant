<?php
 
include ('config_bdd.php');

$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo'] ['name'];
$file_tmp_name = $_FILES['photo'] ['tmp_name'];
move_uploaded_file($file_tmp_name, "./upload_photos/$nomPhoto");

$sql = "INSERT INTO etudiants(nom, email, photo) VALUES ('$nom', '$email', '$nomPhoto')";

if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}


?>

<!DOCTYPE html>
<html>
<body>
<h1>Enregistrement avec succès!</h1>
<table border="1">
	
	<tr>
		<td>Nom:</td>
		<td><?php echo $nom ?></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><?php echo $email ?></td>
	</tr>
	<tr>
		<td>Photo:</td>
		<td><img src="upload_photos/<?php echo $nomPhoto ?>" width="150" height="150"></td>
	</tr>
</table>

</body>
</html>
