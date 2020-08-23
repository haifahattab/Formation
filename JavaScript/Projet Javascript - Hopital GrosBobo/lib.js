//Ajouter un élement p qui contient les définitions de chaque composant du corp.
function showContent(pNumber) {
    deleteAllP(pNumber);
    var p = document.getElementById('text' + pNumber)
    p.style.display = "block"
}

function deleteAllP(pNumber) {
    var hideP = document.getElementsByTagName("p");
    for (var i = 0; i < hideP.length; i++) {
        hideP.item(i).style.display = "none";
    }
}