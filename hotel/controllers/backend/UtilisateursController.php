<?php
require_once('./communs/connect.php');
require_once('./models/driver/Driver.php');
require_once('./models/Utilisateurs.php');


class UtilisateursController{
    private $driver;
    public function __construct($base){
        $this->driver = new Driver($base);

    }
    public function login(){
        if(!empty($_POST['login']) && strlen($_POST['login'])>=4 && !empty($_POST['pass'])){
            $login = trim(htmlspecialchars(addslashes($_POST['login'])));
            $pass = md5(trim(htmlspecialchars(addslashes($_POST['pass']))));
            $utilisateurs =new Utilisateurs();
            $utilisateurs->setLogin($login);
            $utilisateurs->setPass($pass);
            
            
            $utilisateursObj = $this->driver->getUtilisateurs($utilisateurs);

            if($utilisateursObj->getId_util()!=0){
                
                $_SESSION['Auth']= array('login'=>$utilisateursObj->getLogin(),'pass'=>$utilisateursObj->getPass());
               
                header('location:index.php?action=accueil');
            }else{
                echo 'erreur';
            }
        }
        require_once('./views/backend/login.php');        
    }


    public function logout(){
        session_start();
        session_destroy();
        session_unset();

        header('location:index.php?action=login');
    }
}


?>