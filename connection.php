<?php
try {

  $dbh = new PDO("postgres://telenaljjwdnsd:x8tnmXrUAjZdKAGlF200aOmjw8@ec2-54-228-219-2.eu-west-1.compute.amazonaws.com:5432/d71e3qs21dn1mv");
  //echo "PDO connection object created";
  $dbh->prepare("SELECT * FROM city");
  $dbh->execute();
  $test=$dbh->fetch(PDO::FETCH_ASSOC);
  print_r($test);
}
catch(PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
?>
