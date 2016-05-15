<?php require("../connectdb_pdo.php");?>
<?php require("../model/m_login.php");?>
<?php
	if(isset($_COOKIE["user"])){
		$droit = userrights();
		if($droit['isadmin']== "membre"){
			header('Location: ../modules/User_login.php');
		}
		else {
			header('Location: ../modules/Admin.php');
		}
	}
?>
