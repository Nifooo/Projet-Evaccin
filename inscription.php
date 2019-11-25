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

















include('inc/header.php');
?>

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
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
            <label for="confirmemail">Confirmation d'email</label>
            <input type="text" name="confirmemail" id="confirmemail" required>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
            <label for="confirmpassword">Confirmation de mot de passe </label>
            <input type="password" name="confirmpassword" id="confirmpassword" required>
            <label for="cp">Code postal</label>
            <input type="number" name="cp" id="cp" required>
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" required>
            <input type="submit" name="submit1" value="S'inscrire">

        </form>
    </div>
    </div>
    <div class="clear"></div>
    </section>

<?php include('inc/footer.php'); ?>