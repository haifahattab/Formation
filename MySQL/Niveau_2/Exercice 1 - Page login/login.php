<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
    try{
    // Connexion à la base données
        $bdd =new PDO('mysql:host=localhost; dbname=coordonnee; charset=utf8', 'root', '');
    // Activation des erreurs PDO
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
        }
    //préparation de la requête et des variables
        $sql = "INSERT INTO connexions (login,password) VALUES (:login,:password)";

        $datas = array(':login'=>$_POST['login'], ':password'=>$_POST['pwd']);
    //Execution de la requete
    try{
        $requete = $bdd -> prepare($sql) ;
        $requete->execute($datas) ;
    }catch(Exception $e){
        // en cas d'erreur :
        echo " Erreur ! ".$e->getMessage();
        echo " Les datas : " ;
        print_r($datas);
    }
?>
    <form action="login.php" method="post" class="form-group">
    <div class="form-group">
        <label for="name">Login :</label>
        <input type="text" name="login" class="form-input"  require>
    </div>
    <div class="form-group">
        <label for="pwd">Mot de passe :</label>
        <input type="text" name="pwd" class="form-input" require>
    </div>
    <div class="form-group">
        <button name="send">Envoyer</button>
        </div>
    </form>
    <?php

    ?>
</body>
</html>