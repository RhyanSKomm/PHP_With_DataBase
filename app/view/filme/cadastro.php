
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/catalogo-filmes/public/css/style.css">
</head>
<body>
    <section>
        <form action="" method="POST" class="form container">
            <h1 >Cadastrar Filme</h1>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <label for="ano">Ano</label>
            <input type="number" name="ano">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao">
            <button>Cadastrar</button>
        </form>
    </section>
</body>
</html>

<?php
    require_once __DIR__ ."\..\..\model\Filme.php";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nome = $_POST["nome"];
        $ano = $_POST["ano"];
        $descricao = $_POST["descricao"];

        if(!empty($nome) && !empty($ano) && !empty($descricao)){
            $filmeModel = new Filme();
            $cadastrado = $filmeModel->cadastrar($nome, $ano, $descricao);

            if ($cadastrado) {
                header("Location: listar.php?mensagem=cadastrado");      
                exit;
            } else {
                header("Location: listar.php?mensagem=erro");
                exit;
            }
        }
    }
?>
