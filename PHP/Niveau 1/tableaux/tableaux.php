<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Q1
    function premierElementTableau(array $table){
        if(empty($table[0])){
            echo("NULL <br>");
        }else{
            echo($table[0]."<br>");
        }
    }
    premierElementTableau(array("","b","c","d"));

    //Q2
    function dernierElementTableau(array $table){
        $stock= end($table);
        if(!empty($stock)){
        echo ($stock."<br>");
        }else{
            echo('Null <br>');
        }
    }
    dernierElementTableau(array("a", "b", "c", "d"));

    //Q3
    function  plusGrand(array $tab){
        if(!empty($tab)){
            echo(max($tab)." est le plus grand <br>");
        }else{
            echo("Null <br>");
        }
        
    }
    plusGrand(array(5, 3, 8, 9, 20, 10));

    //fonction plus petit Q4
    function  plusPetit(array $tab){
        if(!empty($tab)){
            echo(min($tab)." est le plus petit <br>");
        }else{
            echo("Null <br>");
        }
    }
    plusPetit(array(5, 3, 8, 9, 20, 10));
    ?>
</body>
</html>