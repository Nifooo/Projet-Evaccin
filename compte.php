<?php include('inc/header.php'); ?>


<section id="moncompte">
    <div class="wrap">
        <div class="profilcompte">
            <form>
                <label for="profil">Photo de profil</label>
                <input id="profil" type="file" name="profil" placeholder="Photo" value="Modifier">
            </form>
            <p id="nomcompte">Nom</p>
            <p id="prenomcompte">Prénom</p>

        </div>

        <div class="clear"></div>
        <div class="bar"></div>
        <div class="profilcompte2">
            <h2>Mon compte</h2>
            <form>
                <label name="nom" >Mon nom :</label>
                <input type="button"  value="Modifier">

                <label name="prenom">Mon prénom :</label>
                <input type="button" value="Modifier">

                <label name="email">Mon email :</label>
                <input type="button"  value="Modifier">

                <label name="tel">Mon téléphone :</label>
                <input type="button"  value="Modifier">

                <label name="mdp">Mon mot de passe :</label>
                <input type="button"  value="Modifier">

            </form>
        </div>
        <div class="clear"></div>

    </div>

</section>

<?php include('inc/footer.php'); ?>