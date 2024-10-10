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
                    <a href=''><span>Pas encore de compte ?</span> →</a>
                </div>
                
                <input type="submit" value="connexion" id="bouton_submit">
            </form>
            
            <!-- <form action="php/register.php" method="POST" class='resgisterForm'>
                <h2>Ou créer vos identifiants Service-Public.fr</h2>

                <p class='info'>Les informations demandées sont obligatoires</p>

                <label for="email">Quelle est votre adresse email personnelle ?</label>
                <label for="email" class='exemple'>nom@exemple.com</label>
                <input type="email" name="courriel" id="email" required>

                
                <label for="password">Choisir votre mot de passe</label>

                <p class='info'>Pour créer votre mot de passe, utiliser :

                • au moins 8 caractères
                • au moins 1 lettre en majuscule
                • au moins 1 lettre en minuscule
                • au moins 1 chiffre</p>
                <input type="password" name="mdp" id="password" required>

                <label for="condition">J'accepte les conditions générales d'utilisation</label>
                <input type="checkbox" name="cgu" id="condition" >
            </form> -->
        </main>
        <?php include("static/footer.php"); ?>
        <script src="js/index.js"></script>
    </body>
</html>