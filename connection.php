<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'culinary_blend';

    $connection = new mysqli($host, $uyser, $password, $database);

    if($connection->connect_error){
        echo('Erro ao conectar com o banco de dados');
    }
?>