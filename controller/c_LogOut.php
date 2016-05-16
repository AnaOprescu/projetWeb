<?php

//function to bring you to the accueil once you have clicked sur "log out"
	if(!isset($_COOKIE["user"]))
    {
        	header('Location: ../modules/index.php');
    }
    elseif(isset($_COOKIE["user"])){
    	setcookie('user','',-1,"/");
    	header('Location: ../modules/index.php');
    }
?>
