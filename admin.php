<!-- admin.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Assurez-vous d'avoir un fichier de style CSS approprié -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 40px;
            text-align: center;
        }

        .admin-container h2 {
            margin-top: 75px;
        }

        .admin-container {
            max-width: 800px;

            margin: 25px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tableau de bord Admin - </h1>
        <a href="logout.php" class="dec">Déconnexion</a>

    </header>

    <div class="admin-container">
        <h2>Réservations</h2>

        <!-- Tableau des réservations -->
        <table>
            <thead>
                <tr>
                    <!-- <th>Id</th>-->
                    <th>Nom</th>
                    <th>Numéro de téléphone</th>
                    <th>Date</th>
                    <th>Commentaire</th>
                    <!-- <th>Imprimer</th>
                    <th>Supprimer</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                // Inclure le fichier de connexion à la base de données

                include 'connect/connect.php';
                // Vérifier si l'utilisateur est connecté
                if (!isset($_SESSION['username'])) {
                    header('Location: login.php'); // Rediriger vers la page de connexion
                    exit();
                }


                // Récupérer les réservations depuis la base de données
                $sql = "SELECT * FROM reservation";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['number']}</td>
                            <td>{$row['date']}</td>
                            <td>{$row['Comment']}</td>";

                    /* <td><div class='action-box'><a href='print_reservation.php?id={$row['id']}' target='_blank'><i class='fas fa-print'></i></a></div></td>
            <td><div class='action-box1'><a href='delete_reservation.php?id={$row['id']}'><i class='fas fa-trash-alt'></i></a></div></td>
          </tr>";*/
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>