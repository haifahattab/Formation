//Les variables
let nombre = 42,
    tab = [2, 5, 6, 7, 9],
    chaine = "ceci est une chaine de caracteres";
console.log(nombre);
console.log(tab);
console.log(chaine);
//Conditions

//if, else if ,else
if (nombre >= 50) {
    console.log('super moitmoit')
} else if (nombre <= 40) {
    console.log("peux mieux faire")
} else {
    console.log("la grande réponse")
}

//switch
switch (tab.length) {
    case 10:
        console.log("il y a 10 éléments dans le tableau");
        break;
    case 5:
        console.log("il y a 5 éléments dans le tableau");
        break;
    case 0:
        console.log("le tableau est vide");
        break;
    default:
        console.log("Je ne connais pas le nombre d'éléments du tableau");
}
//Boucles
//while
let i = 0;
while (i < 5) {
    console.log("Messire, on en a gros");
    i++;
}

//for
for (let i = 0; i <= tab.length; i++) {
    console.log(tab[i]);
}