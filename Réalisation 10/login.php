<?php
session_start();

$erreur = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $pseudo = trim($_POST['pseudo']);

    if(empty($pseudo)){
        $erreur = 'Le pseudo est obligatoire !';
    }else{
        $_SESSION['pseudo'] = $pseudo;

        setcookie('pseudo', $pseudo, time() + 3600 );

        header("Location: acceuil.php" );
        exit;

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