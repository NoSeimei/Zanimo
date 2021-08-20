<?php
include("Class/Connexion.php");
Class Famille
{


    private $id ;
    private $Nom ;
    private $Num1 ;
    private $Num2 ;
    private $Email ;
    private $Adresse ;
    private $CodePostal ;




    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

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
     */
    public function setNom($Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Num1
     */
    public function getNum1()
    {
        return $this->Num1;
    }

    /**
     * Set the value of Num1
     */
    public function setNum1($Num1): self
    {
        $this->Num1 = $Num1;

        return $this;
    }

    /**
     * Get the value of Num2
     */
    public function getNum2()
    {
        return $this->Num2;
    }

    /**
     * Set the value of Num2
     */
    public function setNum2($Num2): self
    {
        $this->Num2 = $Num2;

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
     */
    public function setEmail($Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Adresse
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set the value of Adresse
     */
    public function setAdresse($Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    /**
     * Get the value of CodePostal
     */
    public function getCodePostal()
    {
        return $this->CodePostal;
    }

    /**
     * Set the value of CodePostal
     */
    public function setCodePostal($CodePostal): self
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }
    public function GetAllFamille() {
        try {
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->query("SELECT * FROM animal");
            $requete->setFetchMode(PDO::FETCH_CLASS, 'Animal');
            $allFamille = $requete->fetchAll();
            return $allFamille;
            } catch (Exception $exD) {
            echo $exD;
            }
    }
    public function GetOneAnimal(Int $id) 
    {
        try {
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->prepare("SELECT * FROM Famille WHERE id = :id");
            $requete->execute(array('id' => $id));
            $requete->setFetchMode(PDO::FETCH_CLASS, 'Famille');
            $OneFamille = $requete->fetch();
            return $OneFamille;
            } catch (Exception $exD) {
            echo $exD;
            }
    }
    public function InsertFamille(Famille $Famille)
    {
        $co = new Connexion();
        $dbco = $co->getConnexion();
        $request = $dbco->prepare("INSERT INTO famille(id, Nom, Num1, Num2, Email, Adresse, CodePostal) 
        VALUES (:id, :Nom, :Num1, :Num2, :Email, :Adresse, :CodePostal)");
        $request->execute(dismountU($Famille));
    }
}

?>
