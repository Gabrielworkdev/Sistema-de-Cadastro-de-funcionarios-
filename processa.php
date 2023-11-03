<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];
$salario = $_POST['salario'];

$sql = "INSERT INTO usuarios (nome, email, profissao, salario) VALUES ('$nome', '$email', '$profissao','$salario')";
$salvar = mysqli_query($conn, $sql);

$linhas = mysqli_affected_rows($conn);


mysqli_close($conn)

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
        <section><h1>Confirmação de Cadastro </h1>
            <hr> <br><br>
            <?php
            //comentario no PHP - uma linha é afetada  com mensagem de retorno, dizendo que foio realizado o cadastro
             
            if ($linhas == 1){
                print "Cadastro realizado com sucesso !";
            }/*uma linha só n será afetada caso eu digite um email repetido. pois o banco está confg para unique*/
            else{
                print "Cadastro NÃO efetuado.<br> Já existe um usuário com este e-mail!";
            }
            ?>
        </section>
        
    </div>
    
</body>
</html>