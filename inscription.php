<?php
include('inc/pdo.php');
include ('inc/function.php');

$errors = array();
$success = false;

if (!empty($_POST['submit1'])){
    $email = clean($_POST['email']);
    $confirmemail = clean($_POST['confirmemail']);
    $password = clean($_POST['password']);
    $confirmpassword = clean($_POST['confirmpassword']);

    //Condition Validation


















// no error
    if (count($errors) == 0) {
        //insert into
        $success = true;
        //injection SQL
        $sql = "INSERT INTO users VALUES(null,:email,:password)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email, PDO::PARAM_STR);
        $query->bindValue(':password',$password, PDO::PARAM_STR);
        $query->execute();
    }
}

















include('inc/header.php'); ?>

    <section id="inscription">
        <div class="barre4"></div>
        <p>S'inscrire</p>
        <form class="" action="accueil.html" method="post">
            <label for="nom"></label>
            <input type="text" name="nom" id="nom" placeholder="Nom" required>
            <label for="prenom"></label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder="Email" required>
            <label for="confirmemail"></label>
            <input type="text" name="confirmemail" id="confirmemail" placeholder="Confirmation d'email" required>
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required>
            <label for="confirmpassword"></label>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirmation de mot de passe" required>
            <label for="cp"></label>
            <input type="number" name="cp" id="cp" placeholder="Code postal" required>
            <label for="ville"></label>
            <input type="text" name="ville" id="ville" placeholder="Ville" required>
            <input type="submit" name="submit1" value="S'inscrire">
        </form>
    </section>
    <div class="clear"></div>

<?php include('inc/footer.php'); ?>