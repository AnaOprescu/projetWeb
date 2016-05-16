<?php

//edit and update the attributs of a city
include '../connectdb_pdo.php';

$get_id=$_REQUEST['idCity'];

$name= $_POST['name'];
$location= $_POST['location'];



$sql = "UPDATE city SET name ='$name', location ='$location' WHERE idCity = '$get_id' ";

$bdd->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='../modules/Management_cities.php'</script>";


?>
