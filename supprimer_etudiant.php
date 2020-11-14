<?php

require_once('config_bdd.php');

$code=$_GET['code'];

$req1="delete from etudiants where(code=$code)";

$res1=$conn->query($req1);

header("location:liste_etudiant.php");




?>