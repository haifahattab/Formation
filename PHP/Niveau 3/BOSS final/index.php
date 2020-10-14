<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Uploader des screenshots</h1>
        <label for="j1">Joueur_1 :</label>
        <input type="text" name="joueur1">
        <label for="j2">Joueur_2 :</label>
        <input type="text" name="joueur2">
        <label>Choisir le match :</label>
        <select name="match">
            <?php
                for($i=1; $i<=64; $i++){
                    echo("<option value=$i>$i</option>");
                }
            ?>
        </select>
        <label>Le vainqueur :</label>
        <input type="checkbox" name="vainqueur1" checked>
        <label>Joueur_1</label>
        <input type="checkbox" name="vainqueur2">
        <label>Joueur_2</label>
        <input type="file" accept=".JPG, .PNG" value="Télécharger">
    </form>
    <button>Envoyer</button>
</body>
</html>