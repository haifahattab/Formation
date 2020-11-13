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
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
    <?php include('header.html');?>
    <form method="post" action="#" class="Form-group p-3 mb-5 rounded form">
    <div class="form-group">
        <label for="imail">Entrez votre adresse email :</label><br>
        <input type="email" name="email" id="imail" class="form-control input" placeholder="anna@yahoo.com"/>
    </div>
    <button name="envoyer" class="button">Envoyer</button>
    </form>
    <?php
    include_once("database.php");
    session_start();
    if(isset($_POST['envoyer'])){
        $email = $_POST['email'];
        /*$bdd = new PDO('mysql:host=localhost;dbname=niv2-bdd;charset=utf8', 'root', '');
        $sql = $bdd->prepare("SELECT * FROM connexions WHERE login = ?");
        $sql->execute(array($email));
        $result = $sql->fetch(PDO::FETCH_ASSOC);*/
        $bdd = $database->get('utilisateurs','*',['email'=>$email]);
        if($bdd !=false ){
            $_SESSION["email"] = $bdd['email'];
            $mail = $_SESSION["email"];
            $token = "";
            for($i=0; $i<8; $i++){
                $token .= mt_rand(0,9);
            }
            /*
            $mail_exist = $bdd->prepare('SELECT * FROM connexions where login = ?');
            $mail_exist->execute(array($email));
            $mail_exist = $mail_exist->rowCount();*/
            $mail_exist = $database->count('utilisateurs',['email'=>$email]);
            if($mail_exist==1){
                $base = $database->update('utilisateurs',['code'=>$token], ['email' =>$email]);
            }else{

                $base = $database->insert('utilisateurs',['email'=>$email,
                    'code'=>$token]);

            }
            
            include("./sendemail.php");
            $mailto ='hattab_haifa@yahoo.com';
            $msg = "http://localhost/medoo/Medoo/Exercice%205%20-%20CRUD/newpassword.php?section=code&code=.$token. Copiez le lien pour recuperer votre mot de passe.";
            send_mail($mailto, " réinitialisation du mot de passe",$msg);
            echo '<script type="text/javascript">';
                    echo 'alert ("Nous venons de vous envoyer un email!")';
                    echo '</script>';
        }
        else{
            ?>
        <p class="message--error"><?php echo "$email n'existe pas"; ?></p>
    <?php
        }
    }
    include('footer.html');
    ?>
</body>
</html>