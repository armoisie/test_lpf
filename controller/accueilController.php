<?php
// model nécessaire pour appeler les méthodes dont j'ai besoin
require_once($_SERVER["DOCUMENT_ROOT"].'/model/article.php');

function pageAccueil() {
	require($_SERVER["DOCUMENT_ROOT"].'/vue/article.php');
}

?>