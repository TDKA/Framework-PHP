
<?php


class Http {

    /**
     * redirect to the url in parameter
     * 
     *  use it when i want to be redirected to other page or just to stay on the same page
     * 
     * @param string
     */

 public static function redirect(string $url): void {

        header("Location:".$url);

        //\Http::redirect('url where i want to we redirected); -> 
    
    }

}


?>