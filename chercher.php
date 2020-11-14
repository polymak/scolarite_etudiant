<?php

require_once('config_bdd.php');

$mc="";

if (isset($_POST['MotCle'])) {
	
	$mc=$_POST['MotCle'];
}

$requete="SELECT * FROM etudiants WHERE nom LIKE '%$mc%'";

$resultat=$conn->query($requete);



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liste des Etudiants</title>
</head>
<body>
	<form action="chercher.php" method="post" style="margin-left: 350px; margin-top: 20px; margin-bottom: 20px;"  >
		Mot-clé <input type="text" name="MotCle" style="width: 250px;height: 40px;" value="<?php echo ($mc) ?>"> <input type="submit" value="Chercher">
	</form>
<table border="1" width="50%" style="margin-left: 350px; margin-bottom: 60px;">
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