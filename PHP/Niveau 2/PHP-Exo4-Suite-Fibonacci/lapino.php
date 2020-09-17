<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*function fibonacci($month){
            $i = 1;
            $x = 0;
            $y = 1;
            while($i<$month){
                $stock = $x + $y;
                $x = $y;
                $y = $stock;
                $i++;
            }
            echo(" ".$stock." ");
        }
        fibonacci(12);*/
        function fibonacci($n){
            if($n >= 2){
             return fibonacci($n - 1 )+ fibonacci($n-2);
            }else
            {
                return $n;
            }
                
        }
   echo (fibonacci(12));
    ?>
</body>
</html>