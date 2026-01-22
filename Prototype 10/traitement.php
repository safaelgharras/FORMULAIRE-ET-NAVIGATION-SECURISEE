<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

if (empty($nom) || empty($email) || empty($message)){
    echo "Tous les champs sont obligatoires.";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email invalide";
}else{
    echo "Bonjour $nom, votre message est envoyé avec succès!";
}

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

    <label>Nom :</label>
    <input type="text" name="nom"><br> <br>

    <label>Email :</label>
    <input type="text" name="email"><br> <br>

    <label>Message :</label>
    <textarea name="message" id=""></textarea> <br> <br>

    <button type="submit">Envoyer</button>
    </form>
    
</body>
</html>
