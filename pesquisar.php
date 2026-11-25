<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
</head>
<body>
    
    <h1>Resultado da pesquisa</h1>
    <h4><a href="listar.php">Voltar</a> <a href="index.html">Menu</a></h4>
    <?php
    include("conexao.php");
    $vnome = $_POST["txtnome"];
    if ($vnome != "") {
        $listar=$cmd->query("select * from tbTeste where nome_t like '%$vnome%'");
        $total_registros=$listar->rowCount();
        if($total_registros>0){
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
                alert('Não há nenhum cadastro que se assemelha a esta pesquisa!');
                location.href='index.html'
            </script>";
        }
    }
    else{
        echo "<script language='JavaScript'>
            alert('Pesquise algo!');
            location.href='listar.php'
        </script>";
    }
    ?>
</body>
</html>

