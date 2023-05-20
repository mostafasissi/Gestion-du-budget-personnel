<?php
class Profil
{
    private $telephone;
    private $pays;
    private $adresse;
    private $age;
    private $sexe;
    private $login;		
    
    public function __construct($telephone,$pays,$adresse,$age,$sexe,$login)
    {
        $this->telephone=$telephone;
        $this->pays=$pays;
        $this->adresse=$adresse;
        $this->age=$age;
    	$this->sexe=$sexe;
    	$this->login=$login;

    }

    // getters
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function getLogin()
    {
        return $this->login;
    }
 


    // setters 

    public function setTelephone($telephone)
    {
        $this->telephone=$telephone;
    }

    public function setPays($pays)
    {
        $this->pays=$pays;
    }

    public function setAdresse($adresse)
    {
        $this->adresse=$adresse;
    }


    public function setAge($age)
    {
        $this->age=$age;

    }
    public function setSexe($sexe)
    {
        $this->sexe=$sexe;

    }
    public function setLogin($login)
    {
        $this->login=$login;

    }

}




?>