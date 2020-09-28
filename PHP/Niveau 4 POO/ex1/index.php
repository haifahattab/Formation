<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Création de classe
        class ville
        {
                public $nom;
                public $departement;
                public function getinfo()
                  {
                    return "La ville de $this->nom est dans le département : $this->departement <br />";
                  }
        }

    //Création d'objets
        $ville1 = new ville();   // on appelle le constructeur de classe
        $ville1->nom="Nantes";  // on lui donne son nom
        $ville1->departement="Loire Atlantique";

        $ville2 = new ville();
        $ville2->nom="Antibes";
        $ville2->departement="Alpes Maritimes";

    echo "<div>".$ville1->getinfo()."</div>";
    echo "<div>".$ville2->getinfo()."</div>";
    ?>
</body>
</html>