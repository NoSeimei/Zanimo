<?php 

include("Class/Connexion.php");

class Users{

    private $Id_User;  
    private $Nom;
    private $Prenom;
    private $DateNaissance;
    private $Login;
    private $Password;
    private $IdUserType;

    /**
     * Get the value of Id_User
     */ 
    public function getId_User()
    {
        return $this->Id_User;
    }

    /**
     * Set the value of Id_User
     *
     * @return  self
     */ 
    public function setId_User($Id_User)
    {
        $this->Id_User = $Id_User;

        return $this;
    }

    /**
     * Get the value of Nom
     */ 
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     *
     * @return  self
     */ 
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */ 
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */ 
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of DateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * Set the value of DateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($DateNaissance)
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    /**
     * Get the value of Login
     */ 
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Set the value of Login
     *
     * @return  self
     */ 
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Get the value of Password
     */ 
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     *
     * @return  self
     */ 
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Get the value of IdUserType
     */ 
    public function getIdUserType()
    {
        return $this->IdUserType;
    }

    /**
     * Set the value of IdUserType
     *
     * @return  self
     */ 
    public function setIdUserType($IdUserType)
    {
        $this->IdUserType = $IdUserType;

        return $this;
    }

    public function GetAllUser() {
        try {
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->query("SELECT * FROM users");
            return $requete;
            } catch (Exception $exD) {
            echo $exD;
            }
    }
}
?>