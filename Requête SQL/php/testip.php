<?php
// Adresse IP du serveur
$adresse_ip_serveur = $_SERVER['SERVER_ADDR'];

// Adresse IP du client
$adresse_ip_client = $_SERVER['REMOTE_ADDR'];

echo "Adresse IP du serveur : " . $adresse_ip_serveur . "<br>";
echo "Adresse IP du client : " . $adresse_ip_client;
?>