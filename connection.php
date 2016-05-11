<?php
   $host = "ec2-54-228-219-2.eu-west-1.compute.amazonaws.com";
   $port = "5432";
   $dbname = "d71e3qs21dn1mv";
   $dbpass="x8tnmXrUAjZdKAGlF200aOmjw8";

   $db = pg_connect( "$host $port $dbname $bdpass"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
