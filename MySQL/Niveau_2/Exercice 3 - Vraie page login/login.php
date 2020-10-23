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
    
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $base = new PDO('mysql:host=localhost;dname=niv2_bdd;charset=utf8','root','');
        $sql = $base->prepare("SELECT login, password FROM connexions WHERE login = $login");
        $sql->execute();
        $data = $sql->fetch();
        if(!$data){
            echo "Vous n'étes pas inscris";
        }else if{
            $sql->bindParam(':password', $password);
            

        }
    }
    ?>

    <h3>Inscription</h3>
    <form method="post" action="#">
        <div class="form-group">
            <label for="ilogin">Login :</label>
            <input type="email" name="login" id="ilogin" placeholder="melanie@yahoo.com">
        </div>
        <div class="form-group">
            <label for="ipassword">Mot de passe :</label>
            <input type="text" name="password" id="ipassword">
        </div>
        <button name="submit">Se connecter</button>
        <button name="inscrire">S'inscrire</button>
    </form>
    
</body>
</html>