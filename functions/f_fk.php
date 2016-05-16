<?php


try {
$bdd = new PDO('mysql:host=localhost;dbname=erasmus;charset=utf-8','root','');

//select a the id of a country once you have the name
function checkCountry($country_name){
    global $bdd;
    $check_country = $bdd->prepare("SELECT idCountry FROM country WHERE name = ? ");
    $check_country->execute(array($country_name));
    $count =$check_country->fetch();
    return $count;
}

//insert values in teh city table
function insertCity($nom,$location){
   global $BD;
   $insert= $BD->prepare("INSERT INTO city(nom,location) VALUES(?,?)");
   $insert->execute(array($nom,$location));
   return 0;
}


} catch(PDOException $e){
echo 'Connection failed'.$e->getMessage();
}

?>
