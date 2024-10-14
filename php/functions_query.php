<?php

// function getImages($mysqli,$type){
//     $requete = "SELECT *
//                 FROM images
//                 WHERE chemin LIKE '%img/$type/%'
//                 ORDER BY ordre ASC
//                 ";
//     $liste_images = readDB($mysqli,$requete);
//     return $liste_images;
// }

function connect($mysqli,$email,$password){
    $requete1 = "SELECT *
                FROM utilisateur 
                WHERE email_u = '$email'
                AND password = '$password' ;";
    $connect = readDB($mysqli,$requete1);
    return $connect[0];
}


?>