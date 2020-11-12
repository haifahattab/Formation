<?php
    session_start();
    require("database.php");

    if (isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (!empty($email) && !empty($password))
                {
                    $bdd= $database->get('utilisateurs','*',['email'=>$email
                    ]);
                    /*$bdd = new PDO('mysql:host=localhost;dbname=niv2-bdd;charset=utf8', 'root', '');
                    $req = $bdd->prepare('SELECT * FROM connexions WHERE login = ? AND password = ?');
                    $req-> execute(array(
                        $login,
                        $password));
                    $resultat = $req->fetch(PDO::FETCH_ASSOC);*/
                    if ($bdd || password_verify($password, $bdd['password']))
                    {
                        $_SESSION["email"] = $email;
                        header('Location:home.php');
                    }
                    else
                    {
                      
                        if(!isset($tentative))
                            {
                            // Initialisation de la variable
                            $tentative = 5;
                            // Blocage pendant 15 min
                            $_SESSION['timestamp_limite'] = time() + 60*15;
                            }
                        if($tentative <= 5)
                        {
                            $tentative--;
                            echo '<script type="text/javascript">';
                            echo 'alert("Mots de passe incorrect! il vous reste".$tentative."tentative")';
                            echo  '</script>';                            
                        }
                        // Si on a dépassé les 5 tentatives
                        else
                        {
                            // Si le cookie marqueur n'existe pas on le crée                                     
                            if(!isset($_COOKIE['marqueur']))
                                    {
                                    $timestamp_marque = time() + 60; // On le marque pendant une minute
                                    $cookie_vie = time() + 606024; // Durée de vie de 24 heures pour le décalage horaire
                                    setcookie("marqueur", $timestamp_marque, $cookie_vie);
                                    }

                            // on quitte le script
                            exit();
                        }
                                    
                    }
         
                }
            else
                {
                    echo '<script type="text/javascript">';
                    echo 'alert ("Renseignez votre email et votre mot de passe")';
                    echo '</script>';
                }
            
        }

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"/>
  
    
</head>
<body>
   
    <form method="post" action="login.php" class="Form-group p-3 mb-5 bg-dark rounded">
    <h1>Se connecter</h1>
        <div class="form-group">
            <label for="imail">Login </label>
            <input type="email" class="form-control" name="email" id="imail" placeholder="XXXX@XXXX.XXX">
        </div>
        <div class="form-group">
            <label for="ipassword">Mot de passe </label>
            <input type="text" class="form-control" name="password" id="ipassword" placeholder="XXXXXXXX">
        </div>
        <button name="submit" class="mb-2">Valider</button><br>
        <a href="http://localhost/medoo/Medoo/Exercice%204%20-%20Page%20reset%20password/resetpassword.php">Mot de passe oublié</a><br>
        <a href="signin.php">S'inscrire</a>
        
    </form>
    
</body>
</html>