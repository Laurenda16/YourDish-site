<?php
session_start();  // Démarrez la session sur la page de confirmation

// Affichez le message de réservation s'il est disponible
if (isset($_SESSION['reservation_message'])) {
    echo '<h1>' . $_SESSION['reservation_message'] . '</h1>';
    // Effacez le message de la session une fois qu'il a été affiché
    unset($_SESSION['reservation_message']);
} else {
    // Si le message n'est pas disponible, redirigez l'utilisateur vers la page d'accueil ou une autre page
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="entete">
        <h2>confirmation</h2>
    </div>
    
</body>
</html>