<?php


require_once('AuthController.php');

if(!AuthController::isLogged()){
    header('location:index.php?action=login');
}

?>