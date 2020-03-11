<?php

require_once('./communs/connect.php');
require_once('./controllers/backend/ChambreController.php');
require_once('./controllers/backend/ReservationController.php');
require_once('./controllers/frontend/AccueilController.php');
require_once('./controllers/backend/UtilisateursController.php');

class Router{
    private $ctrlCha;
    private $ctrlResa;
    private $ctrlPub;
    private $ctrlUtilisateurs;
    

    public function __construct($base){

        $this->ctrlCha = new ChambreController($base);
        $this->ctrlResa = new ReservationController($base);
        $this->ctrlPub = new AccueilController($base);
        $this->ctrlUtilisateurs = new UtilisateursController($base);
        
    }

    public function reqUrl(){
        if(isset($_GET['action'])){
            if($_GET['action']=='list_cha'){
            $this->ctrlCha->getChambres();
            
        }elseif($_GET['action']=='list_details'){
            
                $id = intval($_GET['id']);
               // $this->ctrlCha->getDetails($id);
               $this->ctrlCha->getDetails($id); 

                }elseif($_GET['action']=='ajout_chambre'){
            
                if($_SERVER['REQUEST_METHOD']==='POST'){
                    $this->ctrlCha->ajoutChambre(); 
            }else{
                $this->ctrlCha->ajoutChambre(); 
            }
        }elseif($_GET['action']=='sup_cha'){
            if(isset($_GET['id']) && isset($_GET['image'])){
                $id = intval(htmlspecialchars($_GET['id']));
                $image = htmlspecialchars($_GET['image']);
                $this->ctrlCha->supprimChambre($id,$image);
            }
            
        }elseif($_GET['action'] == 'edit_cha'){
            if(isset($_GET['id'])){
                $id = intval($_GET['id']);
                if($id != 0){
                    if($_SERVER['REQUEST_METHOD'] === 'POST'){
                        $this->ctrlCha->edit($id);
                    }
                    $this->ctrlCha->edit($id);
                }
            }
        }elseif($_GET['action'] == 'list_resa'){
            $this->ctrlResa->getReservation();

        }elseif($_GET['action']=='sup_resa'){
            if(isset($_GET['numChambre']) && isset($_GET['numClient'])){
                $numChambre = intval(htmlspecialchars($_GET['numChambre']));
                $numClient = intval(htmlspecialchars($_GET['numClient']));
                
                $this->ctrlResa->supprimReservation($numChambre,$numClient);
            }
            
        }elseif($_GET['action']=='ajout_resa'){
            if($_SERVER['REQUEST_METHOD']==='POST'){
                $this->ctrlResa->ajoutReservation(); 
        }else{
            $this->ctrlResa->ajoutReservation(); 
        }
        }elseif($_GET['action']=='edit_resa'){
            if(isset($_GET['numChambre']) && isset($_GET['numClient'])){
                $numChambre = intval(htmlspecialchars($_GET['numChambre']));
                $numClient = intval(htmlspecialchars($_GET['numClient']));
                if($numChambre != 0 && $numClient != 0){
                    if($_SERVER['REQUEST_METHOD']==='POST'){
                        $this->ctrlResa->editResa($numChambre,$numClient);
                        
                    }
                    $this->ctrlResa->editResa($numChambre,$numClient);
                }
            }
        }elseif($_GET['action']=='accueil'){
            $this->ctrlPub->accueil();

        }elseif($_GET['action']=='details'){
            if(isset($_GET['numChambre'])){
    
                    
                $numChambre = intval(htmlspecialchars($_GET['numChambre']));

                $this->ctrlPub->detailCham($numChambre);
            }
        }elseif($_GET['action'] == 'resClient'){

        $numChambre = intval(htmlspecialchars($_GET['numChambre']));
        
            $this->ctrlPub->ajClient($numChambre);
        

        }else if($_GET['action'] == 'recapReserv'){

            $this->ctrlPub->recapReserv();
                    
        }
        $this->ctrlPub->accueil();

        }
                        

    }
        
    }
    

?>