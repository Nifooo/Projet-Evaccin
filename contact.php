<?php include('inc/header.php'); ?>

    <h1 class="h1speciale">Nous contacter</h1>
    <div class="bar"></div>
    <h5>Envoyez votre message ici</h5>
    <section id="pagecontact">
      <div class="formpage">
        <form class="" action="accueil.html" method="post">
          <input id="nom"type="text" name="Nom" value="" placeholder="Votre Nom">
          <input id="prenom" type="text" name="Prénom" value="" placeholder="Prénom">
          <input id="email"type="email" name="Email" value=""placeholder="Votre Email">
          <input id="sujet"type="" name="sujet" value=""placeholder="Objet">
          <textarea name="message" rows="8" cols="8">Votre texte...</textarea>
          <input id="boutonenvoyer" type="submit" name="submit" value="Envoyer">
        </form>
      </div>
        <div class="bar"></div>

      <div class="clear"></div>

      <div class="forminfo">
          <input type="button" name="buton" value="Informations">
          <div class="imagelogo">
          <img src="asset/images/lettre.png" alt="">
          <p>Email : email@gmail.com</p>
          <img src="asset/images/tel.png" alt="">
          <p>Téléphone : 02 45 45 45 45</p>
          </div>
          <p class="found">Ou nous trouver ?</p>
          <img class="marc" src="asset/images/saintmarc.png" alt="">
      </div>
      <div class="clear"></div>
    </section>

<?php include('inc/footer.php'); ?>