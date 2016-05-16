<?php
require_once('../connectdb_pdo.php');

$get_id=$_GET['idMembre'];

// sql to delete a record from the member table
$sql = "Delete from membre where idMembre = '$get_id'";

// use exec() because no results are returned
$bdd->exec($sql);
header('location:../modules/Management_members.php');
?>
