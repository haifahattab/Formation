<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function conjectureSyracuse($nbr){
        if($nbr <=0 || !(is_int($nbr))){
            echo("Le nombre choisi est invalide");
        }else{
            echo($nbr);
        while($nbr != 1){
            if($nbr<=0){
            }
            elseif($nbr%2 ==0){
                $nbr = $nbr/2;
                echo(" ".$nbr." ");
            }else{
                $nbr = ($nbr * 3)+ 1;
                echo(" ".$nbr." ");
            }
        }
    }
    }
    conjectureSyracuse(25);
    ?>
</body>
</html>