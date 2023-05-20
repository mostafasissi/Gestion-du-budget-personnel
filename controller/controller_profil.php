<?php
include "../dao/dao_profil.php";

include "../model/utilisateur.php";
session_start();
$utilisateur = $_SESSION['utilisateur'];

$dao = new DaoProfil();
$action = $_GET['action'];
echo  $action;
switch($action){
        case 'update':
                echo "icci";
                $telephone = $_POST['Telephone'];
                $pays = $_POST['pays'];
                $adresse = $_POST['adresse'];
                $age = $_POST['age'];
                $sexe = $_POST['sexe'];
                echo $sexe;
                $login = $utilisateur->getLogin();
                if(isset($telephone, $pays, $adresse,$age,$sexe)){
                        $profil = new profil($telephone,$pays, $adresse, $age, $sexe,$login);
                        $dao->updateProfil($profil);
                        $_SESSION['profil']=$profil;
                        header('location:../view/Profil.php');  
                }
                break;
        default:
                echo "Erreur";
            
        }  

        
        
 
        

    
?>