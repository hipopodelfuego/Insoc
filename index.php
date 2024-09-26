<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once("includes/config-bdd.php");
require_once("php/functions-DB.php");
require_once("php/functions_query.php");
$mysqli = connectionDB();
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil - Scrutin électronique</title>
        <?php include("static/head.php")?>
    </head>
    <body>
        <?php include("static/header.php"); ?>
        <main>
            <section class='electionsBackground'>
                <div class='elections'>
                    <a href='' class='voteBtn'>Je vote</a>
                    <div id="countdown" class='decompte'></div>
                </div>
            </section>
        </main>
        <?php include("static/footer.php"); ?>
        <script src="js/index.js"></script>
    </body>
</html>