<?php
 session_start(); // Démarre la session afin de pouvoir la manipuler et la supprimer

 session_unset(); //Supprime toutes les variables stockées dans la session (par exemple le pseudo)
 session_destroy(); // Détruit complètement la session du côté du serveur

 setcookie("pseudo", "", time() -1); // Supprime le cookie pseudo en lui donnant une date d’expiration passée

header("Location: login.php"); // Redirige l’utilisateur vers la page de connexion après la déconnexion
exit; //Arrête l’exécution du script pour éviter que du code s’exécute après la redirection

?>

