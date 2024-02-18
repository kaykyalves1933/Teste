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
        <form action="php/inserir.php" method="POST">
            Nome do Aluno:<br>
            <input type="text" placeholder="Digite o nome." name="cxnome" class="cxnome"><br>
            Digite o RA:<br>
            <input type="text" placeholder="Digite o RA sem o dígito." name="cxra" class="cxra"><br>
            Série:<br>
            <select id="cxserie"  name="cxserie" class="cxserie">
                <option value="SELECIONE...">SELECIONE...</option>
                <option value="6º ano A">6º ano A</option>
                <option value="6º ano B">6º ano B</option>
                <option value="6º ano C">6º ano C</option>
                <option value="7º ano A">7º ano A</option>
                <option value="7º ano B">7º ano B</option>
                <option value="7º ano C">7º ano C</option>
                <option value="7º ano D">7º ano D</option>
                <option value="8º ano A">8º ano A</option>
                <option value="8º ano B">8º ano B</option>
                <option value="8º ano C">8º ano C</option>
                <option value="8º ano D">8º ano D</option>
                <option value="9º ano A">9º ano A</option>
                <option value="9º ano B">9º ano B</option>
                <option value="9º ano C">9º ano C</option>
                <option value="1ª série A">1ª série A</option>
                <option value="1ª série B">1ª série B</option>
                <option value="1ª série C">1ª série C</option>
                <option value="2ª série A">2ª série A</option>
                <option value="2ª série B">2ª série B</option>
                <option value="2ª série C">2ª série C</option>
                <option value="3ª série A">3ª série A</option>
                <option value="3ª série B">3ª série B</option>
                <option value="3ª série C">3ª série C</option>
                </select><br>
                Tutor:<br>
                <select id="cxtutor"  name="cxtutor" class="cxtutor">
                <option value="SELECIONE...">SELECIONE...</option>
                <option value="Alessandra">Alessandra</option>
                <option value="Anna Paula">Anna Paula</option>
                <option value="Carlos Roberto">Carlos Roberto</option>
                <option value="Danny">Danny</option>
                <option value="Edna">Edna</option>
                <option value="Ednaldo">Ednaldo</option>
                <option value="Elton">Elton</option>
                <option value="Fatima">Fatima</option>
                <option value="Flavio">Flavio</option>
                <option value="Genadi">Genadi</option>
                <option value="Gisele">Gisele</option>
                <option value="Ivane">Ivane</option>
                <option value="Jose Deivson">Jose Deivson</option>
                <option value="Jose Nildo">Jose Nildo</option>
                <option value="Karla">Karla</option>
                <option value="Magaly">Magaly</option>
                <option value="Marco">Marco</option>
                <option value="Maria Aparecida">Maria Aparecida</option>
                <option value="Maria Helena">Maria Helena</option>
                <option value="Miguel">Miguel</option>
                <option value="Mirian">Mirian</option>
                <option value="Nathalia">Nathalia</option>
                <option value="Nilsilene">Nilsilene</option>
                <option value="Patrícia">Patrícia</option>
                <option value="Regina">Regina</option>
                <option value="Renato">Renato</option>
                <option value="Rodrigo">Rodrigo</option>
                <option value="Rosemeire">Rosemeire</option>
                <option value="Simone Aparecida">Simone Aparecida</option>
                <option value="Valeria">Valeria</option>
                <option value="Viviane">Viviane</option>
                <option value="Willy">Willy</option>
                </select><br>

            <input type="submit" value="Cadastrar">    
        </form>
    </div>
</body>
</html>