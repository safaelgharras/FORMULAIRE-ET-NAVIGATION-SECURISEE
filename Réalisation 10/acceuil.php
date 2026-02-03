<?php
session_start();

if (!isset($_SESSION['pseudo'])) {
    header("Location: login.php");
    exit;
}

$pseudo = $_SESSION['pseudo'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body>

<div class="container">
    <div class="card">
        <h1>Bienvenue <span><?php echo htmlspecialchars($pseudo); ?></span> </h1>
        <p>Vous êtes connecté avec succès.</p>

        <a href="logout.php" class="logout-btn">Se déconnecter</a>
    </div>
</div>

</body>

</html>
