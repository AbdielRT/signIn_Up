<?php
// initialisation de l'affichage des erreurs (developpement only)
    ini_set('display errors',1);
    error_reporting(E_ALL);

    if(!empty($_GET["page"])){
        $page = $_GET["page"];
    } else {
        $page = 'login';
    }
    
    require_once 'parts/header.php';

    if (file_exists("./{$page}.php")){
        require_once "./{$page}.php";
    } else {
        require_once "./views/404.php";
    }

    require_once 'parts/footer.php';