<?php
 session_start();

 session_unset();
 session_destroy();

 setcookie("pseudo", "", time() -1);

header("Location: login.php");
exit;


 ?>

