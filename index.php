<?php

require_once('./util.php');

try{

    if (!empty($_GET['page'])) {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
       
        
     if($url[0] === "voiture") {
             getData();  
            
            }
        }
}catch(Exception $exception){
    $erreur = [
        "message" => $exception->getMessage(),
        "code" => $exception->getCode()
    ];
}
