<?php
include 'connect/connect.php';

// Récupérer l'ID de la réservation depuis la requête GET
$reservation_id = $_GET['id'];

// Supprimer la réservation de la base de données
$sql = "DELETE FROM reservation WHERE id = $reservation_id";
$result = mysqli_query($con, $sql);

if ($result) {

    header('location:admin.php');
    echo "Réservation supprimée avec succès.";
} else {
    echo "Erreur lors de la suppression de la réservation.";
}
