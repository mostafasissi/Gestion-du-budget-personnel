<?php
include "../dao/dao_utilisateur.php";
include "../dao/dao_profil.php";
include "../dao/dao_ressource.php";
include "../dao/dao_depense.php";

$dao = new DaoUtilisateur();
$daoP = new DaoProfil();
$daoR = new DaoRessource();
$daoD = new DaoDepense();
$action = $_GET['action'];
switch ($action) {
    case 'insert':
         // récupération des données 
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        if(isset($nom, $prenom, $login,$password)){
            
                $utilisateur = new Utilisateur($nom, $prenom, $login, $password);
                $dao->addUser($utilisateur);
                //profile
                $profil = new Profil("non defini","non defini","non defini",0,"non defini",$login);
                $daoP->SaveProfil($profil);
                // Ressources 
                $daoR->addRessources($utilisateur->getLogin());
                // Depenses
                $daoD->addDepenses($utilisateur->getLogin());
                $_SESSION['utilisateur']=$utilisateur;
                header('location:../index.html');  
        }
        break;

    case 'login':

        $login = $_POST['login'];
        $password = $_POST['password'];
        if(isset($login,$password)){
                $utilisateur = $dao->findUser($login,$password);
                if ($utilisateur!=null){
                    session_start();
                    $_SESSION['utilisateur']=$utilisateur;
                    // profil
                    $profil = null;
                    $profil = $daoP->findProfil($utilisateur->getLogin());
                    if ($profil!=null){
                        $_SESSION['profil']=$profil;
                    } 
                    header('location:../view/ressources.php');
                } else { // mot de passe incorrect
                    
                    header('location:../view/sign-inError.html');
                }
        }
        break;
    case 'deconnexion':
        session_start();
        session_destroy();
        header('location:../view/login.html');
}
?>