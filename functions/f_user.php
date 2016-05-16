<?php
if($_POST){

//function to add a new membre

    // include database connection
    include '../connectdb_pdo.php';

    try{

        // insert query
        $query = "INSERT INTO membre SET first_name=:first_name,last_name=:last_name,pseudo=:pseudo,country_origin=:country_origin,city_origin=:city_origin,fb_name=:fb_name,email=:email,password=:password,country_dest=:country_dest,city_dest=:city_dest";

        // prepare query for execution
        $stmt = $bdd->prepare($query);

        // posted values
        $first_name=htmlspecialchars(strip_tags($_POST['first_name']));
        $last_name=htmlspecialchars(strip_tags($_POST['last_name']));
        $pseudo=htmlspecialchars(strip_tags($_POST['pseudo']));
        $country_origin=htmlspecialchars(strip_tags($_POST['country_origin']));
        $city_origin=htmlspecialchars(strip_tags($_POST['city_origin']));
        $fb_name=htmlspecialchars(strip_tags($_POST['fb_name']));
        $email=htmlspecialchars(strip_tags($_POST['email']));
        $password=htmlspecialchars(strip_tags($_POST['password']));
        $country_dest=htmlspecialchars(strip_tags($_POST['country_dest']));
        $city_dest=htmlspecialchars(strip_tags($_POST['city_dest']));

        // bind the parameters
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->bindParam(':country_origin', $country_origin);
        $stmt->bindParam(':city_origin', $city_origin);
        $stmt->bindParam(':fb_name', $fb_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':country_dest', $country_dest);
        $stmt->bindParam(':city_dest', $city_dest);

        //make the password secure
        $password=sha1($password);

        // Execute the query
        if($stmt->execute()){
            include('../modules/LogIn.php');
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
