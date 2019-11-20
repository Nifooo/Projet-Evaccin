<?php include('inc/header.php'); ?>

</div>
<div class="barre4">

</div>
<div class="inscription">
    <p>S'inscrire</p>
    <form class="" action="accueil.html" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required>
        <label for="email1">Email</label>
        <input type="text" name="email1" id="email1" required>
        <label for="confirmemail">Confirmation d'email</label>
        <input type="text" name="confirmemail" id="confirmemail" required>
        <label for="password1">Mot de passe</label>
        <input type="password" name="password1" id="password1" required>
        <label for="confirmpassword">Confirmation de mot de passe </label>
        <input type="password" name="confirmpassword" id="confirmpassword" required>
        <label for="cp">Code postal</label>
        <input type="number" name="cp" id="cp" required >
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" required>
        <input type="submit" name="submit1" value="S'inscrire">

    </form>
</div>
</div>
<div class="clear"></div>
</section>

<?php include('inc/footer.php'); ?>