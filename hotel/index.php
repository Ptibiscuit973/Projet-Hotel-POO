<?php
require_once('./communs/connect.php');
require_once('./app/router.php');
$router = new Router($base);
$router->reqUrl();




?>