<?php
include ('inc/function.php');
include ('inc/pdo.php');

$errors = array();
$success = false;


if (!empty($_POST['checkbox'])) {


    // VALIDATION AVEC LES FONCTIONS //


    if (count($errors) == 0) {
        $success = true;
        $sql = "INSERT INTO reve VALUES(null ,:nomvaccin)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nomvaccin', $nomDuVaccin, PDO::PARAM_STR);
        $query->execute();
    }
}


















include('inc/header.php') ?>


<h2 class="poptitle">Sélectionnez vos vaccins :</h2>
<div class="check check1">
  <div class="wrap">

      <div class="pop">
    <input id="checkboxx" type="checkbox" name="Diphtérie" value="vac1">
      <label id="vac" for="Diphtérie">Diphtérie</label>
    </div>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>

      <div class="pop">
    <input id="checkboxx" type="checkbox" name="Tétanos" value="vac2">
      <label id="vac" for="Tétanos">Tétanos</label>
    </div>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>

          <div class="pop">
    <input id="checkboxx" type="checkbox" name="Poliomyélite" value="vac3">
      <label id="vac" for="Poliomyélite">Poliomyélite</label>
    </div>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>

            <div class="pop">
    <input id="checkboxx" type="checkbox" name="Coqueluche" value="vac4">
      <label id="vac" for="Coqueluche">Coqueluche</label>
    </div>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>

            <div class="pop">
    <input id="checkboxx" type="checkbox" name="Hépatite B" value="vac5">
      <label id="vac" for="Hépatite B">Hépatite B</label>
    </div>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>



    <div class="pop">
    <input id="checkboxx" type="checkbox" name="Haemophilius influenzae B" value="vac6">
      <label id="vac" for="Haemophilius influenzae B">Haemophilius influenzae B</label>
    </div>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>
</div>
</div>


<div class="check2">
  <div class="wrap">
<form class="" action="index.html" method="post">
          <div class="pop">
  <input id="checkboxx" type="checkbox" name="Oreillons" value="vac7">
    <label id="vac" for="Oreillons">Oreillons</label>
  </div>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

          <div class="pop">
  <input id="checkboxx" type="checkbox" name="Rubéole" value="vac8">
    <label id="vac" for="Rubéole">Rubéole</label>
  </div>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

          <div class="pop">
  <input id="checkboxx" type="checkbox" name="Méningocoque" value="vac9">
    <label id="vac" for="Méningocoque">Méningocoque</label>
  </div>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

          <div class="pop">
  <input id="checkboxx" type="checkbox" name="Pneumocoque" value="vac10">
    <label id="vac" for="Pneumocoque">Pneumocoque</label>
  </div>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

          <div class="pop">
  <input id="checkboxx" type="checkbox" name="Rougeole" value="vac11">
    <label id="vac" for="Rougeole">Rougeole</label>
  </div>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

          <div class="pop">
  <label for="Autre">Autres vaccins :</label>
    <input id="checkboxx2" type="text" name="" value="" placeholder="Saisir ici">
  </div>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>
    </div>
</div>

<div class="clear"></div>

<div class="orga">
<input class="submitt" type="submit" name="ajouter" value="Ajouter">
</div>

</body>
</html>
