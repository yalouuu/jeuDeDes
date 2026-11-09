<?php
//importer mes ressources (Des avant Joueur, Joueur avant Partie)
include './Des.php';
include './Joueur.php';
include './Partie.php';

//Créer les deux joueurs, chacun avec son dé à 6 faces
$joueur1 = new Joueur("Jacob", new Des(6));
$joueur2 = new Joueur("Benoit", new Des(6));

//Créer la partie de 5 tours et la lancer
$partie = new Partie($joueur1, $joueur2, 5);
$partie->lancerPartie();