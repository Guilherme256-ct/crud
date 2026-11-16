<?php
    $sevidor="localhost";
    $usuario="root";
    $senha="12345678";
    $banco="dbTeste";
    $porta="3305";
    $cmd=new PDO("mysql:host=$sevidor;port=$porta;dbname=$banco",$usuario,$senha);

?>