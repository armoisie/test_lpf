<?php
// ici, j'importerait les librairies extérieures si j'en avais
// et ici je lancerais l'appli

//début de séssion
session_start();

// j'appelle le controller qui fait office d'acceuil.
require_once('controller/accueilController.php');

// redirige depuis le point d'entrée vers un semblant de page d'accueil qui elle-même renverra vers la page article, mais en principe il y aurait effectivement eu une page d'accueil avant de passer vers les articles
pageAccueil();

// en principe j'aurais récupéré l'accueil mais puisque je dois afficher un paragraphe, c'était plus facile de m'y retrouver avec un "article"
?>
