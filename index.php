<?php
include './Des.php';
include './Joueur.php';
include './Partie.php';

$joueur1 = new Joueur("Jacob", new Des(6));
$joueur2 = new Joueur("Benoit", new Des(6));

$partie = new Partie($joueur1, $joueur2, 5);
$partie->lancerPartie();