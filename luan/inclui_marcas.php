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

// Insere os dados na tabela "tb_marcas"
$sql = "INSERT INTO tb_marcas (descricao) VALUES ('$descricao')";

if (mysqli_query($conexao, $sql)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conexao);
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>