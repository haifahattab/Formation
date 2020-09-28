<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class personne
        {
            private $nom;
            private $prenom;
            private $adresse;
        
            //Constructeur
            public function __construct($nom, $prenom, $adresse)
            {
                $this->nom=$nom;
                $this->prenom=$prenom;
                $this->adresse=$adresse;
            }
        
            //Destructeur
            public function __destruct()
            {
                echo "<script type=\"text/javascript\">alert('La personne nommée $this->prenom $this->nom \\n est supprimée de vos contacts')</script>";
            }
        
            // renvoie une représentation de la personne sous la forme d'une chaine de caractère.
            public function getPersonne()
            {
                return "$this->prenom $this->nom habite à $this->adresse <br>";
            }
            //modification de l'adresse
            public function setadresse($ad){
                $this->adresse = $ad;
            }
        }

       //Création d'objets
        $client = new personne("Geelsen","Jan"," 145 Rue du Maine Nantes");
        echo $client->getPersonne();
        //Modification de l'adresse
        $client->setadresse("23 Avenue Foch Lyon");
        echo $client->getPersonne();
        $explicit_destruct = false ;

        if ($explicit_destruct)
        {
            //Suppression explicite du client avec unset, donc appel implicite au destructeur
            unset($client);
            echo '$client unset, appel au destructeur pour libérer la mémoire occupée par $client<br>';
        }

        if (isset($client)) 
        {
            echo '$client existe encore, il va être nettoyé par le garbage collector en faisant appel à son destructeur<br>' ;
        }

        echo "Fin du script";
        //Fin du script, le destructeur est appelé sur tous les objects encore vivants. Si $explicit_destruct est à false et donc si $client existe encore à ce stade du script, alors le destructeur sera appelé sur $client. 
    ?>

</body>
</html>