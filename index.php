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
                <div id='electionsEnCours' class='elections disabled'>
                    <div class='libelle'>
                        <p>Les élections se terminent dans :</p>
                        <div id="countdown" class='decompte'></div>
                    </div>
                    <?php 
                        if(isset($_SESSION['logged']) && $_SESSION['logged']){
                            echo"
                            <a href='vote' class='voteBtn'>Je vote !</a>
                            ";
                        } else {
                            echo"
                            <a href='connect' class='voteBtn'>Je vote !</a>
                            ";
                        }
                    ?>
                </div>
                <div id='prochainesElections' class='elections'>
                    <div class='libelle'>
                        <p>Les prochaines élections commencent dans :</p>
                        <div id="countdown" class='decompte'></div>
                    </div>
                    <a href='' class='voteBtn'>Je me tiens prêt !</a>
                </div>
            </section>
            <div class='separation'>
                <div class='line'></div>
            </div>
            <section class='progIndex' id='programme'>
                <h1>Liste des programmes</h1>
                <p>La liste des programmes ci-dessous est triée de manière aléatoire. 
                    L'ordre n'a aucune signification quant à la nature des partis présentés.</p>
                <div class='partisListe'>
                    <?php
                        $liste_affiches = getAffiches($mysqli);
                        shuffle($liste_affiches);
                        foreach($liste_affiches as $affiche) {
                            echo"
                                <a href='programme.php?id_c={$affiche['id_c']}' class='partiAffiche'>
                                    <img src='{$affiche['affiche_c']}' alt='Affiche du candidat {$affiche['nom_c']}' loading='lazy'>
                                    <p class='nomCandidat'>{$affiche['nom_c']}</p>
                                    <p class='partiCandidat'>{$affiche['parti_c']}</p>
                                </a>
                            ";
                        }
                    ?>
                </div>
            </section>
        </main>
        <?php include("static/footer.php"); ?>
        <script src="js/index.js"></script>
    </body>
</html>