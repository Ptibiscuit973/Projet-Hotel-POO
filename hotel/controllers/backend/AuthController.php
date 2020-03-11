<?php
session_start();
class AuthController{
    static function isLogged(){
      if(isset($_SESSION['Auth'])){
        return true;
    }else{
        return false;
    }  
    }
    
}


?>