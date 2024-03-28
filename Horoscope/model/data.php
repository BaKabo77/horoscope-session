<?php


function connexion(){

    $serveur='mysql:host=localhost:3306';
    $bdd='dbname=horoscope';
    $user='root';
    $mdp ='';
    try{
        $db = new PDO($serveur.';'.$bdd,$user,$mdp);
        $db->query("SET CHARACTER SET utf8");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }catch(Exception $e){
        echo 'Impossible de se connecter a la base de donnée';
        echo $e->getMessage();
        die();
    }
} 

function executerRequete($sql,$params = null){
    if($params == null){
        $resultat = connexion()->query($sql);
    }
    return $resultat;
}
