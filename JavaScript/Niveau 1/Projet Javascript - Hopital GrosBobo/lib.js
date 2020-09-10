//Afficher le paragraphe à partir son id et faire appel à la fonction deleteALLP.
function showContent(pNumber) {
    deleteAllP();
    var p = document.getElementById('text' + pNumber)
    p.style.display = "block"

}
//Cacher le paragraphe à partir son id.
function deleteAllP() {
    var hideP = document.getElementsByTagName("p");
    for (var i = 0; i < hideP.length; i++) {
        hideP.item(i).style.display = "none";
    }
    $('button').css('background', 'rgba(151, 148, 148, 0.8)')
}
//Evenement sur le bouton avec Jquery.
$('button').click(function() {
    $(this).css('background', 'red');
});