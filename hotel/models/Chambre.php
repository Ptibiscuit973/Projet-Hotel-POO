<?php

class Chambre{

    private $numChambre;
    private $prix;
    private $nbLits;
    private $nbPers;
    private $confort;
    private $image;
    private $description;

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
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of nbLits
     */ 
    public function getNbLits()
    {
        return $this->nbLits;
    }

    /**
     * Set the value of nbLits
     *
     * @return  self
     */ 
    public function setNbLits($nbLits)
    {
        $this->nbLits = $nbLits;

        return $this;
    }

    /**
     * Get the value of nbPerse
     */ 
    public function getNbPers()
    {
        return $this->nbPers;
    }

    /**
     * Set the value of nbPerse
     *
     * @return  self
     */ 
    public function setNbPers($nbPers)
    {
        $this->nbPers = $nbPers;

        return $this;
    }

    /**
     * Get the value of confort
     */ 
    public function getConfort()
    {
        return $this->confort;
    }

    /**
     * Set the value of confort
     *
     * @return  self
     */ 
    public function setConfort($confort)
    {
        $this->confort = $confort;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}


?>