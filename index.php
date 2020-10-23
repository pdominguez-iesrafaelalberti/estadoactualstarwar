<?php


/*
$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$requestString = substr($requestUrl, strlen($baseUrl));
$urlParams = explode('/', $requestString);
print_r($urlParams);*/

switch (isset($_GET['action'])) {
    case 'ver':
        $id = $_GET['id'];
            echo  $id;
            require "controlador/VerPersonajeControlador.php";
            $controlador = new VerPersonajeControlador($id);
            $controlador->ejecuta();
        break;
    case 'otra_Action':
       //TODO
        break;
    default:
        //Cargamos las dependencias
        require "controlador/ListadoPersonajeControlador.php";
        $controlador = new ListadoPersonajeControlador();
        $controlador->ejecuta();
    
}


?>