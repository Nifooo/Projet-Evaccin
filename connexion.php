<?php
include('inc/pdo.php');
include('inc/function.php');
include('inc/validation.php');

$errors = array();
$success = false;


if (!empty($_POST)){
    extract($_POST);
    if(!empty ($email)) {
        $errors['email'] = 'Veuillez renseigner ce champ';
    }
    if(empty ($password)) {
        $errors['password'] = 'Veuillez renseigner ce champ';
    }

    //  Récupération de l'utilisateur et de son pass hashé
    $sql = $pdo->prepare("SELECT id, password FROM users WHERE email = '$email'");
    $sql->execute(array(
        'email' => $email));
    $user = $sql->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $user['password']);

    if (!$user)
    {
        $errors ['email'] = 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $email;
            header('Location: mes-vaccins.php');}
        else {
            $errors ['password'] = 'Mauvais identifiant ou mot de passe !';
        }
    }

}





































?>
<?php include('inc/header.php'); ?>

    <section id="connect">
      <div class="wrap">
          <p class="paragrapheconect">Se connecter</p>
          <div class="barre0"></div>
          <div class="connexion">
            <form class="" method="post">
              <label for="email"></label>
              <input type="text" name="email"id="email" placeholder="Email" value="<?php if (!empty($_POST['email'])) {
                  echo $_POST['email'];
              } ?>">
                <span class="error"><?php if (!empty($errors['email'])) {
                        echo $errors['email'];
                    } ?></span>
              <div class="clear"></div>
              <label for="password"></label>
              <input type="password" name="password" id="password" placeholder="Mot de passe" value="<?php if (!empty($_POST['password'])) {
                  echo $_POST['password'];
              } ?>">
                <span class="error"><?php if (!empty($errors['password'])) {
                        echo $errors['password'];
                    } ?></span>
                <p>Pas de compte ?<a href="inscription.php"> Inscrivez-vous</a></p>
              <input type="submit" name="submit" value="Se connecter">
            </form>
          </div>
      </div>
        <div class="clear"></div>
    </section>


<?php include('inc/footer.php'); ?>