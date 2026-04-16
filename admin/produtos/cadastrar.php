<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Cadastrar produtos</h1>
    <form action="salvar.php" method="post">
        <label for="nome">Nome do produto:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.001" required>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade">

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="4"></textarea>

        <button type="submit">Salvar produto</button>
    </form>
</body>

</html>