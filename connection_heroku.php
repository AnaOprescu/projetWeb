<?
$host = "ec2-54-228-219-2.eu-west-1.compute.amazonaws.com";
$port = "5432";
$dbname = "d71e3qs21dn1mv";
$user = "telenaljjwdnsd";
$password = " x8tnmXrUAjZdKAGlF200aOmjw8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$dbconn = pg_connect($connection_string);


if($dbconn){
    echo "Connected to ". pg_host($dbconn);
}else{
    echo "Error in connecting to database.";
}

echo "<br />";
?>
