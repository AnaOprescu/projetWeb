<?php
include '../connectdb_pdo.php';

$get_id=$_REQUEST['idMembre'];

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



$sql = "UPDATE membre SET first_name ='$first_name', last_name ='$last_name',pseudo ='$pseudo', country_origin ='$country_origin',city_origin ='$city_origin', fb_name ='$fb_name',email ='$email', password ='$password',country_dest ='$country_dest', city_dest ='$city_dest' WHERE idMembre = '$get_id' ";

$bdd->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='../modules/Management_members.php'</script>";


?>
