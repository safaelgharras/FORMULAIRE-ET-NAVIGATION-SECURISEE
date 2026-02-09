<?php
session_start(); // sans elle php ne peut pas savoir quelle est la session de l'utilisateur importanate pour q'on peut lire les variables stocker dans session

if (!isset($_SESSION['pseudo'])) { // pour checker si y a un pseudo dans la session ou non 
    header("Location: login.php"); // si il n'est pas connecter , on lui rend a la page de login 
    exit; // on arrette le code ici pour qu'il ne peut plus terminer le chargement de la page après redirect 
}

$pseudo = $_SESSION['pseudo']; // en stock la valeur de pseudo dans la session dans un variable pour qu4on peut l'utiliser dans html
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
        <h1>Bienvenue <span><?php echo htmlspecialchars($pseudo); ?></span> </h1> <!--convertir les caractères HTML spéciaux en texte normal, afin d’empêcher l’exécution de code malveillant et de sécuriser l’affichage des données utilisateur (protection contre les attaques XSS)-->
        <p>Vous êtes connecté avec succès.</p>

        <a href="logout.php" class="logout-btn">Se déconnecter</a>
    </div>
</div>

</body>

</html>
