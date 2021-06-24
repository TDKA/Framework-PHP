<?php 



class Database {

    //getPdo() allow us to connect to our database and return $pdo -> so i can use it in "Model";

  public static function getPdo() {
    
        $pdo = new PDO('mysql:host=localhost:3304; dbname=garage', 'garage', 'garage', [
        
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
    
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
        return $pdo;
    }



}





?>