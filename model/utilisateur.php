<?php
    class Utilisateur {
        private $nom,$prenom,$login,$password;
        public function __construct($nom,$prenom,$login,$password) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->login = $login;
            $this->password = $password;
        }
        //Les getters
      function getNom() {
        return $this->nom;
      }
      function getPrenom() {
        return $this->prenom;
      }
      function getLogin() {
          return $this->login;
      }
      function getPassword() {
          return $this->password;
      }
    
    //Les setters
      function setNom($nom) {
          $this->nom = $nom;
      }
      function setPrenom($prenom) {
          $this->prenom = $prenom;
      }
      function setLogin($login) {
          $this->login = $login;   
      }
      function setPassword($password) {
          $this->password = $password;
      } 
}
?>