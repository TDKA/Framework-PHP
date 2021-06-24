<?php


class Rendering {

/**
 * generates data rendering 
 * Render a template and return the result.
 * 
 * @param string $template - name of the folder in templates
 * @param array $data
 * 
 */
    public static function render(string $template, array $data):void {

    //"extract()" Checks each key to see whether it has a valid variable name. It also checks for collisions with existing variables in the symbol table.
    extract($data);

    //
    ob_start();

     require_once "templates/".$template.".html.php";

    $contentOfThePage = ob_get_clean();

    require_once "templates/layout.html.php";

    

    }
}



?>