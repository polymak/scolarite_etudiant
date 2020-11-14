<?php

$server="localhost";
$serveruser="root";
$pwserver="";
$dbserver="scolariteweb";

$conn= new mysqli($server,$serveruser,$pwserver,$dbserver);

if ($conn->connect_error) {
  die("Connexion sans succès: " . $conn->connect_error);
}

?>
