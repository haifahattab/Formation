<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Objectif :</h1>
    <h2>Créer un compteur qui s’incrémente automatiquement à chaque fois qu’une page est visitée.</h2>
    <?php
        $fname = 'compteur.txt';
        if(file_exists($fname)) {
            $count = fopen($fname, "r");
            $i = (int)fread($count, 1);
            fclose($count);
            $i++;
            $fileOpen = fopen($fname, "w");
            fwrite($fileOpen, $i);
            fclose($fileOpen);
            echo "Visites : " . $i;
    
        } else {
            $count = fopen($fname, "w");
            fwrite($count, "1");
            fclose($count);
            echo "Visites : 1";
        }
        

?>
</body>
</html>