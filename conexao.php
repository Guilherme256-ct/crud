<?php
    $sevidor="localhost";
    $usuario="root";
    $senha="12345678";
    $banco="dbTeste";
    $cmd=new PDO("mysql:host-$sevidor;dbname-$banco",$usuario,$senha);
?>