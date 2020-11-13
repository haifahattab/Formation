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
    <?php include("header.html"); ?>

    <table class="table tablec table1 mt-5 ">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Statut</th>
            <th>Modifier</th>
            <th>Supprimer</th>
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
                    <td class="text-center m-0"><a href="formuser.php?id=<?= $utilisateur['id'] ?>" class="btn btn-warning btn-sm">Modifier</a></td>
                    <td><button type="button" class="btn btn-danger btn-sm deletebtn">Supprimer</button></td>
                    </tr>
            <?php } ?>
        </table>
        <!---************************Modale supprimer*********************************---->

        <div class="modal fade" id="deletmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="supprimer.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <h4>Etes vous sur de vouloir supprimer ? </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" name="deletuser" class="btn btn-primary deletuser">Valider</a>
                    </div>
                </form>
        </div>
        </div>
        </div>

        <!---************************Modale ajouter*********************************---->
        <div class="modal fade" id="insertmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="ajouter.php" method="post" class="form-group formdialo rounded">
            <div class="modal-body">
            <h1>Ajouter un nouveau client</h1>
            
            <div class="form-group">
                <label for="iname">Nom </label>
                <input type="text" class="form-control" name="lastName" id="nom">
            </div>
            <div class="form-group">
                <label for="iprenom">Prenom </label>
                <input type="text" class="form-control" name="firstName" id="iprenom">
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
                <input type="email" class="form-control" name="email" id="imail">
            </div>
            <div class="form-group">
                <label for="istatut">Statut</label>
                <input type="statut" class="form-control" name="statut" id="istatut">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="insertuse" class="btn btn-primary insertuse">Valider</a>
            </div>
        </form>
        </div>
        </div>
        </div>

    <script>
        /******************SUPPRIMER************************/
    $(document).ready(function(){
        $('.deletebtn').on('click',function(){
        $('#deletmodal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#delete_id').val(data[0]);
        })
    });
        /******************AJOUTER************************/
    $(document).ready(function(){
        $('.insertuser').on('click',function(){
            $('#insertmodal').modal('show');

        });
    });
    </script>

    <div class="row mx-auto mt-5 mb-5">
        <a href="login.php" class="offset-lg-4 col-2 btn btn-primary lien">Se déconnecter</a>
        <button class="offset-lg-1 col-2 btn btn-primary lien insertuser">Ajouter un utilisateur</a>  
    </div>
    <?php include("footer.html");?>
        </body>

    </html>

