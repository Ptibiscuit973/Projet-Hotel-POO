<?php

require_once('./communs/connect.php');
require_once('./models/driver/Driver.php');
require_once('./models/Reservation.php');

class ReservationController{
    private $driver;

    public function __construct($base){
        $this->driver = new Driver($base);
    }

    public function getReservation(){
        $data = $this->driver->listeReservation();

        require_once('./views/backend/affichResa.php');
    }
    
    public function supprimReservation($numChambre,$numClient){
        $resa = new Reservation();
        $resa->setNumChambre($numChambre);
        $resa->setNumClient($numClient);
        
        $this->driver->supReservation($resa);
        header('location:./index.php?action=list_resa');
        
    }

    public function ajoutReservation(){
      
        $data = $this->driver->listeChambre();
        $data2 = $this->driver->listeReservation();

        if(isset($_POST['submit']) && !empty($_POST['numClient'])&& !empty($_POST['numChambre']) && !empty($_POST['dateArrivee']) && !empty($_POST['dateDepart'])){

            $numclient = trim(htmlspecialchars(addslashes($_POST['numClient'])));
            $numchambre = trim(htmlspecialchars(addslashes($_POST['numChambre'])));
            $datearrivee = trim(htmlspecialchars(addslashes($_POST['dateArrivee'])));
            $datedepart = trim(htmlspecialchars(addslashes($_POST['dateDepart'])));
    
            $resa = new Reservation();
 
            $resa->setNumClient($numclient);
            $resa->setNumChambre($numchambre);
            $resa->setDateArrivee($datearrivee);
            $resa->setDateDepart($datedepart);
            $nb = $this->driver->addReservation($resa);
            
            header('location:./index.php?action=list_resa');
 
        }
        require_once('./views/backend/ajoutResa.php');
    }


    public function editResa($numChambre,$numClient){
        

        if(isset($_POST['submit'])  && !empty($_POST['numClient']) && !empty($_POST['numChambre']) && !empty($_POST['dateArrivee']) && !empty($_POST['dateDepart'])){
    
      
          $numChambre = (int)(trim(htmlspecialchars(addslashes($_POST['numChambre']))));
          $numClient = (int)(trim(htmlspecialchars(addslashes($_POST['numClient']))));
          $dateArrivee = trim(htmlspecialchars(addslashes($_POST['dateArrivee'])));
          $dateDepart = trim(htmlspecialchars(addslashes($_POST['dateDepart'])));
          
      
          $resa = new Reservation();
        
          $resa->setNumChambre($numChambre);
          $resa->setNumClient($numClient);
          $resa->setDateArrivee($dateArrivee);
          $resa->setDateDepart($dateDepart);
          
          
      
          $this->driver->updateReservation($resa);
          header('location:./index.php?action=list_resa');
      
          }          
        $data = $this->driver->editReservation($numChambre,$numClient);
       
        require_once('./views/backend/editResa.php');
     
    }



}






?>