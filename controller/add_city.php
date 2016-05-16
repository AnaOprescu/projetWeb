<?php

//add a city to the data base
require_once('../connectdb_pdo.php');

$name= $_POST['name'];
$location= $_POST['location'];




$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO city (name, location)
VALUES ('$name', '$location')";

$bdd->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='../modules/Management_cities.php'</script>";
?>
