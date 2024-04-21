<?php 
    require($_SERVER["DOCUMENT_ROOT"].'/controller/articleController.php');
    include($_SERVER["DOCUMENT_ROOT"].'/vue/templates/header.php');
    include($_SERVER["DOCUMENT_ROOT"].'/vue/templates/nav.php');
?>
<section> 
    <h1><?= $titreArticle ?></h1>

    <p><?= $texteArticle ?></p>

    <div class="boutons">
        <input type="button" value="alerte" id="alerte">
        <input type="color" value="#000" id="changeBg">
    </div>
</section>

<div class="fondPopup elementInvisible">
    <div class="contenuPopup">
        <div class="textePopup">
            bonjour :) ceci est le contenu de la popup
        </div>    
        <input type="button" id="fermerPopup" value="fermer">
    </div>
</div>

<?php
    include($_SERVER["DOCUMENT_ROOT"].'/vue/templates/footer.php');
?>