<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function conjuguer($str){
            $str= "";
            $n = strlen($str);
            for($i=$n-1; $i<= $n-2; $i--){
                $test = $str[i];
                echo $test;
            }
            //La chaîne passée en paramètre ne doit pas dépasser 15 caractères ni contenir d'espaces.
            // Vérifiez que la chaîne passée en paramètre se termine bien par "er".
            if(strlen($str <= 15) && $str != " ") && $test = "er"){
                str_replace($test);
            }
        }
    ?>
</body>
</html>