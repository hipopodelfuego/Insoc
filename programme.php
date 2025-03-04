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

$candidat=getCandidat($mysqli,$_GET['id_c']);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Programme - Scrutin électronique</title>
        <?php include("static/head.php")?>
    </head>
    <body>
        <?php include("static/header.php"); ?>
        <main>
            <div class="pdf-container">
                <div class='programmeTitle'><?php echo "{$candidat['nom_c']}"; ?></div>
                <div class='programmeParti'><?php echo "{$candidat['parti_c']}"; ?></div>
                <embed src="<?php echo "{$candidat['programme_c']}"; ?>" type="application/pdf" class="pdf-viewer">
            </div>
        </main>
        <?php include("static/footer.php"); ?>
        <script src="js/index.js"></script>
    </body>
</html>
