<?php
$erreurs = [];
$nom = $email = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);

    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire.";
    }
    if (empty($email)) {
        $erreurs[] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'email n'est pas valide.";
    }

    if (empty($erreurs)) {
        echo "<p class='success'>Formulaire envoyé avec succès !</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        form {
            background-color: #ffffff;
            width: 320px;
            padding: 20px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        ul {
            width: 320px;
            margin: 20px auto;
            padding-left: 20px;
            color: red;
        }

        .success {
            text-align: center;
            font-weight: bold;
            color: green;
        }
    </style>
</head>

<body>

<form method="POST" action="">
    <label>Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>">

    <label>Email :</label>
    <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">

    <button type="submit">Envoyer</button>
</form>

<?php
if (!empty($erreurs)) {
    echo "<ul>";
    foreach ($erreurs as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
