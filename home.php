<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nome";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
} else {
  echo "Conexão bem-sucedida!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href='https://www.utfpr.edu.br/' class='hrefDaUtfpr'><h1 class="titulo" > UTFPR </h1></a>
    <h1 style='color: white;'> Seja muito bem vindo </h1>
    <h2> Banco de Dados</h2>

    <p class="paragrafo">
        Vamos usar MySQL <br>
        bibliografia:<br>
        Sistemas de banco de dados (ELMASRI), Ramez E. <br>
        -----------------------------------------<br>
        A1: 05/11 <br>
        A2: 19/11 <br>
        A3: 17/12 <br>
        P1: 26/11 <br>
        TP: 10/02 <br> <br>
        P1 = prova individual <br>
        TP = trabalho pratico em equipe <br>
        prova peso 3; trabalho peso 4; atividades peso 3;<br>
        <h2> Controle de faltas <br> </h2>
        25% -> OK <br>
        25 a 35% >= 6,5 -> ok por compensação <br>
        35 a 50% >= 8,0 -> ok por compensação <br>
    </p>



    <script src='index.js'></script>
</body>

</html>