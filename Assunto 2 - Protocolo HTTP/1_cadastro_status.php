<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Status Codes</title>
</head>
<body>
 
 <h1> Cadastro de Aluno (com status Code)</h1>

 <form method = "post" action = "" >
    label for="nome">Nome:</label>
    <input type="text" name="nome" required><br><br>
  
    <label for="idade">Idade:</label>
    <input type="text" name="idade" required><br><br>

    <button type="submit" >Enviar</button>
</form>

<hr>
<?php
    // Verifica se o formulário foi enviado (POST) ou se é só uma visita normal (GET)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
    //Pega os valores digitados pelo aluno no formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Status 400: o aluno esqueceu de preencher algum campo 
    if ($nome == '' || $idade == '') {
        http_response_code(400);
        echo "<h2>Status 400 - Idade precisa ser número<h2>";

        //Status 201:nome e idade preenchidos corretamente, cadastro "criado"
    } else {
        http_response_code(201);
        echo "<h2>Status 201 - Criado: $nome, $idade anos <h2>";
    }

    } else {
        // Status 200: alunoo só entrou na página ,ainda não enviou nada
        http_response_code(200);
        echo "<p>Preencha o formulário acima e envie.</p>";
    }
    ?>,

    




    <?php
    //$_Server é uma variável superglobal do PHP que contém informações sobre requisições feitas pelo servidor. Aqui ele esta confirmando se a requisição é via POST (Peotocolo HTTP)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Se sim ele acessa as informações (Nome e idade)
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        
    }
    ?>
</form>

</body>
</html>