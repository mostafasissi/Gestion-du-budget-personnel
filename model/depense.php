<?php
    class Depense {
        private $categorie,$periodicite,$montant,$login;
        public function __construct($categorie,$periodicite,$montant,$login) {
            $this->categorie = $categorie;
            $this->periodicite = $periodicite;
            $this->montant = $montant;
            $this->login = $login;
        }
        //Les getters
      function getCategorie() {
        return $this->categorie;
      }
      function getPeriodicite() {
        return $this->periodicite;
      }
      function getMontant() {
          return $this->montant;
      }
      function getLogin() {
          return $this->login;
      }
    
    //Les setters
      function setCategorie($categorie) {
          $this->categorie = $categorie;
      }
      function setPeriodicite($periodicite) {
          $this->periodicite = $periodicite;
      }
      function setLogin($login) {
          $this->login = $login;   
      }
      function setMontant($montant) {
        $this->montant = $montant;   
    }
      
      
}
?>