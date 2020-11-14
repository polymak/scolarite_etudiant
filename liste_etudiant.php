<?php

require_once('config_bdd.php');
$mc="";
$requete="SELECT * FROM etudiants";

$resultat=$conn->query($requete);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Liste des Etudiants</title>
</head>
<body>
<table border="1" width="50%" style="margin-left: 350px; margin-top: 60px; margin-bottom: 60px; ">
	<tr>
		<td>CODE</td><td>NOM ETUDIANT</td><td>PHOTO</td>
	</tr>
	<?php while ($ET=mysqli_fetch_assoc($resultat)) { ?>
		<tr>
			<td><?php echo ($ET['code']) ?></td>
			<td><?php echo ($ET['nom']) ?></td>
			<td><img src="upload_photos/<?php echo ($ET['photo'])?>" width="150"></td>
			<td><a href="supprimer_etudiant.php?code=<?php echo ($ET['code']) ?>">Supprimer</a></td>
			<td><a href="modifier_etudiant.php?code=<?php echo ($ET['code']) ?>">Modifier</a></td>
		</tr>
	<?php } ?>
</table>
</body>
</html>
