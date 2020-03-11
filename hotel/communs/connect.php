<?php


$serveur = "localhost";
$user = "root";
$pass = "";
$bdd= "hotel";
$port = "3306";

try{
    //code...
    $base = new PDO('mysql:host='.$serveur.';port='.$port.';dbname='.$bdd,$user,$pass);
   echo 'connexion reussie';
}catch (Exception $e){
    //throw $th;
    echo $e->getMessage();
}



?>