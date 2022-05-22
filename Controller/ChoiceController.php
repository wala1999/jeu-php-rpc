<?php

// Initialise un tableau qui permettra à l'ordinateur de choisir
$choices = ['rock', 'paper', 'scissors'];
$playerChoice = $_GET['choice'];

// Vérifie si le joueur a bien choisi une pierre un papier ou un ciseau
if (in_array($playerChoice, $choices)) {
    session_start();
    $computerChoice = $choices[array_rand($choices)];
    setResult($playerChoice, $computerChoice);

    // Permet de déterminer l'icon du joueur
    setIcon($playerChoice, 'player');

    // Permet de déterminer l'icon du joueur
    setIcon($computerChoice, 'computer');

    header('Location: /www/rps/resultats.php');
} else {
    header('Location: /www/rps/jeu.php');
}

// Permet de définir l'icone à afficher dans la page de résultat
// L'icone correspond au choix du joueur et de l'ordinateur
function setIcon($choice, $player)
{
    if ($choice == "rock") {
        $_SESSION[$player] = "fa-hand-back-fist";
    } else if ($choice == "paper") {
        $_SESSION[$player] = "fa-hand";
    } else if ($choice == "scissors") {
        $_SESSION[$player] = "fa-hand-scissors";
    }
}

// Permet de déterminer qui a gagné la manche
function setResult($playerChoice, $computerChoice)
{
    if ($computerChoice == $playerChoice) {
        $result = "Draw";
    } else {

        switch ($playerChoice) {
            case "paper":
                $result = $computerChoice == "rock" ? "You Win" : "You Lost";
                break;
            case "scissors":
                $result = $computerChoice == "rock" ? "You Lost" : "You Win";
                break;
            case "rock":
                $result = $computerChoice == "paper" ? "You Lost" : "You Win";
                break;
            default:
                $result = "Draw";
        }
    }

    // Permet d'incrémenter le score selon qui a gagné la manche
    if ($result == "You Lost") {
        $_SESSION['computerScore']++;
    } else if ($result == "You Win") {
        $_SESSION['playerScore']++;
    }
    $_SESSION['result'] = $result;
}
