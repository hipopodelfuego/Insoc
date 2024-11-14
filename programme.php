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
        <title>Programme</title>
        <?php include("static/head.php")?>
    </head>
    <body>
        <?php include("static/header.php"); ?>
        <main>
            <div style="width: 100%; height: 480px;" class="smallpdf-widget" data-pdf-url="css/pdf/arthaud.pdf"></div>
            <script src="https://smallpdf.com/api/embed-widget.js"></script>
        </main>
        <?php include("static/footer.php"); ?>
        <script src="js/index.js"></script>
    </body>
</html>