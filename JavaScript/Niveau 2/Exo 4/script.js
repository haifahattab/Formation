function addition(a) {
    return (a + 10);
}

function multiplie(b) {
    return (b * 4)
}
//La fonction addition est donnée en argument à la fonction multiplie pour multiplier le resultat de la fonction addition.
console.log(multiplie(addition(6)));