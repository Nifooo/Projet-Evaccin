<?php
include('inc/pdo.php');
include('inc/function.php');
include('inc/validation.php');

$errors = array();
$success = false;

if (!empty($_POST['submit1'])) {
    $email = clean($_POST['email']);
    $confirmemail = clean($_POST['confirmemail']);
    $password = clean($_POST['password']);
    $confirmpassword = clean($_POST['confirmpassword']);

    //Condition Validation

    // Validation email
    $errors = emailValidation($errors, $email, 'email');

    // Validation password
    $errors = passValidation($errors, $password, 'password', 5, 255);

    // Confirmemail
    if ($email != $confirmemail) {
        $errors['confirmemail'] = 'La confirmation du mail doit être identique au mail';
    }

    // Confirmpassword
    if ($password != $confirmpassword) {
        $errors['confirmpassword'] = 'La confirmation du mot de passe doit être identique au mot de passe';
    }


// no error
    if (count($errors) == 0) {
        //insert into
        $success = true;
        //injection SQL
        $sql = "INSERT INTO users VALUES(null,:email,:password)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->execute();
    }
}


include('inc/header.php'); ?>

    <section id="inscription">
        <div class="barre4"></div>
        <p>S'inscrire</p>
        <form class="" action="" method="post" novalidate>
            <label for="nom"></label>
            <input type="text" name="nom" id="nom" placeholder="Nom" value="<?php if (!empty($_POST['nom'])) {
                echo $_POST['nom'];
            } ?>">
            <span class="error"><?php if (!empty($errors['nom'])) {
                    echo $errors['nom'];
                } ?></span>
            <label for="prenom"></label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom"
                   value="<?php if (!empty($_POST['prenom'])) {
                       echo $_POST['prenom'];
                   } ?>">
            <span class="error"><?php if (!empty($errors['prenom'])) {
                    echo $errors['prenom'];
                } ?></span>
            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder="Email" value="<?php if (!empty($_POST['email'])) {
                echo $_POST['email'];
            } ?>">
            <span class="error"><?php if (!empty($errors['email'])) {
                    echo $errors['email'];
                } ?></span>
            <label for="confirmemail"></label>
            <input type="text" name="confirmemail" id="confirmemail" placeholder="Confirmation d'email"
                   value="<?php if (!empty($_POST['confirmelail'])) {
                       echo $_POST['confirmemail'];
                   } ?>">
            <span class="error"><?php if (!empty($errors['confirmemail'])) {
                    echo $errors['confirmemail'];
                } ?></span>
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Mot de passe"
                   value="<?php if (!empty($_POST['password'])) {
                       echo $_POST['password'];
                   } ?>">
            <span class="error"><?php if (!empty($errors['password'])) {
                    echo $errors['password'];
                } ?></span>
            <label for="confirmpassword"></label>
            <input type="password" name="confirmpassword" id="confirmpassword"
                   placeholder="Confirmation de mot de passe" value="<?php if (!empty($_POST['confirmpassword'])) {
                echo $_POST['confirmpassword'];
            } ?>">
            <span class="error"><?php if (!empty($errors['confirmpassword'])) {
                    echo $errors['confirmpassword'];
                } ?></span>
            <label for="cp"></label>
            <input type="number" name="cp" id="cp" placeholder="Code postal" value="<?php if (!empty($_POST['cp'])) {
                echo $_POST['cp'];
            } ?>">
            <span class="error"><?php if (!empty($errors['cp'])) {
                    echo $errors['cp'];
                } ?></span>
            <label for="ville"></label>
            <input type="text" name="ville" id="ville" placeholder="Ville" value="<?php if (!empty($_POST['ville'])) {
                echo $_POST['ville'];
            } ?>">
            <span class="error"><?php if (!empty($errors['ville'])) {
                    echo $errors['ville'];
                } ?></span>
            <input type="submit" name="submit1" value="S'inscrire">
        </form>
    </section>
    <div class="clear"></div>

<?php include('inc/footer.php'); ?>