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
    

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f4ff; /* bleu clair */
    }

    form {
        background-color: white;
        width: 300px;
        margin: 60px auto;
        padding: 20px;
        border-radius: 6px;
    }

    label {
        font-weight: bold;
        color: #003366;
    }

    input, textarea {
        width: 100%;
        padding: 8px;
        border: 2px solid #ccc;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    /* Quand on clique dans l’input */
    input:focus,
    textarea:focus {
        transform: scale(3.7);
        max-width:100%;
        border-color: #003366;
        box-shadow: 0 0 6px rgba(0, 51, 102, 0.5);
        outline: none;
    }


    button {
        width: 100%;
        padding: 10px;
        background-color: #003366;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    button:hover {
        opacity: 0.9;
    }

    p {
        text-align: center;
        font-weight: bold;
        color: #003366;
    }
</style>


</body>
</html>
