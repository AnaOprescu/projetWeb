<?php
    require("../connectdb_pdo.php");
	function verifPseudo($pseudo){
        global $bdd;
        //vérifier dans la base
        $verif_pseudo = $bdd->prepare("SELECT COUNT(*) FROM memebre WHERE pseudo = ? ");
        $verif_pseudo->execute(array($pseudo));
        $table =$verif_pseudo->fetch();
        return $table;
	}
    function verifMdp($password){
        global $bdd;
        //recherche du mot de passe correspondant au pseudo
        $identif = $bdd->prepare('SELECT pseudo,passeword FROM memebre WHERE pseudo = ? and passeword = ?');
        $identif->execute(array($pseudo,$passeword));
        $donnees = $identif->fetchColumn();
        return $donnees;
    }
    function verifAdmin($pseudo){
        global $BD;
        $isadmin = $BD->prepare('SELECT is_admin FROM membre WHERE pseudo = ?');
        $isadmin->execute(array($pseudo));
        $acces =  $isadmin->fetch();
        return $acces;
    }
?>
