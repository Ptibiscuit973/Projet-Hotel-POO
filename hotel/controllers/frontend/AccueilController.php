<?php

require_once('./communs/connect.php');
require_once('./models/driver/Driver.php');
require_once('./models/Chambre.php');
require_once('./models/Client.php');
require_once('./models/Reservation.php');



require_once('./assets/librairies/stripe/vendor/autoload.php');


class AccueilController{
    private $driver;

    public function __construct($base){
        $this->driver = new Driver($base);
    }

    public function accueil(){
        $data = $this->driver->listeChambre();
        $data2 = $this->driver->listeReservation();
        require_once('./views/frontend/accueil.php');
    }

    public function ajClient($numChambre){
        $data = $this->driver->detailsCha($numChambre);
        /*if(isset($_POST['reserver']) && !empty($_POST['nom'])&& !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['adresse']) && !empty($_POST['dateArrivee']) && !empty($_POST['dateDepart'])){
            $nom = trim(addslashes(htmlentities($_POST['nom'])));
            $prenom = trim(addslashes(htmlentities($_POST['prenom'])));
            $tel = (int)trim(addslashes(htmlentities($_POST['telephone'])));
            $adresse = trim(addslashes(htmlentities($_POST['adresse'])));
               
            $numChambre = $_GET['numChambre'];
            $dateArrivee = ($_POST['dateArrivee']);
            $dateDepart = ($_POST['dateDepart']);

            //var_dump($_POST);
            $resCli = new Client();
            $resCli->setNom($nom);
            $resCli->setPrenom($prenom);
            $resCli->setTel($tel);
            $resCli->setAdresse($adresse);

            $numClient = $this->driver->ajoutClient($resCli);
            //var_dump($numClient); die;
            header('location:index.php?action=recapReserv&numClient='.$numClient.'&numChambre='.$numChambre.'&dateArrivee='.$dateArrivee.'&dateDepart='.$dateDepart.'&prix='.$data->getPrix());
            
        }*/
        require_once('./views/frontend/reservClient.php');
    }

    public function recapReserv(){
        //$data = $this->driver->detailCham($numChambre);
        var_dump($_GET);
        if(!empty($_GET['numClient'])&& !empty($_GET['numChambre']) && !empty($_GET['prix']) && !empty($_GET['dateArrivee']) && !empty($_GET['dateDepart'])){
            $numClient = $_GET['numClient'];
            $prix = $_GET['prix'];  
            $numChambre = $_GET['numChambre'];
            $dateArrivee = ($_GET['dateArrivee']);
            $dateDepart = ($_GET['dateDepart']);

            $resCli = new Reservation();
            $resCli->setNumClient($numClient);
            $resCli->setNumChambre($numChambre);
            $resCli->setDateArrivee($dateArrivee);
            $resCli->setDateDepart($dateDepart);

            $data = $this->driver->addReservation($resCli);
        }

        require_once('./views/frontend/detailReserv.php');
    }

    public function detailCham($numChambre){
        $data = $this->driver->detailsCha($numChambre);
        require_once('./views/frontend/detailsChambre.php');
    }


/*
    public function checkout(){
        if(isset($_GET['numChambre']) && !empty($_GET['numChambre'])){
            $numChambre = $_GET['numChambre'];
            $prix = $_GET['prix'];
            $modele = $_GET['modele'];
            $image = $_GET['image'];
        }
        require_once('./views/frontend/checkout.php');
    }

    public function payement(){

   
    //var_dump($_POST['stripeToken']);
    if(isset($_POST['stripeToken'])&& !empty($_POST['stripeToken'])){
    $token = $_POST['stripeToken'];
    $prix = $_POST['prix'];
    $id = $_POST['id'];
    \Stripe\Stripe::setApiKey('sk_test_P4FgV59nkSxs8WV9xCP30ahj00ptDSq1Vs');
    $charge = \Stripe\Charge::create([
        'amount'=>50,
        'currency'=>'eur',
        'description'=>'Chambre d\'hotel',
        'source'=>$token
    ]);
    }


    if($charge){
        
        $resa = new Reservation();
        $resa->setStatut(0);
        $resa->setId($id);
        $this->driver->changerStatut($resa);
        header('location:./index.php');
    }

    }
*/
}
?>