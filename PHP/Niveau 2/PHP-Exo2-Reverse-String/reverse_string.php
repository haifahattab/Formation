<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function reverse_string($str){
            //echo(strrev($str));
            $length= strlen($str);
            for($i= $length-1; $i>=0 ;$i--){
                echo($str[$i]);
            }
        }
        reverse_string("Haifa");
    ?>
</body>
</html>