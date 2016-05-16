<?php
require_once('../connectdb_pdo.php');

$get_id=$_GET['idCountry'];

// sql to delete a record from country table
$sql = "Delete from country where idCountry = '$get_id'";

// use exec() because no results are returned
$bdd->exec($sql);
header('location:../modules/Management_countries.php');
?>
