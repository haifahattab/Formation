<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       form{
            margin-left: 40%;
            margin-top: 10%;
        }
    </style>
</head>
<body>
    <form method="post" action="#">
    <div class="form-group">
        <label for="imail">Entrez votre adresse email :</label><br>
        <input type="email" name="email" id="imail" placeholder="anna@yahoo.com"/>
    </div>
    <button name="envoyer">Envoyer</button>
    </form>
    <?php
    session_start();
    if(isset($_GET['section'])){
        $section = htmlspecialchars($_GET['section']);
    }else{
        $section = "";
    }
    if(isset($_POST['envoyer'])){
        $email = $_POST['email'];
        $bdd = new PDO('mysql:host=localhost;dbname=niv2-bdd;charset=utf8', 'root', '');
        $sql = $bdd->prepare("SELECT * FROM connexions WHERE login = ?");
        $sql->execute(array($email));
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        if($result){
            $_SESSION["email"] = $email;
            $token = "";
            for($i=0; $i<8; $i++){
                $token .= mt_rand(0,9);
            }
            $mail_exist = $bdd->prepare('SELECT * FROM connexions where login = ?');
            $mail_exist->execute(array($email));
            $mail_exist = $mail_exist->rowCount();
            if($mail_exist ==1){
                $base = $bdd->prepare('UPDATE connexions SET code = ? WHERE login = ?');
                $base->execute(array($token, $email));
                $req= $bdd->prepare('SELECT * FROM connexions WHERE login = ?');
                $req->execute((array($email)));
                $resul = $req->fetch(PDO::FETCH_ASSOC);
                $recup_code = $resul['code'];
                $_SESSION['code'] = $recup_code;
            }else{

                $base = $bdd->prepare('INSERT INTO connexions(login, code) VALUES (?, ?)');
                $base->execute(array($email, $token));

            }
            
            include("./sendemail.php");
            $mailto =$email;
            $msg = "http://localhost/medoo/Medoo/Exercice%204%20-%20Page%20reset%20password/newpassword.php?section=code&code=.$token. Copiez le lien pour recuperer votre mot de passe.";
            send_mail($mailto, " réinitialisation du mot de passe",$msg);
            echo ("Nous venons de vous envoyer un email!");
        }
        else{
            ?>
        <p class="message--error"><?php echo "$email n'existe pas"; ?></p>
    <?php
        }
    }

    ?>
</body>
</html>