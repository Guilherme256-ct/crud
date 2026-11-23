<?php
    echo"<link rel=stylesheet' type='test/css' href='style.css'/>";
    include "conexao.php";
    $listar=$cmd->query("select * from tbTeste");
    $total_registros=$listar->rowCount();
    if($total_registros> 0){
        echo"<h1>Listar Registros</h1>";
        echo "<h4><a href='index.html'>Menu</a> <a href='pesquisar.php'>Pesquisar</a></h4>";
        echo "<hr/>";
        echo "<table>";
        echo "<tr> 
            <th colspan=6>
                Dados Cadastrados
            </th>
        </tr>";
        echo "<tr>
            <th>cod</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Sexo</th>
            <th>Data</th>
            </tr>";
        
    

        while($linha=$listar->fetch(PDO::FETCH_ASSOC)){
            $vcodi=$linha['codi_t'];
            $vnome=$linha['nome_t'];
            $vemail=$linha['email_t'];
            $vsenh=$linha['senh_t'];
            $vsexo=$linha['sexo_t'];
            $vdtna=$linha['dtna_t'];
            echo "<tr>
            <td>$vcodi</td>
            <td>$vnome</td>
            <td>$vemail</td>
            <td>$vsenh</td>
            <td>$vsexo</td>
            <td>$vdtna</td>
            </tr>";
        }
    }
    else{
        echo "<script language='JavaScript'>
            alert('Não há ninguém cadastrado!');
            location.href='index.html'
        </script>";
    };
?>