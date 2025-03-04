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

if(!isset($_SESSION['logged']) || !$_SESSION['logged']){
    header('Location: index.php');
}

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
            <div class='dialogue'>
                <h3>Attention</h3>

                <div class='info'>
                    <h3>À la suite de ce panneau, vous allez accéder à la page de scrutin</h3>
                    <p><span>Pour procéder au vote :</span></p>
                    <p>• cliquer sur le candidat pour lequel pour souhaiter voter</p>
                    <p>• confirmer son choix</p>
                    <br>
                    <p>Une fois procédé, le vote sera comptabilisé sans possibilité de modification.</p>
                </div>
                <button onclick="dialogueOk()" class='btn' >J'ai compris</button>
            </div>
            <div class="page">
                <div class='container'>
                    <div class='entitle'>
                        <h1>Je vote</h1>
                        <p>La liste des programmes ci-dessous est triée par ordre alphabétique</p>
                    </div>
                <?php 
                    $liste_candidats = getAffiches($mysqli);
                    foreach($liste_candidats as $candidat) {
                        echo"
                            <div class='candidat'>
                                <div class='left'>
                                    <img src='{$candidat['affiche_c']}' alt='Affiche du candidat {$candidat['nom_c']}'>
                                    <div class='textContainer'>
                                        <p class='nom'>{$candidat['nom_c']}</p>
                                        <p class='parti'>{$candidat['parti_c']}</p>
                                    </div>
                                </div>
                                <div class='right'>
                                    <a href='php/avote.php?id_c={$candidat['id_c']}'>Voter</a>
                                </div>
                            </div>
                        ";
                    }
                ?>
                </div>
            </div>
        </main>
        <?php include("static/footer.php"); ?>
        <script>
            function dialogueOk() {
                document.querySelector('.dialogue').classList.add("disabled");
                document.querySelector('.page').classList.add("enabled");
            }
        </script>
    </body>
</html>