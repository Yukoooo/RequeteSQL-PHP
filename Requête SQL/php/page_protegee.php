
<?php
session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 'ok') {
    header('Location: login_form.php'); // Redirigez vers la page de connexion si l'authentification n'est pas réussie
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Protégée</title>
</head>
<body>
    <h2>Page Protégée</h2>
    <p>Bienvenue sur la page protégée ! Vous êtes authentifié.</p>
</body>
</html>
