$( document ).ready(function() {
    $('form select').on('change', function(){
        $(this).closest('form').submit();
    });

    $('#alerte').on('click', function(){
        $('.fondPopup').toggleClass("elementVisible");
        $('.fondPopup').toggleClass("elementInvisible");
        $('section p').toggleClass("texteVert");
    });

    $('#fermerPopup').on('click', function(){
        $('.fondPopup').toggleClass("elementVisible");
        $('.fondPopup').toggleClass("elementInvisible");
        $('section p').toggleClass("texteVert");
    });

    $('#changeBg').on('change', function(){
        $nouvelleCouleur = $('#changeBg').val();
        $('section').css("backgroundColor", $nouvelleCouleur);
    });

});