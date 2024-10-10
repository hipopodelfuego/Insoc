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
        <title>S'inscrire - Scrutin électronique</title>
        <?php include("static/head.php")?>
    </head>
    <body>
        <?php include("static/header.php"); ?>
        <main>
            <form action="php/register.php" method="POST" class='registerForm'>
                <h1>Créer un compte</h1>

                <div class='info'>
                    <p>Les <span>informations</span> demandées sont <span>obligatoires</span></p>
                </div>

                <h3>Quelle est votre adresse email personnelle ?</h3>

                <label for="email" class='exemple'>nom@exemple.com</label>
                <input type="email" name="courriel" id="email" required>

                
                <h3>Choisir votre mot de passe</h3>

                <div class='info'>
                    <h3>Pour créer votre mot de passe, utiliser :</h3>
                    <p>• au moins <span>8 caractères</span></p>
                    <p>• au moins <span>1 lettre en majuscule</span></p>
                    <p>• au moins <span>1 lettre en minuscule</span></p>
                    <p>• au moins <span>1 chiffre</span></p>
                </div>

                <label for="password">Mot de passe</label>
                <input type="password" name="mdp" id="password" required>
                <label for="c_password">Confirmez votre mot de passe</label>
                <input type="password" name="c_mdp" id="c_password" required>

                <h3>Conditions générales d'utilisation</h3>
                <div class='coche'>
                    <input type="checkbox" name="cgu" id="condition" >
                    <label for="condition">J'accepte les conditions générales d'utilisation</label>
                </div>
            </form>
        </main>
        <?php include("static/footer.php"); ?>
        <script src="js/index.js"></script>
    </body>
</html>