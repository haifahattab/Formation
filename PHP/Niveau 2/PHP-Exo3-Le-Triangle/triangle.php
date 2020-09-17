<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    function triangle($n){
        $x="**";
        echo('<div align="center">'.$x.'</div>');
        $i=0;
        while($i<$n-1){
            $x= ($x."**");
            echo('<div align="center">'.$x."</div>");
            $i++;
        }
    }
    triangle(10);
?>
</body>
</html>