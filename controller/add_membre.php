<?php
require_once('../connectdb_pdo.php');

$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$pseudo= $_POST['pseudo'];
$country_origin= $_POST['country_origin'];
$city_origin= $_POST['city_origin'];
$fb_name= $_POST['fb_name'];
$email= $_POST['email'];
$password= $_POST['password'];
$country_dest= $_POST['country_dest'];
$city_dest= $_POST['city_dest'];



$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO membre (first_name, last_name,pseudo,country_origin,city_origin,fb_name,email,password,country_dest,city_dest)
VALUES ('$first_name', '$last_name','$pseudo','$country_origin','$city_origin','$fb_name','$email', '$password','$country_dest','$city_dest')";

$bdd->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='../modules/Management_members.php'</script>";
?>
