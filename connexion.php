<?php include('inc/header.php'); ?>

    <section id="connect">
      <div class="wrap">
          <p id="con">BIENVENUE</p>
          <div class="clear"></div>
          <div class="barre3"></div>
          <div class="clear"></div>
          <div class="connexion">
              <p>Se connecter</p>
            <form class="" action="accueil.html" method="post">
              <label for="email"></label>
              <input type="text" name="email"id="email" placeholder="Email" required>
              <div class="clear"></div>
              <label for="password"></label>
              <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <p>Pas de compte ?<a href="inscription.php"> Inscrivez-vous</a></p>
              <input type="submit" name="submit" value="Se connecter">
            </form>
          </div>
      </div>
        <div class="clear"></div>
    </section>


<?php include('inc/footer.php'); ?>