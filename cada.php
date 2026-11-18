<?php
    include 'conexao.php';
    $vnome=$POST['txtnome'];
    $vemail=$POST['txtemail'];
    $vsenh=$POST['txtsenha'];
    $vsexo=$POST['txtsexo'];
    $vdtna=$_POST['txtdata'];
    $cadastrar=$cmd->query("insert into tbTeste(nome_t,email_t,senh_t,sexo_t,dtna_t) values ('$vnome','$vemail','$vsenh','$vsexo','$vdtna');");
    echo "<script language='JavaScript'>
            alert('Dados cadastrados com sucesso!');
            location.href='menu.html'
        </script>";
        
?>