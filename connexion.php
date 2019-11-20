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
          <label for="email">Email</label>
          <input type="text" name="email"id="email" required>
          <div class="clear"></div>
          <label for="password">Mot de passe</label>
          <input type="password" name="password" id="password" required>
          <div class="clear">
            <p>Pas de compte ?<a href="inscription.php"> Inscrivez-vous</a></p>

          </div>
          <input type="submit" name="submit" value="Se connecter">
        </form>

<?php include('inc/footer.php'); ?>