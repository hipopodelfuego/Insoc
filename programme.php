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
        <style>
            .pdf-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }
            .pdf-viewer {
                width: 100%; 
                max-width: 800px; 
                height: 700px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); 
            }
        </style>
    </head>
    <body>
        <?php include("static/header.php"); ?>
        <main>
            <div class="pdf-container">
                <embed src="<?php echo 'css/pdf/arthaud.pdf'; ?>" type="application/pdf" class="pdf-viewer">
            </div>
        </main>
        <?php include("static/footer.php"); ?>
        <script src="js/index.js"></script>
    </body>
</html>
