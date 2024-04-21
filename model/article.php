<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/database/config.php");

// objet article
class Article {
    public string $titre;
    public string $lang;
    public string $contenu;

    public function getTitreArticle($lang){
        $chemin = $_SERVER["DOCUMENT_ROOT"].'/database/data/data.json';
        $data = new Database;
        $data = $data->getJson($chemin);
        return $titreArticle = $data[$lang]['titre'];
    }

    public function getTexteArticle($lang){
        $chemin = $_SERVER["DOCUMENT_ROOT"].'/database/data/data.json';
        $data = new Database;
        $data = $data->getJson($chemin);
        return $titreArticle = $data[$lang]['texte'];
    }
}

/*  exemple d'autres objets que j'aurais pu créer :
    - une classe date avec des méthodes static pour rendre visibles les dates renvoyées par une bdd mariadb ou autres
    - une classe utilisateur

    Avec une autre façon de faire, j'aurais également pu faire une classe Page héritant d'une page Configuration contenant toutes les méthodes créer une page, mais de cette manière on s'éloigne pas mal du MVC
*/
?>