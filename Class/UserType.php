<?php 

include("Class/Connexion.php");

class UserType{

    private $Id_TypeUser;  
    private $TypeUser;


    /**
     * Get the value of Id_UserType
     */ 
    public function getId_TypeUser()
    {
        return $this->Id_TypeUser;
    }

    /**
     * Get the value of TypeUser
     */ 
    public function getTypeUser()
    {
        return $this->TypeUser;
    }

    /**
     * Set the value of TypeUser
     *
     * @return  self
     */ 
    public function setTypeUser($TypeUser)
    {
        $this->TypeUser = $TypeUser;

        return $this;
    }

    public function GetAllUserType() {
        try {
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->query("SELECT * FROM usertype");
            $requete->setFetchMode(PDO::FETCH_CLASS, 'UserType');
            $usersType = $requete->fetchAll();
            return $usersType;
            } catch (Exception $exD) {
            echo $exD;
            }
    }
}