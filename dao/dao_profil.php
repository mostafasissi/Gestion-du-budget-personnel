<?php
include "../model/profil.php";

class DaoProfil 
{
    private $dbh;

    // constructeur

    public function __construct()
    {
        try{
         $this->dbh = new PDO('mysql:host=localhost;dbname=budget', 'root',"");
         echo "connect";
        }catch(PDOException $e){
            print "Erreur !! ".$e->getMessage()."<br/>";
        }
    }
    public function SaveProfil( $profil){
         // préparation de la requete 
         $stm  = $this->dbh->prepare("INSERT INTO profil VALUES(?,?,?,?,?,?)");
         $stm->bindValue(1,$profil->getTelephone());
         $stm->bindValue(2,$profil->getPays());
         $stm->bindValue(3,$profil->getAdresse());
         $stm->bindValue(4,$profil->getAge());
         $stm->bindValue(5,$profil->getSexe());
         $stm->bindValue(6,$profil->getLogin());


     // exécution de la requete 
         $stm->execute();
     // vérification 
         echo " Success ";
    }

    public function updateProfil( $profil){
        // préparation de la requete 
        $stm  = $this->dbh->prepare("UPDATE profil
        SET telephone = ? , pays = ?, adresse = ?, age = ? , sexe = ?
        WHERE login = ?");
        $stm->bindValue(1,$profil->getTelephone());
        $stm->bindValue(2,$profil->getPays());
        $stm->bindValue(3,$profil->getAdresse());
        $stm->bindValue(4,$profil->getAge());
        $stm->bindValue(5,$profil->getSexe());
        $stm->bindValue(6,$profil->getLogin());
    // exécution de la requete 
        $stm->execute();
    // vérification 
        echo " Success ";
   }
    
 
    public function findProfil($login){
        $profil=null;
        $stm = $this->dbh->prepare("SELECT* FROM profil WHERE login = ?");
        $stm->bindParam(1,$login);
        // Exécution de la requete
        $stm->execute();
        // récuperation des donnees 
        $resultat = $stm->fetch(PDO::FETCH_ASSOC); 
        if(!empty($resultat)){
            $profil = new Profil($resultat['telephone'], $resultat['pays'], $resultat['adresse'], $resultat['age'],$resultat['sexe'],$resultat['login']);         
        }
        return $profil;
        
    }
}
?>