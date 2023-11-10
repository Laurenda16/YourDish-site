<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$user = 'root';
$password = '';
$database = '';

// Établir la connexion à la base de données
$con = mysqli_connect($host, $user, $password, $database);

// Vérifier la connexion
if (!$con) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
?>
