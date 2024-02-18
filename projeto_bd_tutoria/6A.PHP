<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUTORIA FMA</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <script src="js/javinha.js"></script>
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
        <a href="lista_da_sala.php">Voltar</a>
</br>
</br>
</br>
        <a href=""><img src="img/pdf.png" width="40" height="40"></a>
        <a href=""><img src="img/excel.png" width="40" height="40"></a>
        <a href=""><img src="img/Impressora.png" width="40" height="40"></a>
        <?php
        include_once "factory/conexao.php";

        if (!$conn) {
            die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
        }

        $consulta = "SELECT * FROM tbalunos WHERE ra= '6º ano A'";
        $executar = mysqli_query($conn, $consulta);

        if (!$executar) {
            echo "Erro na consulta: " . mysqli_error($conn);
        } else {
            if (mysqli_num_rows($executar) > 0) {
                echo '<div class="tabelabanco">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>RA</th>
                                <th>SÉRIE</th>
                                <th>TUTOR</th>
                                <th>EDITAR</th>
                            </tr>';
                while ($dados = mysqli_fetch_assoc($executar)) {
                    echo '<tr>
                            <td>'.htmlspecialchars($dados["codigo"]).'</td>
                            <td>'.htmlspecialchars($dados["nome"]).'</td>
                            <td>'.htmlspecialchars($dados["ra"]).'</td>
                            <td>'.htmlspecialchars($dados["serie"]).'</td>
                            <td>'.htmlspecialchars($dados["tutor"]).'</td>
                            <td>
                            <a href="editar.php?id=<?php echo $dados["codigo"];?>EDITAR</a> 
                          <a>|</a>
                            <a href="exluir.php?id=<?php echo $dados["codigo"];?>EXCLUIR</a>
                            </td>
                          </tr>';
                }
                echo '</table></div>';
            } else {
                echo "<div>Nenhum aluno(a) encontrado.</div>";
            }
            echo '<div class="botao"><button onclick="atualizarPagina()">Atualizar Página</button></div>';
        }
        ?>
    </div>
</body>
</html>
