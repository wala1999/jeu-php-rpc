<?php
$pseudo = $_POST['pseudo'];
if ($pseudo != '') {
    session_start();
    $_SESSION['pseudo'] = $pseudo;
}
header('Location: /www/rps/jeu.php');
