<?php
// Je me connecte à la base de données

        require("../connectdb_pdo.php");
        //Sécurisation des données saisies
        $pseudo = htmlentities($_POST['pseudo'],ENT_QUOTES);
        $password = htmlentities($_POST['password'],ENT_QUOTES);
        //On vérifie que le login existe dans la table
        $reponse_admin = $bdd->prepare('SELECT isadmin FROM membre WHERE pseudo = ?');
        $reponse_admin->execute(array($pseudo));
        $droit =  $reponse_admin->fetch();
        if(!isset($_COOKIE["user"]))
        {
            if(isset($_POST['pseudo']) && isset($_POST['password'])){
                $verif_pseudo = $bdd->prepare("SELECT COUNT(*) FROM membre WHERE pseudo = ? ");
                $verif_pseudo->execute(array($pseudo));
                $count =$verif_pseudo->fetch();
                if($count[0] == 0)
                {
                    echo "Erreur pseudo. Veuillez vous réauthentifier ou vous inscrire";
                    header('Location:../modules/LogIn.php');
                    //Exception, erreur ou ce que tu désires
                }
                else { //Login existant

                    //Séléction du password pour le login saisi
                    $conn = $bdd->prepare('SELECT pseudo,password FROM membre WHERE pseudo = ? and password = ?');
                    $conn->execute(array($pseudo,$password));
                    //$conn -> bindParam('.$pseudo.',$pseudo,PDO::PARAM_STR);
                    //$conn -> bindParam('.$password.',$password,PDO::PARAM_STR);
                    $donnees = $conn->fetchColumn();
                    //Je vérifie que le mot de passe correspond
                    //Si le mot de passe est hashé dans la bdd, il faut appliquer ce hashage à $password dans la vérification ci-dessous
                    if ($donnees == true)
                    {

                        if ($droit['isadmin'] == 'membre'){
                            echo "c'est un abonne";
                            header('Location: ../modules/User_login.php');
                        }
                        else{
                             echo "c'est un admin";
                             header('Location: ../modules/Admin.php');
                            }
                        setcookie("user",$pseudo,mktime()+(100000),"/");
                    }
                    else{
                        header('Location: ../modules/LogIn.php');
                    }
                }
           }
       }
            elseif(isset($_COOKIE["user"]))
            {
                if ($droit['isadmin'] == 'membre'){
                  header('Location: ../modules/User_login.php');
                    exit();
                }
                else{
                    header('Location: ../modules/Admin.php');
                    exit();
                }
            }
?>
