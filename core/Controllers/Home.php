<?php

    namespace Controllers;


    //class Home "extends" Controller if it needs a "model"
    class Home {


        /**
         * 
         * Show home page of the framework
         * 
         */
        public function index() {

            $message = "WELCOME TO MY DOC PHP";

        
            $messageChange = "Change this message by using the form :";
            $titlePage = "WELCOME TO MY FRAMEWORK PHP";

            if(!empty($_POST['messageChange']) ) {
                $messageChange = $_POST['messageChange'];
            }

            \Rendering::render('home/home', compact('message','messageChange','titlePage')); // render('template/fileName', compact('variableToTake', 'variableToTake'))

        }
    }



?>

