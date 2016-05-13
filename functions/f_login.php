<?php

$connect=mysqli_connect("localhost","root","","erasmus") or die ("error:" .mysqli_error());

$pseudo=$_REQUEST["pseudo"];
$password=$_REQUEST["password"];

$s="select * from membre where pseudo='".$pseudo."' and password='".$password."'";
$result= mysqli_query($connect,$s);

$count= mysqli_num_rows($result);

if($count>0){
  setcookie("login","1");
  header("location:login_cookie.php");
}
else{
    header("location:../modules/User_login.php");
}
