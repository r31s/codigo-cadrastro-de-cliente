<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de peças</title>
</head>
<body>
    <h2>Preencha o formulário:</h2>
    <form action="inclui_pecas.php" method="post">
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao"><br><br>
        <label for="unidade">Unidade:</label>
        <input type="text" id="unidade" name="unidade"><br><br>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
