<?php
require_once('../connectdb_pdo.php');

$get_id=$_GET['idCity'];

// sql to delete a record from the city table
$sql = "Delete from city where idCity = '$get_id'";

// use exec() because no results are returned
$bdd->exec($sql);
header('location:../modules/Management_cities.php');
?>
