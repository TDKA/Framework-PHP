<?php

//"Controller" is a bridge between the "Model" and the "View" : The Controller will ask the "Model"" for data, analyse it, make decisions and send the text to be displayed to the view.

namespace Controllers;

abstract class Controller {

   //"protected" for allow us to use this variable in outside of this class

   // "$model" - Serve is to create new instance of the CLASSS
    protected  $model;

    //name of the (new) CLASS 
    protected $modelName;

     public function __construct() {

        //Create new instance of Model
        $this->model = new $this->modelName();

     }

}


?>