<?php
	if(!isset($_COOKIE["user"]))
    {
        	header('Location: ../modules/index.php');
    }
    elseif(isset($_COOKIE["user"])){
    	setcookie('user','',-1,"/");
    	header('Location: ../modules/index.php');
    }
?>
