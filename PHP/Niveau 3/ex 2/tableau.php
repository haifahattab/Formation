<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Objectif :</h1>
    <h2>Effectuer des opérations sur les tableaux associatifs.</h2>
    <?php
        $notes = ["Roger" => 12, "Monica" => 16, "Najat" => 15];
        $notes["Anton"] = 10;

        foreach ($notes as $i => $elt){
            echo $i." : ".$elt."<br>";
        }

        print_r($notes);
        echo("<br><br>");

        //supprimer un élement du tableau
        unset($notes["Monica"]);

        var_dump($notes);

        //note maximale
        echo("La note maximale est : ".max($notes));
        echo '<br><br>';

        //note minimale
        echo ("La note minimale est : ".min($notes));
        echo '<br><br>';
        ksort($notes);
        print_r($notes);
        echo('<br><br>');
        arsort($notes);
        var_dump($notes);
        echo('<br><br>');
        $somme = 0;
        foreach($notes as $i => $elt){
            $somme += $elt;
        }
        $moyenne = $somme/count($notes);
        echo("La moyenne de la classe est : ".$moyenne);
    ?>
</body>
</html>