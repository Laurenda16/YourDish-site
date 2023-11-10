<?php
include 'connect/connect.php';

// Récupérer l'ID de la réservation depuis la requête GET
$reservation_id = $_GET['id'];

// Récupérer les détails de la réservation
$sql = "SELECT * FROM reservation WHERE id = $reservation_id";
$result = mysqli_query($con, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo "<h1>Détails de la Réservation</h1>";
    echo "<p>Nom: {$row['name']}</p>";
    echo "<p>Numéro de téléphone: {$row['number']}</p>";
    echo "<p>Date: {$row['date']}</p>";
    echo "<p>Commentaire: {$row['Comment']}</p>";

    // Bouton d'impression
    echo "<button onclick='window.print()'>Imprimer</button>";
} else {
    echo "Réservation non trouvée.";
}
