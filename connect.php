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
        <title>Se connecter - Scrutin électronique</title>
        <?php include("static/head.php")?>
    </head>
    <body>
        <?php include("static/header.php"); ?>
        <main>
            <form action="php/login.php" method="POST" class='connectForm'>
                <h1>Se connecter</h1>

                <label for="email">Votre email personnel</label>
                <label for="email" class='exemple'>Par exemple : nom@exemple.com</label>
                <input type="email" name="courriel" id="email" required>
                <label for="password">Votre mot de passe</label>
                <input type="password" name="mdp" id="password" required>

                <div class='formBtn'>
                    <a href=''><span>Mot de passe oublié ?</span> →</a>
                    <a href='inscription'><span>Pas encore de compte ?</span> →</a>
                </div>
                
                <input type="submit" value="Se connecter" id="bouton_submit">
            </form>
        </main>
        <?php include("static/footer.php"); ?>
        <script src="js/index.js"></script>
    </body>
</html>