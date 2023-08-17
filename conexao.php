<?php
// Informações de conexão com o banco de dados
$host = "localhost";
$user = "root";
$password = "";
$database = "bancoteste";

// Cria a conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
}

// Executa a consulta SQL para recuperar todos os registros da tabela "cliente"
$sql = "SELECT * FROM cliente";
$result = mysqli_query($conn, $sql);

// Verifica se a consulta foi executada com sucesso
if (!$result) {
    die("Não foi possível executar a consulta: " . mysqli_error($conn));
}

// Exibe os dados retornados pela consulta
while ($row = mysqli_fetch_assoc($result)) {
    echo "Nome: " . $row["nome"] . " - E-mail: " . $row["email"] . "<br>";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

// Fecha a conexão com o banco de dados