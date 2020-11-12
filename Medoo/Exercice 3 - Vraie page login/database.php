<?php
include_once("Medoo.php");
    use Medoo\Medoo;
    $database = new Medoo([
                        'database_type' => 'mysql',
                        'database_name' => 'niv2-bdd',
                        'server' => 'localhost',
                        'username' => 'root',
                        'password' => '',
                    ]);
?>