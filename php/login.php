<?php
require_once("../includes/config-bdd.php");
require_once("functions-DB.php");
require_once("functions_query.php");

$mysqli = connectionDB();
$email = $_POST['courriel'];
$password = $_POST['mdp'];

$connect = connect($mysqli,$email,$password);

session_start();

if (isset($connect['id_u']) && password_verify($password,$connect['password'])){
    $_SESSION['email'] = "$email";
    $_SESSION['nom'] = "$connect[nom_u]";
    $_SESSION['prenom'] = "$connect[prenom_u]";
    $_SESSION['logged'] = true;
    $_SESSION['notifVote'] = false;
    header('Location: ../index');
}
else {
    header('Location: ../connect.php#error_connection');
}

closeDB($mysqli);
?>