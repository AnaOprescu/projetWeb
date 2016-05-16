<?php

//add a country to the data base
require_once('../connectdb_pdo.php');

$name= $_POST['name'];
$capital= $_POST['capital'];
$currency= $_POST['currency'];
$language= $_POST['language'];
$tips= $_POST['tips'];
$phrases= $_POST['phrases'];



$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO country (name, capital,currency,language,tips,phrases)
VALUES ('$name', '$capital','$currency','$language','$tips','$phrases')";

$bdd->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='../modules/Management_countries.php'</script>";
?>
