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
    $nom = clean($_POST['nom']);
    $prenom = clean($_POST['prenom']);
    $cp = clean($_POST['cp']);
    $ville = clean($_POST['ville']);



    //Condition Validation

    // Validation nom
    $errors = textValid($errors,$nom,'nom',2,100);

    // Validation prenom
    $errors = textValid($errors,$prenom,'prenom',2,100);

    // Validation email
    $errors = emailValidation($errors, $email, 'email');
    // Confirmemail
    if ($email != $confirmemail) {
        $errors['confirmemail'] = 'La confirmation du mail doit être identique au mail';
    } else{
        if(empty ($confirmemail)) {
            $errors['confirmemail'] = 'Veuillez renseigner ce champ';
        }
    }


    // Validation password
    $errors = passValidation($errors, $password, 'password', 5, 255);
    // Confirmpassword
    if ($password != $confirmpassword) {
        $errors['confirmpassword'] = 'La confirmation du mot de passe doit être identique au mot de passe';
    } else{
        if(empty ($confirmpassword)) {
            $errors['confirmpassword'] = 'Veuillez renseigner ce champ';
        }
    }


    // Validation cp
    $errors = cpValid($errors, $cp,'cp');
    // Validation ville
    $errors = textValid($errors,$ville,'ville',2,100);


    // select request pour verifier si email existe pas deja dans la base s

    $reqmail = $pdo->prepare("SELECT * FROM users WHERE email = '$email'");
    $reqmail->execute(array($email));
    $mailexist = $reqmail->fetch();
    if ($mailexist == 0) {

    } else {
        $errors ['email'] = 'Votre email existe déjà !';
    }



// no error
    if (count($errors) == 0) {
        //insert into
        $success = true;
        //injection SQL
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users VALUES(null,:nom, :prenom, :email, null, :password, :cp, :ville, null, null, null)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $hashPassword, PDO::PARAM_STR);
        $query->bindValue(':cp', $cp, PDO::PARAM_INT);
        $query->bindValue(':ville', $ville, PDO::PARAM_STR);
        $query->execute();

        // redirection vers la connexion
        header('Location: connexion.php');
    }
}






include('inc/header.php'); ?>

    <section id="inscription">
        <p>S'inscrire</p>
        <div class="barre0"></div>
        <form class="" action="" method="post" novalidate>
            <label for="nom"></label>
            <input type="text" name="nom" id="nom" placeholder="Nom*" value="<?php if (!empty($_POST['nom'])) {
                echo $_POST['nom'];
            } ?>">
            <span class="error" style="color: red"><?php if (!empty($errors['nom'])) {
                    echo $errors['nom'];
                } ?></span>
            <label for="prenom"></label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom*"
                   value="<?php if (!empty($_POST['prenom'])) {
                       echo $_POST['prenom'];
                   } ?>">
            <span class="error" style="color: red"><?php if (!empty($errors['prenom'])) {
                    echo $errors['prenom'];
                } ?></span>
            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder="Email*" value="<?php if (!empty($_POST['email'])) {
                echo $_POST['email'];
            } ?>">
            <span class="error" style="color: red"><?php if (!empty($errors['email'])) {
                    echo $errors['email'];
                } ?></span>
            <label for="confirmemail"></label>
            <input type="text" name="confirmemail" id="confirmemail" placeholder="Confirmation d'email*"
                   value="<?php if (!empty($_POST['confirmemail'])) {
                       echo $_POST['confirmemail'];
                   } ?>">
            <span class="error" style="color: red"><?php if (!empty($errors['confirmemail'])) {
                    echo $errors['confirmemail'];
                } ?></span>
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Mot de passe*"
                   value="<?php if (!empty($_POST['password'])) {
                       echo $_POST['password'];
                   } ?>">
            <span class="error" style="color: red"><?php if (!empty($errors['password'])) {
                    echo $errors['password'];
                } ?></span>
            <label for="confirmpassword"></label>
            <input type="password" name="confirmpassword" id="confirmpassword"
                   placeholder="Confirmation de mot de passe*" value="<?php if (!empty($_POST['confirmpassword'])) {
                echo $_POST['confirmpassword'];
            } ?>">
            <span class="error" style="color: red"><?php if (!empty($errors['confirmpassword'])) {
                    echo $errors['confirmpassword'];
                } ?></span>
            <label for="cp"></label>
            <input type="number" name="cp" id="cp" placeholder="Code postal*" value="<?php if (!empty($_POST['cp'])) {
                echo $_POST['cp'];
            } ?>">
            <span class="error" style="color: red"><?php if (!empty($errors['cp'])) {
                    echo $errors['cp'];
                } ?></span>
            <label for="ville"></label>
            <input type="text" name="ville" id="ville" placeholder="Ville*" value="<?php if (!empty($_POST['ville'])) {
                echo $_POST['ville'];
            } ?>">
            <span class="error" style="color: red"><?php if (!empty($errors['ville'])) {
                    echo $errors['ville'];
                } ?></span>
            <input type="submit" name="submit1" value="S'inscrire">
        </form>
    </section>
    <div class="clear"></div>

<?php include('inc/footer.php'); ?>