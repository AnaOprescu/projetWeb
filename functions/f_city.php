<?php

//second function trying to add a city
if($_POST){

    // include database connection
    include '../connectdb_pdo.php';

    try{

        // insert query
        $query = "INSERT INTO city SET name=:name, location=:location";

        // prepare query for execution
        $stmt = $bdd->prepare($query);

        // posted values
        $name=htmlspecialchars(strip_tags($_POST['name']));
        $capital=htmlspecialchars(strip_tags($_POST['location']));

        // bind the parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':location', $location);


        // Execute the query
        if($stmt->execute()){
            echo "<div>Record was saved.</div>";
        }else{
            die('Unable to save record.');
        }

    }

    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
