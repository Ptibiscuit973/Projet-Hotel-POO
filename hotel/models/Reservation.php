<?php

class Reservation{

    private $numClient;
    private $numChambre;
    private $dateArrivee;
    private $dateDepart;

    /**
     * Get the value of numClient
     */ 
    public function getNumClient()
    {
        return $this->numClient;
    }

    /**
     * Set the value of numClient
     *
     * @return  self
     */ 
    public function setNumClient($numClient)
    {
        $this->numClient = $numClient;

        return $this;
    }

    /**
     * Get the value of numChambre
     */ 
    public function getNumChambre()
    {
        return $this->numChambre;
    }

    /**
     * Set the value of numChambre
     *
     * @return  self
     */ 
    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;

        return $this;
    }

    /**
     * Get the value of dateArrivee
     */ 
    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }

    /**
     * Set the value of dateArrivee
     *
     * @return  self
     */ 
    public function setDateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    /**
     * Get the value of dateDepart
     */ 
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set the value of dateDepart
     *
     * @return  self
     */ 
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }
}

?>