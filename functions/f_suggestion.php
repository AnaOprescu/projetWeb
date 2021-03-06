<?php
if($_POST){

//function to add a suggestion of  a city/country

    // include database connection
    include '../connectdb_pdo.php';

    try{

        // insert query
        $query = "INSERT INTO suggestion SET country_suggestion=:country_suggestion, city_suggestion=:city_suggestion";

        // prepare query for execution
        $stmt = $bdd->prepare($query);

        // posted values
        $country_suggestion=htmlspecialchars(strip_tags($_POST['country_suggestion']));
        $city_suggestion=htmlspecialchars(strip_tags($_POST['city_suggestion']));

        // bind the parameters
        $stmt->bindParam(':country_suggestion', $country_suggestion);
        $stmt->bindParam(':city_suggestion', $city_suggestion);


        // Execute the query
        if($stmt->execute()){
            include '../modules/Suggestion.php';
        }else{
            die('This city is already in the data base.');
        }

    }

    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
