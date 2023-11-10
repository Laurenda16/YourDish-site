<?php
include 'connect/connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];

    $sql = " insert into `reservation` (name,number,date,comment) values('$name', '$number', '$date', '$comment')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Stockez le message dans une variable de session
        $_SESSION['reservation_message'] = 'Merci pour votre réservation.';
        // Redirigez l'utilisateur vers la page de confirmation
        header('Location: confirmation.php');
        exit();  // Assurez-vous de terminer l'exécution du script après la redirection
    } else {
        die(mysqli_error($con));
    }
}
