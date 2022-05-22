<?php
session_start();
unset($_SESSION['player']);
unset($_SESSION['pseudo']);
unset($_SESSION['computer']);
unset($_SESSION['result']);
unset($_SESSION['playerScore']);
unset($_SESSION['computerScore']);
header('Location: /www/rps/jeu.php');
