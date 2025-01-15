<?php
require_once("../includes/config-bdd.php");
require_once("functions-DB.php");
require_once("functions_query.php");

session_start();

if (isset($_GET['id_c']) && isset($_SESSION['logged']) && $_SESSION['logged']) {
    $candidat = $_POST['id_c'];
    $_SESSION['notifVote'] = true;
    header('Location: ../index.php');
}
else {
    header('Location: ../index.php');
}




?>