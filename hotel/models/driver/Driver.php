<?php


class Driver{
    protected $base;


    public function __construct($base){
        $this->base = $base;
    }
    public function listeChambre(){
        $sql = "SELECT * FROM chambre";
        $res = $this->base->prepare($sql);
        $res->execute();
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $res->closeCursor();
        $donnees = [];
        $compteur = 0;
        foreach($rows as $row){
            $cha = new Chambre();
            $cha->setNumChambre($row->numChambre); 
            $cha->setPrix($row->prix); 
            $cha->setNbLits($row->nbLits); 
            $cha->setNbPers($row->nbPers); 
            $cha->setConfort($row->confort); 
            $cha->setImage($row->image); 
            $cha->setDescription(htmlspecialchars_decode(stripslashes($row->description))); 
            
            $donnees[$compteur++] =$cha; 
        }
        return $donnees;

    }

    public function detailsChambre($id){
        
        $sql = "SELECT * FROM chambre WHERE numChambre = ?";
        $res = $this->base->prepare($sql);
        $res->execute([$id]);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $res->closeCursor();
        $donnees = [];
        $compteur = 0;
        foreach($rows as $row){
            $cha = new Chambre();
            $cha->setNumChambre($row->numChambre); 
            $cha->setPrix($row->prix); 
            $cha->setNbLits($row->nbLits); 
            $cha->setNbPers($row->nbPers); 
            $cha->setConfort($row->confort); 
            $cha->setImage($row->image); 
            $cha->setDescription(htmlspecialchars_decode(stripslashes($row->description))); 
            
            $donnees[$compteur++] =$cha; 
        }
        return $donnees;
       
    }
        public function addChambre(Chambre $cha){
        $sql= "INSERT INTO chambre(prix,nbLits,nbPers,confort,image,description) VALUES (?,?,?,?,?,?)";
        $res= $this->base->prepare($sql);
        $tabreq = [$cha->getPrix(),$cha->getNbLits(),$cha->getNbPers(),$cha->getConfort(),$cha->getImage(),$cha->getDescription()];
        $res->execute($tabreq);

        return $this->base->lastInsertId();

    }

    public function supChambre(Chambre $cha){
        $sql = "DELETE FROM chambre WHERE numChambre = ?";
        $res = $this->base->prepare($sql);
        $res->execute([$cha->getNumChambre()]);
    }


    public function editChambre($id){
        $sql = "SELECT * FROM chambre WHERE numChambre = ?";
        $res = $this->base->prepare($sql);
        $res->execute([$id]);
        $data = $res->fetch(PDO::FETCH_OBJ);
        $cha = new Chambre();
            $cha->setNumChambre($data->numChambre); 
            $cha->setPrix($data->prix); 
            $cha->setNbLits($data->nbLits); 
            $cha->setNbPers($data->nbPers); 
            $cha->setConfort($data->confort); 
            $cha->setImage($data->image); 
            $cha->setDescription($data->description);
            return $cha;

    }
    
    public function updateChambre(Chambre $cha){
        if($cha->getImage() == ""){
            $sql = "UPDATE chambre SET prix =?,nbLits =?,nbPers =?,confort =?, description =? WHERE numChambre =".$cha->getNumChambre();
            $res = $this->base->prepare($sql);
            $tabCha = [$cha->getPrix(),$cha->getNbLits(),$cha->getNbPers(),$cha->getConfort(),$cha->getDescription()];
        }else{
            $sql ="UPDATE chambre SET prix =?,nbLits =?,nbPers =?,confort =?,image= ?, description =? WHERE numChambre =".$cha->getNumChambre();
            $res = $this->base->prepare($sql);
            $tabCha = [$cha->getPrix(),$cha->getNbLits(),$cha->getNbPers(),$cha->getConfort(),$cha->getImage(),$cha->getDescription()];
        }
        $res->execute($tabCha);
        if($res){
            header('location:list_cha');
        }else{
            echo 'erreur lors de la mise à jour';
        }
    }

    public function listeReservation(){
        $sql = "SELECT * FROM reservation";
        $res = $this->base->prepare($sql);
        $res->execute();
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $res->closeCursor();
        $donnees = [];
        $compteur = 0;
        foreach($rows as $row){
            $resa = new Reservation();
            $resa->setNumClient($row->numClient); 
            $resa->setNumChambre($row->numChambre); 
            $resa->setDateArrivee($row->dateArrivee); 
            $resa->setDateDepart($row->dateDepart); 

            
            $donnees[$compteur++] =$resa; 
        }
        return $donnees;

    }

    public function supReservation(Reservation $resa){
        $sql = "DELETE FROM reservation WHERE numChambre = ? AND numClient = ?";
        $res = $this->base->prepare($sql);
        $res->execute([$resa->getNumChambre(),$resa->getNumClient()]);
    }

    public function addReservation(Reservation $resa){
        $sql= "INSERT INTO reservation(numChambre,numClient,dateArrivee,dateDepart) VALUES (?,?,?,?)";
        $res= $this->base->prepare($sql);
        $tabResa = [$resa->getNumChambre(),$resa->getNumClient(),$resa->getDateArrivee(),$resa->getDateDepart()];
        $res->execute($tabResa);

        return $this->base->lastInsertId();

    }

    public function editReservation($numChambre,$numClient){
        $sql = "SELECT * FROM reservation WHERE numChambre = ? AND numClient= ?";
        $res = $this->base->prepare($sql);
        $res->execute([$numChambre,$numClient]);
        $data = $res->fetch(PDO::FETCH_OBJ);
        $resa = new Reservation();
        $resa->setNumChambre($data->numChambre);
        $resa->setNumClient($data->numClient);
        $resa->setDateArrivee($data->dateArrivee);
        $resa->setDateDepart($data->dateDepart);

        return $resa;
    }

    public function updateReservation(Reservation $resa){
        
            $sql = "UPDATE reservation SET dateArrivee = ?, dateDepart = ? WHERE numClient =".$resa->getNumClient()." AND numChambre=".$resa->getNumChambre();
            $tabResa = [$resa->getDateArrivee(), $resa->getDateDepart()];
            $res = $this->base->prepare($sql); 

        $res->execute($tabResa);
        if($res){
            header('location:list_resa');
        }else{
            echo "Erreur lors de la mise a jour !";
        }
    }

    public function getUtilisateurs(Utilisateurs $utilisateurs){
        
          $sql = "SELECT * FROM utilisateurs WHERE login = :login  AND pass = :pass";
        $res = $this->base->prepare($sql);
        $res->execute(array('login'=>$utilisateurs->getId_util(),'pass'=>$utilisateurs->getPass()));
        
        if($res){
        $row = $res->fetch();
       
        $newUtilisateurs = new Utilisateurs();
            $newUtilisateurs->setId_util($row['id']);
            $newUtilisateurs->setLogin($row['login']);
            
            return $newUtilisateurs;
        }  
        
        
    }

    public function detailsCha($numChambre){ // detail chambre 
        $sql = "SELECT * FROM chambre WHERE numChambre= ?";
        $res = $this->base->prepare($sql);
        $res->execute([$numChambre]);
        $data = $res->fetch(PDO::FETCH_OBJ);

        $cham = new Chambre();
        $cham->setNumChambre($data->numChambre);
        $cham->setPrix($data->prix);
        $cham->setNbLits($data->nbLits);
        $cham->setNbPers($data->nbPers);
        $cham->setConfort($data->confort);
        $cham->setImage($data->image);
        $cham->setDescription($data->description);
        //$cham->setStatut($data->statut);
        
        return $cham;
        $res->closeCursor();
    }

    public function ajoutClient(Client $cli){
        $sql = "INSERT INTO client ( nom, prenom, tel, adresse) VALUES( ?, ?, ?, ?)";
        $res = $this->base->prepare($sql);
        $tabreq = [$cli->getNom(), $cli->getPrenom(), $cli->getTel(), $cli->getAdresse()];
        $res->execute($tabreq);
        return $this->base->lastInsertId();
    }
    

}


?>