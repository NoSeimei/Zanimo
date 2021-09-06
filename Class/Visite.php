<?php 

include("Class/Connexion.php");

class Visite{

    private $Id;
    private $DateVeto;
    private $HeureVeto;
    private $Bilan;
    private $Montant;
    private $IdAnimal;


    /**
     * Get the value of Id
     */ 
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     *
     * @return  self
     */ 
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * Get the value of DateVeto
     */ 
    public function getDateVeto()
    {
        return $this->DateVeto;
    }

    /**
     * Set the value of DateVeto
     *
     * @return  self
     */ 
    public function setDateVeto($DateVeto)
    {
        $this->DateVeto = $DateVeto;

        return $this;
    }

    /**
     * Get the value of HeureVeto
     */ 
    public function getHeureVeto()
    {
        return $this->HeureVeto;
    }

    /**
     * Set the value of HeureVeto
     *
     * @return  self
     */ 
    public function setHeureVeto($HeureVeto)
    {
        $this->HeureVeto = $HeureVeto;

        return $this;
    }

    /**
     * Get the value of Bilan
     */ 
    public function getBilan()
    {
        return $this->Bilan;
    }

    /**
     * Set the value of Bilan
     *
     * @return  self
     */ 
    public function setBilan($Bilan)
    {
        $this->Bilan = $Bilan;

        return $this;
    }

    /**
     * Get the value of Montant
     */ 
    public function getMontant()
    {
        return $this->Montant;
    }

    /**
     * Set the value of Montant
     *
     * @return  self
     */ 
    public function setMontant($Montant)
    {
        $this->Montant = $Montant;

        return $this;
    }

    /**
     * Get the value of IdAnimal
     */ 
    public function getIdAnimal()
    {
        return $this->IdAnimal;
    }

    /**
     * Set the value of IdAnimal
     *
     * @return  self
     */ 
    public function setIdAnimal($IdAnimal)
    {
        $this->IdAnimal = $IdAnimal;

        return $this;
    }

    

}