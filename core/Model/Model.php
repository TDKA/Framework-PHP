<?php

//"Model" manages the data of your site. Its role is to retrieve the "raw" information from the database, organise it and assemble it so that it can then be processed by the "Controller"

namespace Model;


abstract class Model {


    protected $pdo;

    protected $table;

    // 
    public function __construct() {
        
        //Call PDO from class "Database" and use its function getPdo();
        $this->pdo = \Database::getPdo();
    }

    
    /**
     * find SOMETHING from its id and 
     * return an array of THIS SOMETHING that contains the ID of this SOMETHING  or it returns a boolean if SOMETHING don't exist
     * @param int
     * @return array|bool 
     */
    public function find(int $id) {

        $requete = $this-> pdo-> prepare("SELECT * FROM  {$this->table} WHERE id = :id");

        $requete->execute(['id' => $id]);

        $item = $requete->fetch() ;

        return $item; 

    }


        
    /**
     * return an array that contains ALL ELEMENTS from the table $table
     * 
     * @return array
     * 
     */
    public function findAll() :array {

        $result = $this->pdo -> query("SELECT * FROM {$this->table}");

        $items = $result -> fetchAll();

        return $items;
    }

    

    /**
     * Delete garage by its ID
     * 
     * @param int $garage_id
     * @return void 
     * 
     */
    public function delete(int $id): void {

        $delete = $this-> pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");

        $delete->execute(['id' => $id]);


    }



}               



?>


