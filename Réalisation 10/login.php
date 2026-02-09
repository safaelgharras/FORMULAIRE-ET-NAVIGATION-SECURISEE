<?php
 session_start(); // pour stocker les infos d'utilisateur entre les pages sans elle on peut pas utiliser session

$erreur = ""; // une variable vide se remplie automatiquement si y a une erreur 

if($_SERVER["REQUEST_METHOD"] === "POST"){ // se code ne fonctionne quand on clique sur se connecter et si la requette est envoyée par la méthode post
    $pseudo = trim($_POST['pseudo']); // valeur envoyée depuis form ; trim pour les espaces gauches et droites 

    if(empty($pseudo)){ // vérifier si le pseudo est vide = true 
        $erreur = 'Le pseudo est obligatoire !'; // si oui afficher l'erreur dans la variable qu'on a laisser vide 
    }else{ // si pseudo n'est pas vide cette else fonctionne 
        $_SESSION['pseudo'] = $pseudo; // stocker pseudo dans session 

        setcookie('pseudo', $pseudo, time() + 3600 ); // garder le pseudo wakha browser ytsed, une cookie reste pour une heure 

        header("Location: acceuil.php" ); //après un login successible en prend l'utilisateur a la page d'acceuil
        exit; // pour terminer l'execution du code 

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>
<body>

<div class="container">
    <div class="card">

        <h2>Connexion</h2>

        <?php
        if (isset($erreur) && !empty($erreur)) {
            echo "<p class='error'>$erreur</p>";
        }
        ?>

        <form method="POST">
            <label>Pseudo :</label>
            <input type="text" name="pseudo">

            <button type="submit">Se connecter</button>
        </form>

    </div>
</div>

</body>

</html>