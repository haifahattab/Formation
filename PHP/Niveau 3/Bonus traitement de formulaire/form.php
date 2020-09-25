<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>

        h2{
            font-family :Arial;
            font-size: 80px;
            color: blue;
        }
        h3{
            font-size: 30px;       
        }
        h4 {
           font-size:20px;
           margin-left:60px;
         
        }
        li {
            margin-left:60px;
            
        }
      
        .form{ 
            display: flex;
            flex-direction: row;
            background-color: white;       
        }
        .form1 { 

            padding-right:50px;
            margin-left: 250px;
        }
      
        label {
             font-size:20px;
             font-family:Arial;
             color: green ;
         }

        .fortnite{
            margin: 50px;
        }
        
    </style>
</head>
    
<body>


<h2> Exercice 1</h2>

    <ul>
        <h3>  Créez un formulaire qui vous demande : </h3>
        <li>Votre nom</li>
        <li>Votre prénom</li>
        <li>Votre ville de naissance</li>
    </ul>

    <h4> ===> Lorsque le formulaire est soumis, affichez une phrase du type : “Bonjour prenom nom, vous êtes né à ville.” </h4>
    <h4> ===> Créez une version avec la méthode GET et une autre avec la méthode POST pour vous entraîner . </h4>

    <div class="form">

        <?php
                if (isset($_GET["submit"])) {
                    echo " <H1>Bonjour ". $_GET["name"] ." ". $_GET["fname"]." Vous êtes né à " . $_GET["city"]."</H1>";
                }
        ?>
        <form action="#" method="get" class="form1">
            <label for="name">Nom :</label><br>
            <input type="text" id="name" name="name" placeholder="Taper votre nom"><br>
 
            <label for="fname">Prénom :</label><br>
            <input type="text" id="fname" name="fname"  placeholder="Taper votre prénom"><br>

            <label for="city">Ville :</label><br>
            <input type="text" id="city" name="city" placeholder="Taper votre lieu de naissance"  style =" width:300px"><br>

            <input type="submit" value="Envoyer" name="submit">
        </form>

        <form action="#" method="post">
            <label for="pname">Nom :</label><br>
            <input type="text" id="pname" name="pname" placeholder="Taper votre nom" ><br>

            <label for="fname">Prénom :</label><br>
            <input type="text" id="pfname" name="pfname" placeholder="Taper votre prénom" ><br>
                            
            <label for="city">Ville :</label><br>
            <input type="text" id="pcity" name="pcity" placeholder="Taper votre lieu de naissance"  style =" width:300px"><br>

            <input type="submit" value="Envoyer" name="psubmit">
        </form>

        <?php
                if (isset($_POST["psubmit"])) {
                    echo " <H1>Bonjour " . $_POST["pname"] . " " . $_POST["pfname"] ." Vous êtes né à " . $_POST["pcity"]."</H1>";}
        ?>
    </div>

    <div>
        <h2> Exercice 2</h2>
        <h3>Créez un système de notation de jeu vidéo : </h3>
        <div class="card fortnite" style="width: 18rem;">
            <img class="card-img-top" src="jaquette.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Fortnite</h5>
                <p class="card-text">multi</p>
                <p>Donner une note</p>
                <form method="post" action="#">
                <select name="note">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" class="btn btn-primary" name="submit"/>
                </form>
            </div>
            <?php
    
    if(isset($_POST['submit'])){
        switch ($_POST["note"]){
            case "" : echo "<div class=\"card-footer text-muted\">Note: Pas encore noté.</div>";
            break;
            case "1" : echo "<div class=\"card-footer text-muted\">Note: <strong>*</strong></div>";
            break;
            case "2" : echo "<div class=\"card-footer text-muted\">Notes: <strong>**</strong></div>";
            break;
            case "3" : echo "<div class=\"card-footer text-muted\">Note: <strong>***</strong></div>";
            break;
            case "4" : echo "<div class=\"card-footer text-muted\">Note: <strong>****</strong></div>";
            break;
            case "5" : echo "<div class=\"card-footer text-muted\">Note: <strong>*****</strong></div>";
        }
    }

?>
    </div>
    </div>
    
</body>
</html>