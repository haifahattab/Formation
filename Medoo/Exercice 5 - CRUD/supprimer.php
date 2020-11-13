<?php
    require('database.php');
            if (isset($_POST['deletuser'])){
                $id = $_POST['delete_id'];
                $database->delete('utilisateurs',
                    ["id"=>$id]);}
            header('Location:home.php');
                
?>