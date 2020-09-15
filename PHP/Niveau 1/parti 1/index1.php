<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
<?php
//fonction hello world
function helloworld(){
    return("Hello world");
}
echo('<p>'.helloworld().'</p>');
function quiEstLeMeilleurProf(){
    echo("Mon super formateur de dev web <br>");
}
quiEstLeMeilleurProf();
function jeRetourneMonArgument($arg){
    echo($arg.'<br>');
    return($arg);
}
jeRetourneMonArgument(123);
function concatenation($arg1, $arg2){
    echo($arg1.$arg2.'<br>');
}
concatenation("Cours", "PHP");

//fonction concatenation
function concatenationAvecEspace($arg1, $arg2){
    echo($arg1." ".$arg2."<br>");
}
concatenationAvecEspace("Cours", "PHP");

//fonction somme
function somme($a, $b){
    $c = $a +$b;
    echo($a." + ".$b." = ".$c."<br>");
}
somme(5, 8);

//fonction soustraction
function soustraction($a, $b){
    $c = $a -$b;
    echo($a." - ".$b." = ".$c."<br>");
}
soustraction(8, 6);

//fonction multiplication
function  multiplication($a, $b){
    $c = $a *$b;
    echo($a." * ".$b." = ".$c."<br>");
}
multiplication(7, 3);

//fonction majeur
function estIlMajeur($age){
    if($age>=18){
        echo("True");
    }else{
        echo("False");
    }
 
}
estIlMajeur(17);
//fonction plus grand
function plusGrand($x, $y){
    if($x>$y){
        return($x." est plus grand que ".$y);
    }else{
        return($y." est plus grand que ".$x);
    }
}
echo("<p>".plusGrand(5,10)."</p>");

//fonction plus petit
function plusPetit($x, $y){
    if($x<$y){
        return($x." est plus petit que ".$y);
    }else{
        return($y." est plus petit que ".$x);
    }
}
echo("<p>".plusPetit(5,10)."</p>");

function lePlusPetit($a, $b, $c){
   if (($a<$b) && ($a<$c)){
        return("a = ".$a." est le plus petit");
   }elseif(($b<$a) && ($b<$c)){
        return("b = ".$b." est les plus petit");
   }else{
    return("c = ".$c." est les plus petit");
   }
}
echo("<p>".lePlusPetit(4,5,3)."</p>");
?>
</body>
</html>