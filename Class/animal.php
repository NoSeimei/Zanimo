<?php
include("Class/Connexion.php");
Class Animal
{
    private $Id;
    private $Nom;
    private $Robe;
    private $Etat;
    private $Espece;
    private $Poids;
    private $DateDeNaissance;
    private $NumeroPuce;
    private $IdUsers;
    

    /**
     * Get the value of Id
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     */
    public function setId($Id): self
    {
        $this->Id = $Id;

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
     * Get the value of Robe
     */
    public function getRobe()
    {
        return $this->Robe;
    }

    /**
     * Set the value of Robe
     */
    public function setRobe($Robe): self
    {
        $this->Robe = $Robe;

        return $this;
    }

    /**
     * Get the value of Etat
     */
    public function getEtat()
    {
        return $this->Etat;
    }

    /**
     * Set the value of Etat
     */
    public function setEtat($Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    /**
     * Get the value of Espece
     */
    public function getEspece()
    {
        return $this->Espece;
    }

    /**
     * Set the value of Espece
     */
    public function setEspece($Espece): self
    {
        $this->Espece = $Espece;

        return $this;
    }

    /**
     * Get the value of Poids
     */
    public function getPoids()
    {
        return $this->Poids;
    }

    /**
     * Set the value of Poids
     */
    public function setPoids($Poids): self
    {
        $this->Poids = $Poids;

        return $this;
    }

    /**
     * Get the value of DateDeNaissance
     */
    public function getDateDeNaissance()
    {
        return $this->DateDeNaissance;
    }

    /**
     * Set the value of DateDeNaissance
     */
    public function setDateDeNaissance($DateDeNaissance): self
    {
        $this->DateDeNaissance = $DateDeNaissance;

        return $this;
    }

    /**
     * Get the value of NumeroPuce
     */
    public function getNumeroPuce()
    {
        return $this->NumeroPuce;
    }

    /**
     * Set the value of NumeroPuce
     */
    public function setNumeroPuce($NumeroPuce): self
    {
        $this->NumeroPuce = $NumeroPuce;

        return $this;
    }

    /**
     * Get the value of IdUsers
     */
    public function getIdUsers()
    {
        return $this->IdUsers;
    }

    /**
     * Set the value of IdUsers
     */
    public function setIdUsers($IdUsers): self
    {
        $this->IdUsers = $IdUsers;

        return $this;
    }
    public function GetAllAnimal() {
        try {
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->query("SELECT * FROM animal");
            $requete->setFetchMode(PDO::FETCH_CLASS, 'Animal');
            $allAnimal = $requete->fetchAll();
            return $allAnimal;
            } 
        catch (Exception $exD)
         {
            echo $exD;
        }
    }
    public function GetOneAnimal(Int $id) 
    {
        try {
            $co = new Connexion();
            $dbco = $co->getConnexion();
            $requete = $dbco->prepare("SELECT * FROM animal WHERE id = :id");
            $requete->execute(array('id' => $id));
            $requete->setFetchMode(PDO::FETCH_CLASS, 'Animal');
            $OneAnimal = $requete->fetch();
            return $OneAnimal;
            } catch (Exception $exD) {
            echo $exD;
            }
    }
    public function InsertAnimal(Animal $animal)
    {
        $co = new Connexion();
        $dbco = $co->getConnexion();
        $request = $dbco->prepare("INSERT INTO animal( Nom, Robe, Etat, Espece, Poids, DateDeNaissance, NumeroPuce, IdUsers) 
        VALUES (:Nom, :Robe, :Etat, :Espece, :Poids, :DateDeNaissance, :NumeroPuce, :IdUsers)");
        $request->execute(dismountU($animal));
    }
}



?>