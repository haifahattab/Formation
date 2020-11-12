<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css" />
</head>
<body>



<?php
require('database.php');

if (isset($_POST['confirm'])) {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $isValidfirstName = !empty($firstName);

    $lastName = htmlspecialchars($_POST["lastName"]);
    $isValidlastName = !empty($lastName);

    $password = htmlspecialchars($_POST["password"]);
    $isValidpwd = !empty($password);



    $confirmpassword = htmlspecialchars($_POST["confirmpassword"]);
    $isValidconfirmpwd = !empty($confirmpassword);

    $email = htmlspecialchars($_POST["email"]);
    $isValidemail = !empty($email);

    $info = htmlspecialchars($_POST["info"]);
    $isValidinfo = !empty($info);

    $condition = $_POST['condition'];
    if (empty($condition)){
        echo '<script type="text/javascript">';
        echo 'alert("Vous devez accepter les conditions !")'; 
        echo '</script>';
    }
    else{ 

        if( $isValidfirstName && $isValidlastName && $isValidemail && $isValidpwd && $isValidinfo && $isValidconfirmpwd ){ 
            if($password != $confirmpassword ) {
                                echo '<script type="text/javascript">';
                                echo 'alert("les mots de passe saisis ne sont pas identiques")';
                                echo  '</script>';         
            } 
            
            else {

                $bdd = $database->get('utilisateurs','email',[
                    'email'=>$email
                ]);

                    if (!$bdd){
                            $firstName = $_POST['firstName'];
                            $lastName = $_POST['lastName'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                            $info = $_POST['info'];
                            $database->insert('utilisateurs',[
                                'nom'=>$firstName,
                                'prenom'=> $lastName,
                                'email' => $email,
                                'password'=> $passwordHash,
                                'statut' => $info,
                            ]);
                            header('Location:login.php');
                    } 
                    else 
                    {
                            echo '<script type="text/javascript">';
                            echo 'alert("Cet utilisateur existe déja dans la base de données! ")';
                            echo  '</script>';
                    }    
            }

        }

                    else{
                    echo '<script type="text/javascript">';
                    echo 'alert("Tous les champs sont obligatoires !")';
                    echo  '</script>';
                    }    
        }
    }
    
?>

 
 <form action="signin.php" method="post" class="form-group p-3 mb-5 bg-dark rounded">
 <h1> Inscription </h1>
    <div class="form-group">
        <label for="iprenom">Prenom :</label>
        <input type="text" class="form-control" name="firstName" id="iprenom" placeholder="XXXX">
    </div>
    <div class="form-group">
        <label for="iname">Nom :</label>
        <input type="text" class="form-control" name="lastName" id="nom" placeholder="XXXX">
    </div>

     <div class="form-group">
        <label for="ipassword">Mot de passe:</label>
        <input type="password" class="form-control" name="password" id="ipassword" placeholder="XXXXXXXX" />
    </div>
    <div class="form-group">
        <label for="iconfirmpassword">Confirmation :</label>
        <input type="password" class="form-control" name="confirmpassword" placeholder="XXXX">
    </div>
    <div class="form-group">
        <label for="imail">Email :</label>
        <input type="email" class="form-control" name="email" id="imail" placeholder="XXXX@XXXX.XXX">
    </div>
   
    <div class="form-group">
        <p>Statut :</p>
        <input type="radio" id="ipro" name="info" value="professionnel" >
        <label for="ipro">Professionnel</label><br>
        <input type="radio" id="ipart" name="info" value="particulier">
        <label for="ipart">Particulier</label> <br>
  
      <input type="checkbox" name="condition"> Je reconnais avoir pris connaissance des conditions d’utilisation et y adhère totalement.<br>
    <button name="confirm">Valider</button>  
    </div>  
    </form>
</body>
</html>