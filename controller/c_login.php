<?php

       //connect to data base
        require("../connectdb_pdo.php");


        $pseudo = htmlentities($_POST['pseudo'],ENT_QUOTES);
        $password = htmlentities($_POST['password'],ENT_QUOTES);

      
        //we check to see if they are on the data base
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
                    echo "ups! try again or go to the register page";
                    header('Location:../modules/LogIn.php');

                }
                else {

                    //Select pseudo, password
                    $conn = $bdd->prepare('SELECT pseudo,password FROM membre WHERE pseudo = ? and password = ?');
                    $conn->execute(array($pseudo,$password));
                    $donnees = $conn->fetchColumn();

                    if ($donnees == true)
                    {

                        if ($droit['isadmin'] == 'membre'){
                            header('Location: ../modules/User_login.php');
                        }
                        else{
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
