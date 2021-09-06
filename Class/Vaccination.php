<?php 

include("Class/Connexion.php");

class Users{

    private $Id;
    private $DateVacc;
    private $Produit;
    private $DateRapp;
    private $IdAnimal;

    /**
     * Get the value of Id_User
     */ 
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of Id_User
     *
     * @return  self
     */ 
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * Get the value of DateNaissance
     */ 
    public function getDateVacc()
    {
        return $this->DateVacc;
    }

    /**
     * Set the value of DateNaissance
     *
     * @return  self
     */ 
    public function setDateVacc($DateVacc)
    {
        $this->DateVacc = $DateVacc;

        return $this;
    }
    
    /**
     * Get the value of Telephone
     */ 
    public function getProduit()
    {
        return $this->Produit;
    }

    /**
     * Set the value of Telephone
     *
     * @return  self
     */ 
    public function setProduit($Produit)
    {
        $this->Produit = $Produit;

        return $this;
    }

    /**
     * Get the value of IdUserType
     */ 
    public function getIdUser()
    {
        return $this->IdUser;
    }

    /**
     * Set the value of IdUserType
     *
     * @return  self
     */ 
    public function setIdUser($IdUser)
    {
        $this->IdUser = $IdUser;

        return $this;
    }

    public function GetAllUser(string $user, $pass) {
        try {
            $isUserExist = true;
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->prepare("SELECT * FROM users WHERE Identifiant = :Identifiant AND Password = :Password");
            $requete->execute(array('Identifiant' => $user, 'Password' => $pass));
            $requete->setFetchMode(PDO::FETCH_CLASS, 'Users');
            $user = $requete->fetch();
            if(count($user) < 0){
                $isUserExist = false;
            }
            return $isUserExist;
            } catch (Exception $exD) {
            echo $exD;
            }
    }
    
    public function CheckUser(string $ident) {
        try {
            $isUserExist = true;
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->prepare("SELECT * FROM `users` WHERE Identifiant = :Identifiant");
		    $requete->execute(array('Identifiant' => $ident));
		    $requete->setFetchMode(PDO::FETCH_CLASS, 'Users');
		    $user = $requete->fetchAll();
            if(count($user) < 0){
                $isUserExist = false;
            }
            return $isUserExist;
            } catch (Exception $exD) {
            echo $exD;
            }
    }

    public function InsertVaccination(Users $user)
    {
        $co = new Connexion();
        $dbco = $co->getConnexion();
        $request = $dbco->prepare("INSERT INTO vaccination(Id, DateVaccination, ProduitUtilisee, DateRappelVac, IdUsers, IdAnimal)
        VALUES (:Id, :DateVaccination,:ProduitUtilisee, :DateRappelVac, :IdUsers, :IdAnimal");
        $request->execute(dismountU($user));
    }

  
}
?>