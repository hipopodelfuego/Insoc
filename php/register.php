<?php
require_once("../includes/config-bdd.php");
require_once("functions-DB.php");
require_once("functions_query.php");

$mysqli = connectionDB();
$email = $_POST['courriel'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['mdp'];
$cgu = $_POST['cgu'];

$hash = password_hash("$password", PASSWORD_BCRYPT, ['cost' => 10]);
// $check = checking_mail($mysqli,$email);
$register = register($mysqli,$email,$nom,$prenom,$hash);

session_start();

if($register){
    $_SESSION['email'] = "$email";
    $_SESSION['nom'] = "$connect[nom_u]";
    $_SESSION['prenom'] = "$connect[prenom_u]";
    $_SESSION['logged'] = true;
    header('Location: ../index.php');
}
else {
    header('Location: ../connect.php#error_connection');
}

closeDB($mysqli);
?>