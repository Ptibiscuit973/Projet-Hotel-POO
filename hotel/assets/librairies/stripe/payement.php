<?php
require_once('../administration/connect.php');
require_once('../administration/autoload.php');
require_once('vendor/autoload.php');
//var_dump($_POST['stripeToken']);
if(isset($_POST['stripeToken'])&& !empty($_POST['stripeToken'])){
$token = $_POST['stripeToken'];
$prix = $_POST['prix'];
$id = $_POST['id'];
\Stripe\Stripe::setApiKey('sk_test_P4FgV59nkSxs8WV9xCP30ahj00ptDSq1Vs');
$charge = \Stripe\Charge::create([
    'amount'=>50,
    'currency'=>'eur',
    'description'=>'ventes de vehicules',
    'source'=>$token
]);
}


if($charge){
    $driver = new Driver($base);
    $veh = new Vehicules();
    $veh->setStatut(0);
    $veh->setId($id);
    $driver->changerStatut($veh);
    header('location:../index.php');
}
var_dump($charge);


?>