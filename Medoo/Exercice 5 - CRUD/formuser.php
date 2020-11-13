
<?php
 require('database.php');
 include('header.html');
 //on recupere la variable da la requéte url avec $_GET
 if(isset($_GET['id'])){
     $id = $_GET['id'];
     $ide = $id+1;
     //recuperer l'utilisateur à modifier et mettre ses données dans le formulaire préremplit
     $user = $database->get('utilisateurs',
     ['id','nom','prenom','email','password','statut'],
     ['id'=>$id]);}

    if (isset($_POST['confirm'])){
        var_dump('$ide');

        $id = $_POST['id'];
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $passwordvalid = $password == $confirmpassword;
        $passwordHash = !empty($password) ? password_hash($password, PASSWORD_DEFAULT) : $user['password'];
        $email = $_POST['email'];
        $statut = $_POST['statut'];
        if(!empty($id)&& !empty($lastName)&& !empty($firstName)&& !empty($email)&& !empty($statut) && $passwordvalid){
            $database->update('utilisateurs',[
                'nom'=>$firstName,
                'prenom'=> $lastName,
                'email' => $email,
                'password'=> $passwordHash,
                'statut' => $statut],
                ['id'=>$id]);
            header('Location:home.php');
        }

    }
    ?>
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css" />
    
</head>
<body>
    <form action="#" method="post" class="form-group p-3 mb-5 form rounded">
        <h1> Modification </h1>
        <div class="form-group">
            <label for="inid">ID </label>
            <input type="text" class="form-control" name="id" id="inid" value="<?= $user['id'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="iname">Nom </label>
            <input type="text" class="form-control" name="lastName" id="nom" value="<?= $user['nom'];?>">
        </div>
        <div class="form-group">
            <label for="iprenom">Prenom </label>
            <input type="text" class="form-control" name="firstName" id="iprenom" value="<?= $user['prenom'];?>">
        </div>


        <div class="form-group">
            <label for="ipassword">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="ipassword"/>
        </div>
        <div class="form-group">
            <label for="iconfirmpassword">Confirmation </label>
            <input type="password" class="form-control" name="confirmpassword">
        </div>
        <div class="form-group">
            <label for="imail">Email </label>
            <input type="email" class="form-control" name="email" id="imail" value="<?= $user['email'];?>">
        </div>
        <div class="form-group">
            <label for="istatut">Statut</label>
            <input type="statut" class="form-control" name="statut" id="istatut" value="<?= $user['statut'];?>">
        </div>
        <div>
            <button name="confirm" class="btn btn-warning">Modifier</button>  
            <a href="home.php" class="btn btn-info">annuler</a>
        </div>
    </form>
<?php include('footer.html'); ?>
</body>
</html>