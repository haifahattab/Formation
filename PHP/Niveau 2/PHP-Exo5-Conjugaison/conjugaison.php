<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
function  conjuguer($verbe) {
    //La chaîne passée en paramètre ne doit pas dépasser 15 caractères ni contenir d'espaces.
    // Vérifiez que la chaîne passée en paramètre se termine bien par "er".
     if(preg_match('/^[^ ]{0,14}er$/', $verbe)) {
        $newVerb = preg_replace('/er$/', '', $verbe);
        echo '<p>Je '.$newVerb.'e</p>';
        echo '<p>Tu '.$newVerb.'es</p>';
        echo '<p>Il '.$newVerb.'e</p>';
        if(preg_match('/g$/', $newVerb)) {
            echo '<p>Nous '.$newVerb.'eons</p>';
        } else {
            echo '<p>Nous '.$newVerb.'ons</p>';
        }
        echo '<p>Vous '.$newVerb.'ez</p>';
        echo '<p>Ils '.$newVerb.'ent</p>';
    } else {
        echo '<p>Le verbe doit être un verbe du premier groupe de moins de 15 lettres et ne doit pas contenir d\'espace.</p>';
    }
};
echo '<div align="center">';
conjuguer("sortir");
conjuguer("programmer");
conjuguer("manger");
echo '</div>';
?>
</body>
</html>