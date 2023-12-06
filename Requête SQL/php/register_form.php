<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form action="register_script.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        <label for="email">Adresse email :</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required><br><br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
