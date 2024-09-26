<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once("includes/config-bdd.php");
require_once("php/functions-DB.php");
require_once("php/functions_query.php");
require_once("php/functions_structure.php");
$mysqli = connectionDB();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Laïcan - Mentions légales</title>
        <link rel="icon" href="css/img/general/icon.png" >
        <meta name="keywords" content="Damien Vailland, Freelance, freelance, rennes, Graphiste, Graphisme, Design, Designer, Rennes, Logo, Vailland, Damien, Graphic, Art, Bretagne, Logos, affiche, affiches, créations, création, creation, creation">
        <meta name="description" content="Laïcan - Damien Vailland | Graphisme & Art | Designer Graphique Freelance localisé à Rennes" />
        <meta name="author" content="Damien Vailland">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <?php include("static/header.php"); ?>
            <div id="progressBar"></div>
            <?php include("static/nav.php"); ?>
            <main>
                <div id="mentionsLegales">
                    <p class="artworkTitle">ÉDITION DU SITE</p>
                    <p class="artworkDesc">
                    <br>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique,
                    <br>il est précisé aux utilisateurs du site internet <b>https://www.laican.fr</b> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :
                    <br>
                    <br>Propriétaire du site : <b>Damien Vailland</b> - Adresse : 35000 RENNES
                    <br>Identification de l'entreprise : <b>Laïcan <i>(Damien Vailland)</i></b> - SIRET : 94755038000010 - Adresse postale : 35000 RENNES
                    <br>Directeur de la publication : <b>Damien Vailland</b>
                    <br>Hébergeur : <b>Laïcan <i>(Damien Vailland)</i></b> 35000 RENNES
                    <br>Délégué à la protection des données : <b>Damien Vailland</b>
                    </p>
                    
                    <p class="artworkTitle">PROPRIÉTÉ INTELLECTUELLE ET CONTREFAÇONS</p>
                    <p class="artworkDesc">
                    <br><b>Damien Vailland</b> est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.
                    <br>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de <b>Damien Vailland</b>.
                    <br>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.


                    <p class="artworkTitle">LIMITATION DES RESPONSABILITÉS</p>
                    <p class="artworkDesc">
                    <br><b>Damien Vailland</b> ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site <b>https://www.laican.fr</b>.
                    <br><b>Damien Vailland</b> décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur <b>https://www.laican.fr</b>.
                    <br><b>Damien Vailland</b> s’engage à sécuriser au mieux le site <b>https://www.laican.fr</b>, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.
                    <br>Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. <b>Damien Vailland</b> se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.
                    <br>Le cas échéant, <b>Damien Vailland</b> se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).
                    </p>

                    <p class="artworkTitle">GESTION DES DONNÉES PERSONNELLES</p>
                    <p class="artworkDesc">
                    <br>Le site <b>https://www.laican.fr</b> ne requiert et ne relève aucune donnée.
                    </p>
                    
                    <p class="artworkTitle">LIENS HYPERTEXTES ET COOKIES</p>
                    <p class="artworkDesc">
                    <br>Le site <b>https://www.laican.fr</b> contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers <b>https://www.laican.fr</b>.
                    <br>La navigation sur le site <b>https://www.laican.fr</b> n'implique aucune installation de cookie(s) sur l’ordinateur de l’utilisateur.
                    <!-- La navigation sur le site https://www.laican.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.
                    Un "cookie" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d'obtenir des mesures de fréquentation, par exemple.
                    Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.
                    Les cookies sont enregistrés pour une durée maximale de mois.
                    Pour plus d'informations sur la façon dont nous faisons usage des cookies, lisez notre https://www.laican.fr/mention. [Consignes : ajoutez ici le lien hypertexte vers votre politique de confidentialité ou vers votre politique de cookies si vous en avez une (c'est le cas si vous utilisez Complianz)] -->
                    </p>

                    <p class="artworkTitle">DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION</p>
                    <p class="artworkDesc">
                    <br>Tout litige en relation avec l’utilisation du site <b>https://www.laican.fr</b> est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Rennes.
                    </p>
                    
                    <p class="artworkTitle">CONTACT</p>
                    <p class="artworkDesc">
                    <br>Email : <b>contact@laican.fr</b>
                    </p>
                </div>
            </main>
            <?php include("static/footer.php"); ?>
            <script src="js/presentation.js"></script>
        </div>
    </body>
</html>