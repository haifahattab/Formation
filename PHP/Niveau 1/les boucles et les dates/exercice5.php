<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Q1 et Q2
    function verificationPassword($pwd)
    {
        if(strlen($pwd)>=8){
            return (true);
        }else{
            return(false);
        }
    }
    
    $verif= verificationPassword('pass1234');
    echo(var_dump($verif));
    
    function verificationPassword2($pwd)
    {
        $pattern = preg_match("/[0-9]/",$pwd);
        if (strlen($pwd) >= 8 && strtolower($pwd) != $pwd && $pattern) {
            return ('true');
        } else {
            return ('false');
        }
    };
    
    echo '<p>' . verificationPassword2('Password4') . '</p>';
    echo '<p>' . verificationPassword2('Passw') . '</p>';
//Q3
    function Capital($pays){
        switch(strtolower($pays)){
            case("france") : echo('Paris <br>');
            break;
            case("allemagne") : echo('Berlin <br>');
            break;
            case("italie") : echo("Rabat <br>");
            break;
            case("espagne") : echo("Madrid <br>");
            break;
            case ('portugal'): echo ('Lisbonne');
            break;
            case ('angleterre'): echo ('Londre');
            break;
            default : echo('Inconnu');
        }
    }
    Capital("espagne");
    Capital("France");
//Q4
    function listHTML($nom_liste, array $table){
        echo ("<h3>".$nom_liste."</h3>");
        echo("<ul>");
            foreach($table as $i => $elt){
        echo("<li>".$elt."</li>");
        }
        echo("</ul>");
    }
    listHTML("capital", array("Paris", "Berlin", "Tunisie"));
//Q5
    function remplacerLesLettres($str){
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == "e") {
            $str[$i] = '3';
        } elseif ($str[$i] == "i") {
            $str[$i] = '1';
        } elseif ($str[$i] == "o") {
            $str[$i] = '0';
        }
    }
    return $str;
}

echo '<p>'.remplacerLesLettres("Bonjour les amis").'</p>';
echo '<p>'.remplacerLesLettres("La programmation Web est trop cool").'</p>';

//Q6
    function quelleAnnee(){
         $annee = date('Y');
         echo("<p>L'année actuelle est : ".$annee."</p>");
    }
    quelleAnnee();

//Q7
    function quelleDate(){
        $date = date('d/m/Y');
        echo("<p>La date d'aujourd'hui est : ".$date."</p>");
    }
    quelleDate();
    ?>
</body>
</html>