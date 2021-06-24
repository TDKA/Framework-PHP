<?php

    // "spl_autoload_register need a function for parametre"
    spl_autoload_register(function($nomDeClass){

        
        //require_once "core/Controllers/Garage.php";
        //str_replace() replacing the '\\' with '/' (for Windows) on Linux it works without changing the slashes 

        $nomDeClass = str_replace("\\", "/", $nomDeClass);
   
        
        require_once "core/$nomDeClass.php";

    });



?>