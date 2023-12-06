<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'authentification</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="login_script.php" method="post">
        <label for="login">Login (adresse email) :</label>
        <input type="text" name="login" id="login" required><br><br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>


<?php
session_start();

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Connexion à la base de données (à adapter à votre configuration)
    $bdd = new PDO('mysql:host=localhost;dbname=user', 'admin', 'Afpa1234');

    $query = $bdd->prepare("SELECT id, mot_de_passe FROM user WHERE email = ?");
    $query->execute([$login]);
    $user = $query->fetch();

    if ($user && password_verify($password, $user['mot_de_passe'])) {
        // L'authentification est réussie, initialisez la variable de session
        $_SESSION['auth'] = 'ok';
        header('Location: page_protegee.php'); // Redirigez vers la page protégée
    } else {
        // L'authentification a échoué, détruisez la variable de session
        unset($_SESSION['auth']);
        header('Location: login_form.php'); // Redirigez vers la page de connexion
    }
}
?>

