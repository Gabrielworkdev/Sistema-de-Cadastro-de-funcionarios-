<?php
// CONECTANDO COM O BANCO DE DADOS
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
//comando para filtrar qualquer palavra que o usuário deseja
$sql = "select * from usuarios where profissao like '%$filtro%' order by nome";
$consulta = mysqli_query($conn, $sql);
//numero de linhas registros
$registros = mysqli_num_rows($consulta);
//FECHANDO CONEXÃO

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>
        <!--SECAO PARA ENVIAR OS DADOS PARA O BANCO, DIRECIONAR PARA OUTRA PÁGINA-->
        <section><h1>Consultas </h1>
            <hr> <br><br>
            <!----FORMULARIO DE PESQUISA E FILTRO-->
           
            <form  method ="get" action="">
                Filtrar por porfissão: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value=" Pesquisar" class="btn">

            </form>
           

            <?php
            print "Resultado da pesquisa com a plavra <strong>$filtro</strong> <br><br>";
            print "$registros registros encontrados.";
            print "<br><br><br>";

            //LAÇO DE REPETIÇÃO CONSULTANDO O REGISTRO NO BANCO DE DADOS

            while($exibirRegistros = mysqli_fetch_array($consulta)){
                //$codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $email = $exibirRegistros[2];
                $profissao = $exibirRegistros[3];
                $salario =  $exibirRegistros[4];
                print "<article>";

               //print "$codigo<br>";
                print "$nome<br>";
                print "$email<br>";
                print "$profissao<br>";
                print "$salario";


                print"</article>";

            }
            mysqli_close($conn);

            ?>
           
            
        </section>     
    </div>
    
</body>
</html>