<?php
    namespace Model;

    //class "Example" extends "Model" if it needs a $table = (dbTableName)
    class Example {^
        
            //Declare $pdo 
        protected $pdo;

            //Here i specify the name of the dbTable "examples":
        protected $table = "examples";




        //
        //PDO
        public function __construct() {
        
        $this->pdo = \Database::getPdo();

        }





    }


?>