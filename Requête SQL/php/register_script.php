<?php
// Connexion à la base de données (à adapter à votre configuration)
$bdd = new PDO('mysql:host=localhost;dbname=user', 'admin', 'Afpa1234');

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT); // Hash du mot de passe

    // Insérez les données dans la base de données
    $insert_query = $bdd->prepare("INSERT INTO user (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
    $insert_query->execute([$nom, $prenom, $email, $mot_de_passe]);

    header('Location: login_form.php'); // Redirigez vers la page de connexion après l'inscription
}
?>
