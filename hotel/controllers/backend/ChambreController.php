<?php

require_once('./communs/connect.php');
require_once('./models/driver/Driver.php');
require_once('./models/Chambre.php');

class ChambreController{
    private $driver;

    public function __construct($base){
        $this->driver = new Driver($base);
    }

    public function getChambres(){
        $data = $this->driver->listeChambre();

        require_once('./views/backend/affichChambre.php');
    }

    public function getDetails($id){
        if(isset($_GET['id'])){
            $data = $this->driver->detailsChambre($id);
            
        
        require_once('./views/backend/detailsChambre.php');
        }
        
    }

    public function ajoutChambre(){
      
        

        if(isset($_POST['submit']) && isset($_POST['confort']) && strlen($_POST['confort']) >=3 ){

            $prix = intval(trim(addslashes(htmlspecialchars($_POST['prix']))));
            $nbLits = intval(trim(addslashes(htmlspecialchars($_POST['nbLits']))));
            $nbPers = intval(trim(addslashes(htmlspecialchars($_POST['nbPers']))));
            $confort = trim(addslashes(htmlspecialchars($_POST['confort'])));
            $image = $_FILES['image']['name'];
            $destination = "./assets/images/";
            move_uploaded_file($_FILES['image']['tmp_name'],$destination.$_FILES['image']['name']);
            $description = trim(addslashes(htmlspecialchars($_POST['description'])));
  
        
            $cha = new Chambre();
 
            $cha->setPrix($prix);
            $cha->setNbLits($nbLits);
            $cha->setNbPers($nbPers);
            $cha->setConfort($confort);
            $cha->setImage($image);
            $cha->setDescription($description);
            
            $nb = $this->driver->addChambre($cha);
            if($nb != 0){
                header('location:./index.php?action=list_cha');
            }else{
                echo 'nah ! l\'insertion n\'a pas marché...!';
            }
        }
        require_once('./views/backend/ajoutChambre.php');
    }

    public function supprimChambre($id,$image){
        $cha = new Chambre();
        $cha->setNumChambre($id);
        $cha->setImage($image);
        unlink('./assets/images/'.$cha->getImage());
        $this->driver->supChambre($cha);
        header('location:./index.php?action=list_cha');
    }

    public function edit($id){
        if(isset($_POST['submit']) && isset($_POST['confort']) && strlen($_POST['confort'])>=4 ){
            //$id = intval(trim(htmlspecialchars(addslashes($_POST['id']))));
            $prix = intval(trim(addslashes(htmlspecialchars($_POST['prix']))));
            $nbLits = intval(trim(addslashes(htmlspecialchars($_POST['nbLits']))));
            $nbPers = intval(trim(addslashes(htmlspecialchars($_POST['nbPers']))));
            $confort = trim(addslashes(htmlspecialchars($_POST['confort'])));
            $image = $_FILES['image']['name'];
            $destination = "./assets/images/";
            move_uploaded_file($_FILES['image']['tmp_name'],$destination.$_FILES['image']['name']);
            $description = trim(addslashes(htmlspecialchars($_POST['description'])));

            $cha = new Chambre();
            $cha->setNumChambre($id);
            $cha->setPrix($prix);
            $cha->setNbLits($nbLits);
            $cha->setNbPers($nbPers);
            $cha->setConfort($confort);
            $cha->setImage($image);
            $cha->setDescription($description);

            $this->driver->updateChambre($cha);
            header('location:./index.php?action=list_cha');

        }
        $data = $this->driver->editChambre($id);
        require_once('./views/backend/editCha.php');
    }
    

}


?>