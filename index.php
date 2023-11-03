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
        <section><h1>Cadastro de Usuários</h1>
            <hr> <br><br>
            <form method="post" action="processa.php">
                <input type="submit" value="Salvar" class="btn" >
                <input type="reset" value="Limpar" class="btn">
                <br><br>

                Nome<br>
                <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                Email<br>
                <input type="email" name="email" class="campo" maxlength="50" required ><br>
                Profissão<br>
                <input type="text" name="profissao" class="campo" maxlength="40" required><br>
                Salário<br>
                <input type="text" name="salario" class="campo" maxlength="40" required><br>
            </form>
        </section>
        
    </div>
    
</body>
</html>