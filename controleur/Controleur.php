<?php

require './modele/Modele.php';

// Page d'accueil Alphabet
function alphabet() {
  require './vue/vueAlphabet.php';
}

// Page Syllabes
function syllabes() {
  require './vue/vueSyllabes.php';
}

// Jeux
function jeux() {
  require './vue/vueJeux.php';
}



// Affiche une erreur
function erreur($msgErreur) {
	require './vue/vueErreur.php';
}

