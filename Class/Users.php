<?php 

include("Class/Connexion.php");

class Users{

    private $Id_User;  
    private $Nom;
    private $Prenom;
    private $DateNaiss;
    private $Telephone;
    private $Email;
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
    public function getDateNaiss()
    {
        return $this->DateNaiss;
    }

    /**
     * Set the value of DateNaissance
     *
     * @return  self
     */ 
    public function setDateNaiss($DateNaiss)
    {
        $this->DateNaiss = $DateNaiss;

        return $this;
    }
    
    /**
     * Get the value of Telephone
     */ 
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * Set the value of Telephone
     *
     * @return  self
     */ 
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;

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
            $requete->setFetchMode(PDO::FETCH_CLASS, 'Users');
            $allUser = $requete->fetchAll();
            return $allUser;
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

    public function CheckMail(string $email) {
        try {
            $isMailExist = true;
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->prepare("SELECT * FROM `users` WHERE Email = :Email");
		    $requete->execute(array('Email' => $email));
		    $requete->setFetchMode(PDO::FETCH_CLASS, 'Users');
		    $user = $requete->fetchAll();
            if(count($user) < 0){
                $isMailExist = false;
            }
            return $isMailExist;
            } catch (Exception $exD) {
            echo $exD;
            }
    }

    public function InsertTokenPasswordForgot(string $user)
    {
        $co = new Connexion();
        $dbco = $co->getConnexion();
        $request = $dbco->prepare("INSERT INTO users (Nom,Prenom,DateNaiss,Telephone,Email,Login,Password, IdUserType)
        VALUES (:Nom,:Prenom, :DateNaiss,:Telephone,:Email,:Login,MD5(:Password), :IdUserType)");
        $request->execute(dismountU($user));
    }

    public function InsertUser(Users $user)
    {
        $co = new Connexion();
        $dbco = $co->getConnexion();
        $request = $dbco->prepare("INSERT INTO users (Nom,Prenom,DateNaiss,Telephone,Email,Login,Password, IdUserType)
        VALUES (:Nom,:Prenom, :DateNaiss,:Telephone,:Email,:Login,MD5(:Password), :IdUserType)");
        $request->execute(dismountU($user));
    }

}
?>