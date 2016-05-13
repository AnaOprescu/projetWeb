<?php
if($_POST){

    // include database connection
    include '../connectdb_pdo.php';

    try{

        // insert query
        $query = "INSERT INTO country SET name=:name, capital=:capital, currency=:currency, language=:language, tips=:tips, phrases=:phrases";

        // prepare query for execution
        $stmt = $bdd->prepare($query);

        // posted values
        $name=htmlspecialchars(strip_tags($_POST['name']));
        $capital=htmlspecialchars(strip_tags($_POST['capital']));
        $currency=htmlspecialchars(strip_tags($_POST['currency']));
        $language=htmlspecialchars(strip_tags($_POST['language']));
        $tips=htmlspecialchars(strip_tags($_POST['tips']));
        $phrases=htmlspecialchars(strip_tags($_POST['phrases']));

        // bind the parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':capital', $capital);
        $stmt->bindParam(':currency', $currency);
        $stmt->bindParam(':language', $language);
        $stmt->bindParam(':tips', $tips);
        $stmt->bindParam(':phrases', $phrases);


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
