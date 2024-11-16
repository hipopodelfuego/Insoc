<header id="header"> 
    <section class='firstNav'>
        <a href='index' class='navTitleContainer'>
            <img class='logoRF' src='css/img/Logo_RF.svg'>
            <h1 class='navTitle'>Scrutin électronique</h1>
        </a>
        <div class='blueNav'>
            <a href='programme' class='blueBtn'>Programmes</a>
            <a href='' class='blueBtn'>Bouton</a>
            <?php 
                if($_SESSION['logged']){
                    echo"
                    <a href='account' class='blueBtn'>Mon compte</a>
                    ";
                } else {
                    echo"
                    <a href='connect' class='blueBtn'>Se connecter</a>
                    ";
                }
            ?>
        </div>
    </section>
    <div class='separationNav'></div>
    <section class='secondNav'>
        <a href='' class='blackBtn'>Bouton</a>
        <a href='' class='blackBtn'>Bouton</a>
        <a href='' class='blackBtn'>Bouton</a>
    </section>
</header>