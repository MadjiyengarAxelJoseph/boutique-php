<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "gestion_boutique";

$conn = mysqli_connect(
    $serveur,
    $utilisateur,
    $motdepasse,
    $base
);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}
?>