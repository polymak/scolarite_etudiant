<?php
$server="localhost";
$serveruser="root";
$pwserver="";
$dbserver="scolariteweb";

$conn= new mysqli($server,$serveruser,$pwserver,$dbserver);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo'] ['name'];
$file_tmp_name = $_FILES['photo'] ['tmp_name'];
move_uploaded_file($file_tmp_name, "./upload_photos/$nomPhoto");

$sql = "UPDATE etudiants SET nom='$nom', email='$email', photo='$nomPhoto' Where email='$email'";

if (mysqli_query($conn, $sql)) {
  
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
header("location:liste_etudiant.php");
mysqli_close($conn);
?>

