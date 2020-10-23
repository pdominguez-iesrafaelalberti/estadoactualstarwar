<?php

   include "AbstractControlador.php";
   include "./modelo/BasePersonaje.php";
   include "./vista/VerPersonajeVista.php";
   
       class VerPersonajeControlador extends AbstractControlador {   
   
           function __construct($id)    {      
               //Obtengo el modelo actual
               $this->modelo = BasePersonaje::obtener($id);
               
           }
           
           
           public function ejecuta(){        
               //Genero la Vista actual a partir del modelo        
               $ver_personaje_vista = new VerPersonajeVista($this->modelo);
               $ver_personaje_vista->muestraHTML();


           }}
       ?>