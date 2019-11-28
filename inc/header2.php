<?php if(!empty($_SESSION['id'])){ ?>

    <?php {echo htmlentities(trim($_SESSION['email']));}?>
    <li><a href="deconnexion.php"> Deconnexion </a></li>
    <li><a href="compte.php"> Profile </a></li>
    <li><a href="contact.php"> Contact </a></li>
    <li><a href="mes-vaccins.php"> Mes vaccins </a></li>
    <li><a href="enfant.php"> Enfant </a></li>


<?php }


//Si le membre n'est pas connecté on affiche le menu-deconnecter
if(empty($_SESSION['id'])) { ?>

    <li><a href="connexion.php">Connexion</a></li>
    <li><a href="contact.php"> Contact</a></li>
    <li><a href="index.php" >Aaccueil</li>


<?php } ?>



