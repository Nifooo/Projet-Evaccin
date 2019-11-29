<?php

include('inc/header.php'); ?>

<section id="vquoi">
    <div class="wrap">
        <h2>L' e-vaccin c'est quoi ?</h2>
        <p> Vous êtes perdus dans vos vaccins ou<br>vous partez à l’étranger et vous voulez<br>connaitre les vaccins recommandés pour<br>votre destination afin de garantir votre<br>santé et celle de votre famille ?
            Créez votre<br>carnet de vaccination électronique afin de<br>simplifier le suivi médical de vos vaccins. </p>
        <button type="button" name="button"><a href="connexion.php">Je crée mon carnet<br>de vaccination</a></button>
    </div>
    <div class="clear"></div>
</section>

<section id="pourquoi">
    <div class="wrap">
        <h2>Pourquoi créer mon carnet ?</h2>
        <div class="barre"></div>
        <div class="ex simple">
            <h3>Simplicité</h3>
            <img src="asset/images/simple.png" alt="logo simplicité">
            <p>Facilite l’accès à votre
                carnet de vaccination
                grâce à un interface
                simple d’utlisation.</p>
        </div>

        <div class="ex util">
            <h3>Utilité</h3>
            <img src="asset/images/utile.png" alt="logo utilité">
            <p>Ne vous encombrez
                plus avec un carnet
                papier et ne perdez
                plus votre temps à
                le chercher partout.</p>
        </div>

        <div class="ex securite">
            <h3>Sécurité</h3>
            <img src="asset/images/securite.png" alt="logo sécurité">
            <p>Vos données seront
                protégées et partagées
                seulement quand vous
                le souhaiterez.</p>
        </div>
    </div>
    <div class="clear"></div>
</section>

<?php if (isset($_SESSION['id']) AND isset($_SESSION['email'])) {
    echo 'Bonjour ' . $_SESSION['email'];
} ?>

<section id="qui">
    <div class="barre2"></div>
    <h2>Qui sommes nous ?</h2>
    <div class="container">
        <p class="speech-bubble">E-vaccin est un site créé par un collectif de médecin dans le but de faciliter la vie de millions de patients mais aussi des professionnels de santé. La plateforme e-vaccin rend plus pratique le suivi médical des patients et permet aux médecins de consulter plus facilement si le patient est à jour ou non dans ses vaccins.</p>
        <img class="perso" width="100px" src="asset/images/personnage.png" alt="petit bonhomme">
    </div>

</section>

<div class="clear"></div>

<?php include('inc/footer.php'); ?>
