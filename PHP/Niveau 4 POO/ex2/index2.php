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
                private $nom;
                private $departement;
                public function __construct($n, $p){
                    $this->nom = $n;
                    $this->departement = $p;
                }
                public function getinfo()
                  {
                    return "La ville de $this->nom est dans le département : $this->departement <br />";
                  }
        }

    //Création d'objets
        $ville1 = new ville("Nantes", "Loire Atlantique");
        $ville2 = new ville("Antibes", "Alpes Maritimes");

    echo "<div>".$ville1->getinfo()."</div>";
    echo "<div>".$ville2->getinfo()."</div>";
    ?>
</body>
</html>