<?php
include "../model/utilisateur.php";

class DaoUtilisateur 
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
    public function addUser( $utilisateur){
         // préparation de la requete 
         $stm  = $this->dbh->prepare("INSERT INTO utilisateur VALUES(?,?,?,?)");
         $stm->bindValue(1,$utilisateur->getNom());
         $stm->bindValue(2,$utilisateur->getPrenom());
         $stm->bindValue(3,$utilisateur->getLogin());
         $stm->bindValue(4,$utilisateur->getPassword());

     // exécution de la requete 
         $stm->execute();
     // vérification 
         echo " Success ";
    }
    public function findUser($login,$password){
        $utilisateur=null;
        $stm = $this->dbh->prepare("SELECT* FROM utilisateur WHERE login = ? AND password= ? ");
        $stm->bindParam(1,$login);
        $stm->bindParam(2,$password);
        // Exécution de la requete
        $stm->execute();
        // récuperation des donnees 
        $resultat = $stm->fetch(PDO::FETCH_ASSOC); 
        if(!empty($resultat)){
            $utilisateur = new Utilisateur($resultat['nom'], $resultat['prenom'], $resultat['login'], $resultat['password']);         
        }
        return $utilisateur;
        
    }
}
?>