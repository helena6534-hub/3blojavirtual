<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minha Loja Virtual</title>
     <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <h1>Minha Loja Virtual</h1>

    <p>
        <?php
            echo "Bem-vindo à nossa loja!";
        ?>
    </p>

    <p>
    Acesso realizado às:
    <?php echo date("H:i:s"); ?>
</p>


<form method="get">
    <input type="text" name="nome">
    <button type="submit">Entrar</button>
</form>

<?php
    if (isset($_GET["nome"])) {
        echo "Olá, " . $_GET["nome"] . "! Seja bem-vindo!";
    }
?>
<a href="admin/produtos/cadastrar.php">Cadastrar Produto</a>

<?php
    $contador=1;
    while ($contador<=5){
        echo "Contagem: " . $contador . "<br>";
        $contador++;

}
    for ($i = 1; $i <= 5; $i++){
        echo "Intereção: " . $i . "<br>";
    }
    $frutas=array("Maçã", " Banana", " Laranja");
    echo $frutas[0];
    echo $frutas[1]."<br>";

    $produto = array(
        "nome" => "Camiseta",
        "preço" => 29.99,
        "descricao" => "Camiseta de algodão confortável"
    );
    $produto["preço"] = 24.99;
    echo "Produto: " . $produto["nome"] . "<br>";
    echo "Preço: R$ " . $produto["preço"] . "<br>";
    
    $produtos = [
        [
            "id" => 1,
            "nome" => "Teclado mecanico ",
            "preco" => 99.90,
            "estoque" => 10
        ],
        [
            "id" => 1,
            "nome" => "Mouse ",
            "preco" => 29.99,
            "estoque" =>5
        ]
    ];
    echo "Produto 1: " . $produtos[0]["nome"] . $produtos[0]["preco"] . "<br>";
    echo "Produto 2: " . $produtos[1]["nome"] . $produtos[1]["preco"] . "<br>";
?>
<?php
    for ($nome = 1; $nome<=10; $nome++){
        echo "Helena" . "<br>";
    }
?>
</body>
</html>