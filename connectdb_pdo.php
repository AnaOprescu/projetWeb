<?php
// used to connect to the data base
try
{
$bdd = new PDO('mysql:host=localhost;dbname=erasmus;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
?>
