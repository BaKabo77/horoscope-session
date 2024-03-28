<?php
include 'data.php';



function getConexion($cnx,$mdp)
{
    $sql = "SELECT COUNT(*) as nb FROM connexion WHERE login='$cnx' and mdp='$mdp'";
            return executerRequete($sql)->fetch();
}

function getUser($cnx,$mdp){
    $sql = "SELECT * FROM `connexion` WHERE login='$cnx' AND mdp ='$mdp'";
        return executerRequete($sql)->fetch();
}

function getLesSignes(){
    $sql = "SELECT * FROM astrologie ";
        return executerRequete($sql)->fetchAll();
}

function getLeSigne($choix){
    $sql = "SELECT horoscope FROM astrologie WHERE signe ='$choix';";
            return executerRequete($sql)->fetch();

}

function getStatus($cnx,$mdp){
    $sql ="SELECT rôle FROM `connexion` WHERE login='$cnx' AND mdp ='$mdp'";
            return executerRequete($sql)->fetch();
}


