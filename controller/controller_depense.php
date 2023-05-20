<?php
include "../dao/dao_depense.php";
include "../dao/dao_utilisateur.php";
session_start();

$action = $_GET['action'];
$dao = new DaoDepense();
$tab_depenses = array("Loyer","Energie","Assurance habitation","Taxe habitation","Taxe foncière");
switch($action){
    case 'afficher': 
        $utilisateur = $_SESSION['utilisateur'];

        $depense = $dao->findDepense($utilisateur->getLogin(),$tab_depenses[0]);
        $resultat = $depense->getPeriodicite().":".$depense->getMontant();  
        for($i=1;$i<5;$i++){
            $depense = $dao->findDepense($utilisateur->getLogin(),$tab_depenses[$i]);
            $resultat = $resultat.":".$depense->getPeriodicite().":".$depense->getMontant();
        }
        echo $resultat;        
        break;

    case 'save':
       
        $tab = explode(":", $_POST['message']);       
        $utilisateur = $_SESSION['utilisateur'];
        
        $depense = new Depense($tab[0],$tab[1],$tab[2],$utilisateur->getLogin());
        $dao->updateDepense($depense);
        break;
}

?>