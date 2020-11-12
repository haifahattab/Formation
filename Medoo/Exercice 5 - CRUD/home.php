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
	<link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="row mx-auto">
        <a href="login.php" class="offset-lg-4 col-2 btn btn-primary">Se déconnecter</a>
        <a href="formuser.php" class="offset-lg-1 col-2 btn btn-primary">Ajouter un utilisateur</a>  
        </div>
        <table class="table table-dark table1 mt-5 ">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Statut</th>
            </tr>
            <?php
                require('database.php');
                $bdd=$database->select('utilisateurs',['id','nom','prenom','email','statut']);
                foreach($bdd as $utilisateur){
                ?>
                <tr>
                    <td><?= $utilisateur ['id'] ?></td>
                    <td><?= $utilisateur ['nom'] ?></td>
                    <td><?= $utilisateur ['prenom'] ?></td>
                    <td><?= $utilisateur ['email'] ?></td>
                    <td><?= $utilisateur ['statut'] ?></td>
                    <td class="text-center m-0"><a href="formuser.php?id=<?= $utilisateur['id'] ?>" class="btn btn-warning btn-sm">Mettre a jour</a>
                    <a href="supprimer.php?id=<?= $utilisateur['id']?>" class="btn btn-danger btn-sm">Supprimer</a></td>
                </tr>
                <?php } ?>
        </table>
   
        </body>

    </html>

