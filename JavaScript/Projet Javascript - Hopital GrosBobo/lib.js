//Afficher le paragraphe à partir son id et faire appel à la fonction deleteALLP.
function showContent(pNumber) {
    deleteAllP(pNumber);
    var p = document.getElementById('text' + pNumber)
    p.style.display = "block"
}
//Cacher le paragraphe à partir son id.
function deleteAllP(pNumber) {
    var hideP = document.getElementsByTagName("p");
    for (var i = 0; i < hideP.length; i++) {
        hideP.item(i).style.display = "none";
    }
}
//Evenement sur le bouton avec Jquery.
$('button').on({
    click: function() {
        $(this).css('backgroundColor', 'red');
    },
    mouseleave: function() {
        $(this).css('backgroundColor', 'rgba(151, 148, 148, 0.8)');
    }
});