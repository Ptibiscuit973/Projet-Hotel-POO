<?php

class Utilisateurs{

    private $id_util;
    private $login;
    private $pass;
    private $role;

    /**
     * Get the value of id_util
     */ 
    public function getId_util()
    {
        return $this->id_util;
    }

    /**
     * Set the value of id_util
     *
     * @return  self
     */ 
    public function setId_util($id_util)
    {
        $this->id_util = $id_util;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

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

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}


?>