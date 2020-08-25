var mine = 100;

//Ecrivez ici la boucle qui vous permet d'enlever 1 unité d'or de la mine et d'annoncer
//dans la console combien il reste d'or dans la mine.
for (var i = 1; i < 100; i++) {
    mine -= 1
    console.log("il reste " + mine + " or dans la mine")
}
console.log("La mine est vide")