<?php include('inc/header.php'); ?>

<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Code PHP pour traiter l'envoi de l'email

    $errors=array();
    $success = false;

    // Définit toutes les erreurs possibles



    if ($errors == 0) { // S'il n'y a pas d'erreur
        // Récupération des variables et sécurisation des données
        $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $email = htmlentities($_POST['email']);
        $message = htmlentities($_POST['message']);

        // Variables concernant l'email
        $destinataire = 'evaccinprojet@gmail.com'; // Adresse email du webmaster
        $sujet = 'Titre du message'; // Titre de l'email
        $contenu = '<html><head><title>Titre du message</title></head><body>';
        $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
        $contenu .= '<p><strong>Nom</strong>: ' . $nom . '</p>';
        $contenu .= '<p><strong>Email</strong>: ' . $email . '</p>';
        $contenu .= '<p><strong>Message</strong>: ' . $message . '</p>';
        $contenu .= '</body></html>'; // Contenu du message de l'email

        // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email

        echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
    } else { // S'il y a un moins une erreur
        echo '<div style="border:1px solid #ff0000; padding:5px;">';
        echo '<p style="color:#ff0000;">Désolé, il y a eu ' . $errors . ' erreur(s). Voici le détail des erreurs:</p>';
        if (isset($erreur1)) echo '<p>' . $erreur1 . '</p>';
        if (isset($erreur2)) echo '<p>' . $erreur2 . '</p>';
        if (isset($erreur3)) echo '<p>' . $erreur3 . '</p>';
        if (isset($erreur4)) echo '<p>' . $erreur4 . '</p>';
        if (isset($erreur5)) echo '<p>' . $erreur5 . '</p>';
        if (isset($erreur6)) echo '<p>' . $erreur6 . '</p>';
        if (isset($erreur7)) echo '<p>' . $erreur7 . '</p>';
        echo '</div>';
    }
}
?>


<h1 class="h1speciale">Nous contacter</h1>
<div class="bar"></div>
<h5>Envoyez votre message ici</h5>
<section id="pagecontact">
    <div class="formpage">
        <form class="" action="accueil.html" method="post">
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

