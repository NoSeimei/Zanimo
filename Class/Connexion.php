<?php

class Connexion{

    private $host;
    private $dbname;
    private $user;
    private $pass;      


    /**
     * Set the value of host
     *
     * @return  self
     */ 
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get the value of host
     */ 
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Get the value of dbname
     */ 
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * Set the value of dbname
     *
     * @return  self
     */ 
    public function setDbname($dbname)
    {
        $this->dbname = $dbname;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function getConnexion(){
        try{
    
            $this->setHost("localhost");
            $this->setdbname("zanimo");
            $this->setuser("root");
            $this->setpass("");
            $h = $this->getHost();
            $name = $this->getDbname();
            $users = $this->getUser();
            $passw = $this->getPass();

            $db = new PDO("mysql:host=$h;dbname=$name",$users,$passw,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            
            return $db;
            } 
            catch(Exception $ex)  
            {               
            echo $ex;
            } 
        }
}

?>