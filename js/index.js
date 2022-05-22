// Bouton du choix de l'ia
let iconIa = document.getElementById('choice-ia');
// Bouton qui permet de temporairement cacher le choix de l'ordinateur
let iconQuestion = document.getElementById('choice-question');
// La partie qui affiche le score
let scoreboard = document.getElementById('scoreboard');
// La partie qui montre le resultat de la manche
let result = document.getElementById('text-result');
// Le bouton play
let playButton = document.getElementById('play')
// Le bouton reset
let resetButton = document.getElementById('reset')

// Permet de faire fonctionner un timer pour afficher le resultat à la fin
// Ainsi que les différents bouton pour rejouer la partie ou la terminer
setTimeout(() => {
    iconQuestion.classList.remove('fa-3');
    iconQuestion.classList.add('fa-2');
}, 1000)
setTimeout(() => {
    iconQuestion.classList.remove('fa-2');
    iconQuestion.classList.add('fa-1');
}, 2000)
setTimeout(() => {
    iconQuestion.classList.remove('fa-1');
    iconQuestion.classList.add('fa-0');
}, 3000)
setTimeout(() => {
    iconQuestion.classList.remove('fa-0');
    iconQuestion.classList.add('d-none');
    iconIa.classList.remove('d-none');
    result.classList.remove('invisible');
    playButton.classList.remove('invisible');
    resetButton.classList.remove('invisible');
    scoreboard.classList.remove('invisible');
}, 4000)