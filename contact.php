<?php
include('inc/header.php');
include ('inc/traitement-contact.php');
?>


<h1 class="h1speciale">Nous contacter</h1>
<div class="bar"></div>
<h5>Envoyez votre message ici</h5>
<section id="pagecontact">
    <div class="formpage">
        <form class="" action="traitement-contact.php" method="post">
            <input id="nom" type="text" name="Nom" value="" placeholder="Votre Nom">
            <input id="prenom" type="text" name="Prénom" value="" placeholder="Prénom">
            <input id="email" type="email" name="Email" value="" placeholder="Votre Email">
            <input id="sujet" type="" name="sujet" value="" placeholder="Objet">
            <textarea name="message" rows="8" cols="8" placeholder="Votre message ..."></textarea>
            <input id="boutonenvoyer" type="submit" name="submit" value="Envoyer">
        </form>
    </div>

    <div class="clear"></div>

    <div class="forminfo">
        <p class="info">Informations</p>
        <div class="bar"></div>
        <p class="found">Ou nous trouver ?</p>
        <div class="imagelogo">
            <div class="email-logo"><img src="asset/images/lettre.png" alt="">
                <p>contact@evaccin.com</p></div>
            <div class="tel-logo"><img src="asset/images/tel.png" alt="">
                <p>02 45 84 16 04</p></div>
        </div>
        <div class="cartelogo">
            <img class="marc" src="asset/images/saintmarc.png" alt=""></div>
    </div>
    <div class="clear"></div>
</section>

<?php include('inc/footer.php'); ?>

