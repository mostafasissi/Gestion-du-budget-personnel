<?php
include "../model/ressource.php";

class DaoRessource 
{
    private $dbh;

    // constructeur

    public function __construct()
    {
        try{
         $this->dbh = new PDO('mysql:host=localhost;dbname=budget', 'root',"");
       
        }catch(PDOException $e){
            print "Erreur !! ".$e->getMessage()."<br/>";
        }
    }
    public function addRessources($login){
         // préparation de la requete 
         $categories = array("Salaires","Retraites","Indemnités", "Allocations diverses",
         "Prestations familiales","Pensions alimentaires reçus","Aide au logement","Revenus fonciers");
         //echo $categories[2];
         for($i=0;$i<8;$i++){
            $stm  = $this->dbh->prepare("INSERT INTO ressources VALUES(?,'indéfinie',0,?)");
            $stm->bindValue(1,$categories[$i]);
            $stm->bindValue(2,$login);
            

            $stm->execute();
         }
         
    }

    public function updateRessource(Ressource $ressource){
        // préparation de la requete 
        $stm  = $this->dbh->prepare("UPDATE ressources
        SET montant = ? , periodicite = ?
        WHERE login = ? AND categorie = ?");
        $stm->bindValue(1,$ressource->getMontant());
        $stm->bindValue(2,$ressource->getPeriodicite());
        $stm->bindValue(3,$ressource->getLogin());
        $stm->bindValue(4,$ressource->getCategorie());
    // exécution de la requete
        $stm->execute();
    // vérification 

   }
    
 
    public function findRessource($login,$categorie){
        $ressource = null;
        $stm = $this->dbh->prepare("SELECT * FROM ressources WHERE login = ? AND categorie = ?");
        $stm->bindParam(1,$login);
        $stm->bindParam(2,$categorie);
        $stm->execute(); 
        $resultat = $stm->fetch(PDO::FETCH_ASSOC); 
        if(!empty($resultat)){
            $ressource = new Ressource($resultat['categorie'], $resultat['periodicite'], $resultat['montant'], $resultat['login']);         
        }
        return $ressource;
    }

    public function sommeRessources($login,$periodicite){
        $stm = $this->dbh->prepare("SELECT montant FROM ressources WHERE login = ? AND periodicite = ? ");
        $stm->bindParam(1,$login);
        $stm->bindParam(2,$periodicite);
        $stm->execute(); 
        $resultat = $stm->fetchAll(); 
        $montant = 0 ; 
        foreach ($resultat as $row){
            $montant = $row['montant'] + $montant ;  
        }
        return $montant;        
    }
}
?>