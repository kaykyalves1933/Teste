<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUTORIA FMA</title>
    <script src="js/javinha.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body>
    <div class="navbar">
        <a href="index.php">HOME</a>
        <a href="cadastrar_aluno.php">CADASTRAR ALUNO</a>
        <a href="buscar_aluno.php">BUSCAR ALUNO</a>
        <a href="lista_do_tutor.php">LISTA DO TUTOR</a>
        <a href="lista_da_sala.php">LISTA DA SALA</a>
    </div> 

    <div class="cadastro">
    <form action="php/buscar_aluno.php" method="POST">
    Digite o nome do Aluno:<br/>
    <input type="text" placeholder="Digite apenas letras em MAIÚSCULO." name="cxnome">
    <input type="submit" value="Buscar">
    </form>
    </div>
    
</body>
</html>