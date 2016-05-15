<?php
function userrights(){
		global $bdd;
		$pseudo = $_COOKIE['user'];
		$req = $bdd->prepare('SELECT isadmin FROM membre WHERE pseudo = ?');
		$req->execute(array ($pseudo));
		$droit = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $droit;
	}
?>
