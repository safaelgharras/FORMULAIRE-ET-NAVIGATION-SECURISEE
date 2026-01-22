<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nom = trim($_POST['nom']);
    if (!empty($nom)){
        $_SESSION['utilisateur'] = $nom;
        header('location: profile.php');
        exit;
}else{
    $message = 'Veuillez entrer votre nom.';
}
}

?>

<form method="POST">
    <label >Nom</label>
    <input type="text" name="nom">
    <button type="submit">LogIn</button>
</form>

<?php if (!empty($message)) echo "<p style='color:red;'>$message</p>"; ?>


