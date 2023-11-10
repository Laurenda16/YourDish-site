<!-- login_process.php -->
<?php
session_start();

// Inclure le fichier de connexion à la base de données
include 'connect/connect.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Remplacez la requête suivante par la méthode appropriée pour vérifier les informations d'identification
    $sql = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        // Authentification réussie, créer une session admin
        $_SESSION['admin'] = true;
        header('Location: admin.php'); // Rediriger vers la page d'administration
        exit();
    } else {
        $_SESSION['erreur_login'] = "Nom d'utilisateur ou mot de passe incorrect.";
        header('Location: login.php');
    }
}

// Assurez-vous d'ajuster le chemin du fichier de connexion et de personnaliser la requête SQL selon votre structure de base de données
?>