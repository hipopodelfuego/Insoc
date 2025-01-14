<header id="header"> 
    <section class='firstNav'>
        <a href='index' class='navTitleContainer'>
            <img class='logoRF' src='css/img/Logo_RF.svg'>
            <h1 class='navTitle'>Scrutin électronique</h1>
        </a>
        <div class='blueNav'>
            <!-- <a href='index' class='blueBtn'>Accueil</a> -->
            <a href='index#programme' class='blueBtn'>Programmes</a>
            <?php 
                if(isset($_SESSION['logged']) && $_SESSION['logged']){
                    echo"
                    <a href='php/logout.php' class='blueBtn'>Se déconnecter</a>
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
        <a href='index' class='blackBtn'>Accueil</a>
        <?php 
            if(isset($_SESSION['logged']) && $_SESSION['logged']){
                echo"
                    <a href='vote' class='blackBtn'>Voter</a>
                ";
            } else {
                echo"
                    <a href='connect' class='blackBtn'>Voter</a>
                ";
            }
        ?>
        <a href='index#programme' class='blackBtn'>Programmes</a>
    </section>
</header>