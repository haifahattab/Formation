let pierre = document.querySelector('#pierre'),
    feuille = document.querySelector('#feuille'),
    ciseaux = document.querySelector('#ciseaux'),
    partie = document.querySelector('#partie'),
    result = document.querySelector('#result');
const tab = [pierre, feuille, ciseaux];
//cette fonction permet de recuperer l'id
//Accrochez un écouteur d'évenement qui détecte le click sur chacun des boutons et qui lance la fonction jeu

tab.forEach((btn) => {
    btn.addEventListener("click", function() {
        jeu(this.id);

    })
})

function jeu(id) {
    let joueur_1_user = id,
        //choix aléatoire du tableau tab
        joueur_2_ordi = tab[Math.floor(Math.random() * tab.length)].id
    partie.textContent = "L'ordinateur à jouer **" + joueur_2_ordi + "** Le joueur à jouer **" + joueur_1_user + "**"
    let result;
    if ((joueur_1_user == "ciseaux" && joueur_2_ordi == "feuille") ||
        (joueur_1_user == "feuille" && joueur_2_ordi == "pierre") ||
        (joueur_1_user == "pierre" && joueur_2_ordi == "ciseaux")) {
        result.textContent = "Gagné !";
    } else if (joueur_2_ordi == joueur_1_user) {
        result.textContent = "Égalité !";
    } else {
        result.textContent = "Perdu !";
    }
}