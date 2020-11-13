<?php
    require('database.php');
if(isset($_POST['insertuse'])){
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $passwordvalid = $password == $confirmpassword;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $statut = $_POST['statut'];
        if(!empty($lastName)&& !empty($firstName)&& !empty($email)&& !empty($statut) && !empty($passwordvalid)){
            $database->insert('utilisateurs',[
                'nom'=>$firstName,
                'prenom'=> $lastName,
                'email' => $email,
                'password'=> $passwordHash,
                'statut' => $statut]);

            header('Location:home.php');
        }else{
            echo $error = '<script type="text/javascript>"';
            echo $error = '$(input).addClass("erreur")';
            echo $error = '</script>';
        }
    }

    ?>