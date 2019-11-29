<?php
include ('inc/pdo.php');
include ('inc/function.php');
$errors = array();
$success = false;

$sql   = "SELECT * FROM listevaccin";
$sql2   = "SELECT * FROM liste ORDER BY created_at";
$query = $pdo -> prepare($sql);
$query -> execute();
$listevs = $query -> fetchAll();


if (!empty($_POST['envoi'])) {


    $listev   = clean($_POST['nom']);
    $date     = $_POST['created'];




    if (count($errors) == 0) {
        $success = true;
        $sql2 = "INSERT INTO liste VALUES(null ,:nom ,:datecrea)";
        $query = $pdo->prepare($sql2);
        $query->bindValue(':nom', $listev, PDO::PARAM_STR);
        $query->bindValue(':datecrea', $date);
        $query->execute();
    }


}

include('inc/header.php'); ?>

<div class="press">
<h2>Mes vaccins</h2>
<div class="barre9"></div>
</div>

<?php foreach ($listevs as $listev) { ?>
    <?php echo $listev['name'] . '<br>'; ?>

<?php }?>


<form action="" id="mvac" method="post" novalidate>
    <label>Selectionnez vos vaccins :</label>
    <SELECT name="nom" size="1">
        <option>-- Selectionnez votre vaccin --</option>
        <?php foreach ($listevs as $listev) { ?>
        <option value="<?php echo $listev['name']; ?>"><?php echo $listev['name']; ?></option><?php } ?>
    </SELECT>
        <input class="ladate" type="date" name="created">
    <input class="envoi" type="submit" name="envoi" value="Enregistrer">
    </form>

<?php include('inc/footer.php'); ?>

