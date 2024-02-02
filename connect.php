<?php


header("Access-Control-Allow-Origin: https://voiture-9f60e14ea612.herokuapp.com/");
header("Content-Type: application/json");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Credentials: true");

//fonction connexion à la base de données.
function getConnect(){
    $dsn = "mysql:host=eu-az-sql-serv1.database.windows.net;dbname=d02iyw3wnydhtt2;port=3308";
    $username = "ub9lx6wtd4c91xf";
    $password = `DDJEDH&OFqhukV\$oS26b@k5oE`;
 
    try {
       $pdo = new PDO($dsn, $username, $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $pdo;
    } catch (PDOException $e) {
       // l'erreur de connexion.
       echo "Erreur de connexion à la base de données : " . $e->getMessage();
       return false;
    }
 }