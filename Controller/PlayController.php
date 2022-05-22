<?php
session_start();
unset($_SESSION['player']);
unset($_SESSION['computer']);
unset($_SESSION['result']);
header('Location: /www/rps/jeu.php');
