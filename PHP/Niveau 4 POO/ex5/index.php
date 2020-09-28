<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin: 20px;
        }
        
    </style>
</head>
<body>
    <div>
    <h2>Exercice 5 :</h2>
    <h3>Calculez vos impôts :</h3>

    <form action="resultatImpot.php" method="GET">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?php echo isset($_GET["nom"]) ? $_POST["nom"] : "" ?>"><br>
        <label>Revenu :</label>
        <input type="text" name="revenu" value="<?php echo isset($_GET["revenu"]) ? $_POST["revenu"] : "" ?>"><br>
        <input type="submit" name="submit" value="OK"/>
    </form>
    </div>
</body>
</html>