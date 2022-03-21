<?php
echo $_GET['choice'];
$choices = ['rock', 'paper', 'scissors'];
$playerChoice = $_GET['choice'];
$computerChoice = $choices[array_rand($choices)];
echo $computerChoice;
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
session_start();
if ($result == "You Lost") {
    $_SESSION['computerScore']++;
} else if ($result == "You Win") {
    $_SESSION['playerScore']++;
}
$_SESSION['result'] = $result;

// Player choice set for display result
if ($playerChoice == "rock") {
    $_SESSION['player'] = "fa-hand-back-fist";
} else if ($playerChoice == "paper") {

    $_SESSION['player'] = "fa-hand";
} else if ($playerChoice == "scissors") {
    $_SESSION['player'] = "fa-hand-scissors";
}

// Computer choice set for display result
if ($computerChoice == "rock") {
    $_SESSION['computer'] = "fa-hand-back-fist";
} else if ($computerChoice == "paper") {

    $_SESSION['computer'] = "fa-hand";
} else if ($computerChoice == "scissors") {
    $_SESSION['computer'] = "fa-hand-scissors";
}

header('Location: /rps/');
