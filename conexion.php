<?php

    $host = '127.0.0.1:3308';
    $user = 'root';
    $password = '';
    $db = 'proyecto';

    $conection = @mysqli_connect($host, $user, $password, $db);


    if(!$conection){
        echo "Error en la conexion";
    }

?>