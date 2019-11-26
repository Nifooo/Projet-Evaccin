<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>e-vaccin</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

<header>
    <div class="headerpopup">
      <div class="wrap">
        <h1 class"titrepopup">Ajoutez vos vaccins :</h1>
      </div>
    </div>
    <div class="clear"></div>
</header>

<div class="check1">
  <div class="wrap">
  <h2>Sélectionnez vos vaccins :</h2>

    <input type="checkbox" name="Diphtérie" value="vac1">
      <label id="v1" for="Diphtérie">Diphtérie</label>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>

    <input type="checkbox" name="Tétanos" value="vac2">
      <label id="v2" for="Tétanos">Tétanos</label>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>

    <input type="checkbox" name="Poliomyélite" value="vac3">
      <label id="v3" for="Poliomyélite">Poliomyélite</label>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>

    <input type="checkbox" name="Coqueluche" value="vac4">
      <label id="v4" for="Coqueluche">Coqueluche</label>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>

    <input type="checkbox" name="Hépatite B" value="vac5">
      <label id="v5" for="Hépatite B">Hépatite B</label>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>



    <input type="checkbox" name="Haemophilius influenzae B" value="vac6">
      <label id="v6" for="Haemophilius influenzae B">Haemophilius influenzae B</label>
      <input id="checkdate" type="date" name="date" value="">
      <div class="clear"></div>
</div>
</div>


<div class="check2">
  <div class="wrap">
  <input type="checkbox" name="Oreillons" value="vac7">
    <label id="v7" for="Oreillons">Oreillons</label>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>


  <input type="checkbox" name="Rubéole" value="vac8">
    <label id="v8" for="Rubéole">Rubéole</label>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>
    

  <input type="checkbox" name="Méningocoque" value="vac9">
    <label id="v9" for="Méningocoque">Méningocoque</label>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

  <input type="checkbox" name="Pneumocoque" value="vac10">
    <label id="v10" for="Pneumocoque">Pneumocoque</label>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

  <input type="checkbox" name="Rougeole" value="vac11">
    <label id="v11" for="Rougeole">Rougeole</label>
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

  <label for="Autre">Autres vaccins :</label>
    <input type="text" name="" value="" placeholder="Saisir ici">
    <input id="checkdate" type="date" name="date" value="">
    <div class="clear"></div>

    <input id="submit" type="submit" name="ajouter" value="Ajouter">
</div>
</div>


</body>
</html>
