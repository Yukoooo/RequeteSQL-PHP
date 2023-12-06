Les boucles

<?php
/*
  Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
for ($i = 1; $i <= 150; $i += 2) {
    echo $i . ' ';
} 
*/

/*
 Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
for ($i = 1; $i <= 500; $i++) {
    echo "Je dois faire des sauvegardes régulières de mes fichiers. ";
}
*/
?>

<?php
/*
<!DOCTYPE html>
<html>
<head>
    <title>Table de multiplication</title>
</head>
<body>
    <h2>Table de multiplication de 1 à 9</h2>
    <table border="1">
        <tr>
            <th>X</th>

            <?php 
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr><th>$i</th>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
*/
?>


<br>
------------------------------------------------------------
<br>





Les tableaux
<br>
<br>
<?php
/* Création du tableau associatif
$mois = [
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
];

// Affichage du tableau non trié dans un tableau HTML
echo "<h2>Tableau non trié</h2>";
echo "<table border='1'>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach ($mois as $nomMois => $jours) {
    echo "<tr><td>$nomMois</td><td>$jours</td></tr>";
}
echo "</table>";

// Tri du tableau en fonction du nombre de jours
asort($mois);

// Affichage du tableau trié dans un tableau HTML
echo "<h2>Tableau trié par nombre de jours</h2>";
echo "<table border='1'>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach ($mois as $nomMois => $jours) {
    echo "<tr><td>$nomMois</td><td>$jours</td></tr>";
}
echo "</table>";
?>
*/


/*
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    // ... (les autres éléments du tableau)
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

// Afficher la liste des capitales (par ordre alphabétique) suivie du nom du pays.
asort($capitales);
echo "Liste des capitales (par ordre alphabétique) suivie du nom du pays:<br>";
foreach ($capitales as $capitale => $pays) {
    echo "$capitale - $pays<br>";
}
echo "<br>";

// Afficher la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
ksort($capitales);
echo "Liste des pays (par ordre alphabétique) suivie du nom de la capitale:<br>";
foreach ($capitales as $capitale => $pays) {
    echo "$pays - $capitale<br>";
}
echo "<br>";

// Afficher le nombre de pays dans le tableau.
$nombrePays = count($capitales);
echo "Nombre de pays dans le tableau : $nombrePays<br>";

// Supprimer du tableau toutes les capitales ne commençant par la lettre 'B'.
foreach ($capitales as $capitale => $pays) {
    if (substr($capitale, 0, 1) != 'B') {
        unset($capitales[$capitale]);
    }
}

// Afficher le contenu du tableau après suppression.
echo "Contenu du tableau après suppression des capitales ne commençant pas par 'B':<br>";
foreach ($capitales as $capitale => $pays) {
    echo "$capitale - $pays<br>";
}
*/

/*
$departements = array(
    "Hauts-de-france" =><br>
 array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

// Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements
ksort($departements);
echo "Liste des régions (par ordre alphabétique) suivie du nom des départements:<br>";
foreach ($departements as $region => $listeDepartements) {
    echo "$region : " . implode(", ", $listeDepartements) . "<br>";
}
echo "<br>";

// Affichez la liste des régions suivie du nombre de départements
echo "Liste des régions suivie du nombre de départements:<br>"^;
foreach ($departements as $region => $listeDepartements) {
    $nombreDepartements = count($listeDepartements);
    echo "$region : $nombreDepartements départements<br>";
}
*/
?>

<br>
---------------------------
<br>
Les fonctions

<?php

/*
 function lien($url, $titre) {
    echo "<a href=\"$url\">$titre</a>";
}

// Exemple d'utilisation :
lien("https://www.reddit.com/", "Reddit Hug");

*/
/*
function somme($tableau) {
    $resultat = 0;
    foreach ($tableau as $valeur) {
        $resultat += $valeur;
    }
    return $resultat;
}

// Exemple d'utilisation :
$tab = array(4, 3, 8, 2);
$resultat = somme($tab);
echo "La somme des valeurs du tableau est : $resultat";
*/

/*
function complex_password($motDePasse) {
    // Vérifie si le mot de passe a au moins 8 caractères de long
    if (strlen($motDePasse) < 8) {
        return false;
    }

    // Vérifie s'il contient au moins un chiffre
    if (!preg_match('/[0-9]/', $motDePasse)) {
        return false;
    }

    // Vérifie s'il contient au moins une majuscule et une minuscule
    if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse)) {
        return false;
    }

    return true;
}

// Exemple d'utilisation :
$resultat = complex_password("TopSecret42");
if ($resultat) {
    echo "Le mot de passe est complexe.";
} else {
    echo "Le mot de passe ne respecte pas les critères de complexité.";
}
*/
?>

<br>
---------------------------------------------------
<br>
Les dates
<br>

<?php
/*
$date = new DateTime('2019-07-14');
$semaine = $date->format("W");
echo "Le numéro de semaine de la date est : $semaine";


$aujourdhui = new DateTime('2023-11-02');
$fin_formation = new DateTime('2023-12-08');
$interval = $aujourdhui->diff($fin_formation);
$jours_restants = $interval->format('%a');
echo "Il reste $jours_restants jours avant la fin de la formation.";


function estBissextile($annee) {
    return (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0));
}

$annee = 2024; // Remplacez par l'année que vous souhaitez vérifier
if (estBissextile($annee)) {
    echo "$annee est une année bissextile.";
} else {
    echo "$annee n'est pas une année bissextile.";
}

$date = DateTime::createFromFormat('d/m/Y', '32/17/2019');
if ($date === false) {
    echo "La date est erronée.";
} else {
    echo "La date est valide.";
}


$heure_actuelle = new DateTime();
$heure_formattee = $heure_actuelle->format('H\hi');
echo "L'heure actuelle est : $heure_formattee";


$date_actuelle = new DateTime();
$date_actuelle->add(new DateInterval('P1M'));
echo "La date après avoir ajouté 1 mois est : " . $date_actuelle->format('d/m/Y');


$date_unix = new DateTime('@1000200000');
echo "Le 1000200000 correspond à la date : " . $date_unix->format('d/m/Y H:i:s');
*/
?>
<br>
<br>

Manip fichier
<?php
/*
// Lire le contenu du fichier "sites.txt" dans un tableau
$lines = file("sites.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Commencer la sortie HTML
echo "<html><head><title>Liste de Sites</title></head><body><h1>Liste de Sites</h1><ul>";

// Parcourir chaque ligne du fichier et afficher les liens hypertextes
foreach ($lines as $line) {
    echo "<li><a href=\"$line\">$line</a></li>";
}

// Fermer la liste et le corps HTML
echo "</ul></body></html>";
*/
?>


<?php
/*
// Récupération du contenu du fichier distant
$url = "https://ncode.amorce.org/customers.csv";
$file_content = file_get_contents($url);

// Découpage du contenu en lignes
$lines = explode("\n", $file_content);

// Début de la sortie HTML avec Bootstrap
echo "<html><head><title>Liste des Nouveaux Utilisateurs</title>";
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'></head><body>";
echo "<div class='container'><h1>Liste des Nouveaux Utilisateurs</h1>";

// Si le fichier CSV contient des en-têtes, vous pouvez les utiliser pour nommer les colonnes
$first_line = true;

// Affichage du tableau HTML
echo "<table class='table'>";
foreach ($lines as $line) {
    $data = explode(",", $line);

    if ($first_line) {
        echo "<thead><tr>";
        foreach ($data as $cell) {
            echo "<th>$cell</th>";
        }
        echo "</tr></thead>";
        echo "<tbody>";
        $first_line = false;
    } else {
        echo "<tr>";
        foreach ($data as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
}
echo "</tbody></table>";

// Fin de la sortie HTML
echo "</div></body></html>";
*/
?>
<br>
Les sessions
<br>




