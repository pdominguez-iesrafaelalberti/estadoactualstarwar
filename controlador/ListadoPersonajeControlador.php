<?php
include "AbstractControlador.php";
include "./modelo/BasePersonaje.php";
include "./vista/ListadoPersonajeVista.php";

    class ListadoPersonajeControlador extends AbstractControlador{   
        
        function __construct()    {      
            //Obtengo el modelo actual
            $this->modelo = BasePersonaje::obtenerTodos();    
        }
        
        
        public function ejecuta(){        
            //Genero la Vista actual a partir del modelo        
            $personaje_vista = new ListadoPersonajeVista($this->modelo);        
            $personaje_vista->muestraHTML();    
        }}
    ?>