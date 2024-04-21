<?php
    // le model dont l'on a besoin + la bdd
    require_once($_SERVER["DOCUMENT_ROOT"].'/model/article.php');
    require_once($_SERVER["DOCUMENT_ROOT"].'/database/config.php');

    // on les instancie pour pouvoir utiliser les méthodes qui permettent de les manipuler
    $article = new Article;
    $data = new Database;

    $lang = (isset($_GET['lang']))?$data->setLang($_GET['lang']):$data->getLang();

    // le titre de la page sera ici le même que celui de l'article
    $titrePage = $article->getTitreArticle($lang);

    // données à utiliser sur la page de l'article. S'il y avait eu beaucoup plus de données, j'aurai fait un tableau
    $titreArticle = $article->getTitreArticle($lang);
    $texteArticle = $article->getTexteArticle($lang);

?>