<?php
// Dados de conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "oficina_mecanica";

// Conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$descricao = $_POST["descricao"];
$unidade = $_POST["unidade"];
$preco = $_POST["preco"];

// Insere os dados na tabela "tb_pecas"
$sql = "INSERT INTO tb_pecas (descricao, unidade, preco) VALUES ('$descricao', '$unidade', '$preco')";

if (mysqli_query($conexao, $sql)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conexao);
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>