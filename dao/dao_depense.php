<?php
include "../model/depense.php";

class DaoDepense 
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
    public function addDepenses($login){
         // préparation de la requete 
         $categories = array("Loyer","Energie","Assurance habitation","Taxe habitation","Taxe foncière");
         //echo $categories[2];
         for($i=0;$i<5;$i++){
            $stm  = $this->dbh->prepare("INSERT INTO depenses VALUES(?,'indéfinie',0,?)");
            $stm->bindValue(1,$categories[$i]);
            $stm->bindValue(2,$login);
            $stm->execute();
         }
         
    }

    public function updateDepense(Depense $depense){
        // préparation de la requete 
        $stm  = $this->dbh->prepare("UPDATE depenses
        SET montant = ? , periodicite = ?
        WHERE login = ? AND categorie = ?");
        $stm->bindValue(1,$depense->getMontant());
        $stm->bindValue(2,$depense->getPeriodicite());
        $stm->bindValue(3,$depense->getLogin());
        $stm->bindValue(4,$depense->getCategorie());
    // exécution de la requete
        $stm->execute();

   }
    
 
    public function findDepense($login,$categorie){
        $depense = null;
        $stm = $this->dbh->prepare("SELECT * FROM depenses WHERE login = ? AND categorie = ?");
        $stm->bindParam(1,$login);
        $stm->bindParam(2,$categorie);
        $stm->execute(); 
        $resultat = $stm->fetch(PDO::FETCH_ASSOC); 
        if(!empty($resultat)){
            $depense = new Depense($resultat['categorie'], $resultat['periodicite'], $resultat['montant'], $resultat['login']);         
        }
        return $depense;
    }

    public function sommeDepenses($login,$categorie){
        $stm = $this->dbh->prepare("SELECT montant FROM depenses WHERE login = ? AND periodicite = ? ");
        $stm->bindParam(1,$login);
        $stm->bindParam(2,$categorie);
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