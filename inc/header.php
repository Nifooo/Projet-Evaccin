<?php session_start() ;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>e-vaccin</title>
    <link rel="stylesheet" href="asset/css/flexslider.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

<header>
    <div class="menufixed">
        <div class="wrap">
            <a href="index.php"><img src="asset/images/logof.png" alt="logo du site"></a>
            <nav>
                <ul>
                    <?php
                    if(!empty($_SESSION['id'])){?>


                        <li><a href="deconnexion.php"> Deconnexion </a></li>
                        <li><a href="contact.php"> Contact </a></li>
                        <li><a href="mes-vaccins.php"> Mes vaccins </a></li>


                    <?php } else {

                    }
                    

                    if(empty($_SESSION['id'])) { ?>

                        <li><a href="connexion.php">Connexion</a></li>
                        <li><a href="contact.php"> Contact</a></li>
                        <li><a href="index.php" >Accueil</a></li>


                    <?php } else {

                    }?>
                </ul>
            </nav>
        </div>
    </div>
    <div class="clear"></div>
</header>



