<?php

//controller used to insert values in a table with foreign key

       require("../connectdb_pdo.php");
       include("../functions/f_fk.php");

       $name= $_POST['name'];
       $location= $_POST['location'];
       $country_name= $_POST['country_name'];


      $check=checkCountry($country_name);

      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO city (name, location,idCountry)
      VALUES ('$name', '$location','$check')";

      $stmt = $bdd->prepare($sql);

      if($stmt->execute()){
          include('../modules/LogIn.php');
      }else{
          die('Unable to save record.');
      }


 ?>
