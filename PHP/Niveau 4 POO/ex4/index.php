<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            include('class_form.php');
            //***************************
                    $myform = new form("traitement.php","Accès au site","post");
                    $myform->settext("nom","Votre nom :  ");
                    $myform->settext("code","Votre code : ");
                    $myform->setsubmit();
                    $myform->getform();
        ?>

<p> A vous de compléter les méthodes de la classe form afin d'obtenir le résultat suivant lors de l'appel à $myform->getform() dans l'exemple ci-dessus :</p>

        <form action="traitement.php" method="post">
            <fieldset>
                <legend><span>Accès au site</span></legend>
                <span>Votre nom :  </span><input type="text" name="nom" /><br /><br />
                <span>Votre code : </span><input type="text" name="code" /><br /><br />
                <input type="submit" name="envoi" value="Envoyer"/><br />
            </fieldset>
        </form>

</body>
</html>