<?php

function getAffiches($mysqli){
    $requete = "SELECT id_c,nom_c,affiche_c,parti_c
                FROM candidatures
                ORDER BY id_c ASC
                ";
    $liste_affiches = readDB($mysqli,$requete);
    return $liste_affiches;
}

function connect($mysqli,$email,$password){
    $requete1 = "SELECT *
                FROM utilisateur 
                WHERE email_u = '$email';";
    $connect = readDB($mysqli,$requete1);
    return $connect[0];
}

function register($mysqli,$email,$nom,$prenom,$password){
    $requete = "INSERT INTO utilisateur(email_u, nom_u, prenom_u, password) 
                VALUES ('$email', '$nom', '$prenom', '$password');";
    $register = writeDB($mysqli,$requete);
    return $register;
}

function getCandidat($mysqli,$id_c){
    $requete = "SELECT *
                FROM candidatures
                WHERE id_c = '$id_c';";
    $candidat = readDB($mysqli,$requete);
    return $candidat[0];
}


?>