<?php
include "../dao/dao_ressource.php";
include "../dao/dao_utilisateur.php";
session_start();

$action = $_GET['action'];
$dao = new DaoRessource();
$tab_ressources = array("Salaires","Retraites","Indemnités","Allocations diverses","Prestations familiales","Pensions alimentaires reçus","Aide au logement","Revenus fonciers");
switch($action){
    case 'afficher': 
        $utilisateur = $_SESSION['utilisateur'];

        $ressource = $dao->findRessource($utilisateur->getLogin(),$tab_ressources[0]);
        $resultat = $ressource->getPeriodicite().":".$ressource->getMontant();  
        for($i=1;$i<8;$i++){
            $ressource = $dao->findRessource($utilisateur->getLogin(),$tab_ressources[$i]);
            $resultat = $resultat.":".$ressource->getPeriodicite().":".$ressource->getMontant();
        }
        echo $resultat;        
        break;

    case 'save':
        //public function updateRessource( $ressource){
        $tab = explode(":", $_POST['message']);
        
        $utilisateur = $_SESSION['utilisateur'];
        //($categorie,$periodicite,$montant,$login)
        $ressource = new Ressource($tab[0],$tab[1],$tab[2],$utilisateur->getLogin());
        $dao->updateRessource($ressource);
        break;
}

?>