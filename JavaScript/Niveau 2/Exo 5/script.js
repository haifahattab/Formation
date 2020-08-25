function recuperation(id) {
    return document.getElementById(id);
}

function eliminer(newP) {
    newP.textContent = "je suis un poisson mort"
}
eliminer(recuperation("poisson2"));