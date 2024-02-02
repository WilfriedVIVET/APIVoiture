<?php

require_once("./connect.php");

//Fonction sendJSON.
function sendJson($data){
    $data = json_encode ($data,JSON_UNESCAPED_UNICODE);
    echo $data;
}

//Fonction qui récupére les informations compléte des voitures.
function getData(){
    try{
        $pdo = getConnect();
    if($pdo){
        $req = "SELECT * from voiture";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $result= $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        sendJson($result);
        
    }else{
        echo "connection à la bdd échouée";
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
} finally {
        // Fermeture de la connexion PDO 
        if ($pdo) {
        $pdo = null;
       }
   }
}