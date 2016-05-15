<?php
include '../connectdb_pdo.php';

$get_id=$_REQUEST['idCountry'];

$name= $_POST['name'];
$capital= $_POST['capital'];
$currency= $_POST['currency'];
$language= $_POST['language'];
$tips= $_POST['tips'];
$phrases= $_POST['phrases'];


$sql = "UPDATE country SET name ='$name', capital ='$capital',currency ='$currency', language ='$language',tips ='$tips', phrases ='$phrases' WHERE idCountry = '$get_id' ";

$bdd->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='../modules/Management_countries.php'</script>";


?>
