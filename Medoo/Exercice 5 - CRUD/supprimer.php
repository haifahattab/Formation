<?php
    require('database.php');
    //on recupere la variable da la requéte url avec $_GET
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $database->delete('utilisateurs',
                                ["id"=>$id]);
            header("Location:home.php");
        }
?>