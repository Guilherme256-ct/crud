<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
</head>
<body>
<h1>Deletar</h1>
<h4><a href='index.html'>Menu</a></h4>
<hr/>
<form action="excluir.php" method="post">
    <label for="txtcodi">Cod: </label>
    <input type="text" id="txtcodi" name="txtcodi">
    <input type="submit" id="bt" name="bt" value="Deletar">
    <input type="button" value="menu" onclick="location.href='index.html'">
</form>
<hr/>
<?php
    include("conexao.php");
    $listar=$cmd->query("select * from tbTeste");
    $total_registros=$listar->rowCount();
    if($total_registros> 0){
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

    if(isset($_POST['bt'])){ 
        $vcodi=$_POST['txtcodi'];
        if($vcodi!=''){
            $listar=$cmd->query("select * from tbTeste where codi_t=$vcodi");
            $total_registros=$listar->rowCount();
            if($total_registros> 0){
                $cmd->query("delete from tbTeste where codi_t=$vcodi");
                echo "<script language='JavaScript'>
                    alert('Deletado com sucesso!');
                    </script>";
                    echo "<meta http-equiv='refresh' content='0'/>";
            }
            else{
                echo "<script language='JavaScript'>
                    alert('Não há esse registro cadastrado!');
                </script>";
            }
        }
        else{
            echo "<script language='JavaScript'>
                    alert('Informe um registro para deletar!');
                </script>";
        }
    }
?>
</body>
</html>
