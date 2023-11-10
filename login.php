<!-- login.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Assurez-vous d'avoir un fichier de style CSS approprié -->
</head>

<body>
    <div class="login-container">
        <h2>Connexion Administrateur</h2>
        <form action="login_process.php" method="post">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>

            <input type="submit" value="Connexion" name="login">
        </form>
    </div>
</body>

</html>