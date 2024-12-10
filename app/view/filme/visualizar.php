<?php
require_once __DIR__ ."\..\..\model\Filme.php";

$id = $_GET["id"];
if($id ==""){
    return header("Location: listar.php");
}

$filmeModel = new Filme();
$filme = $filmeModel->buscarPorId($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/catalogo-filmes/public/css/style.css">
</head>
<body>
    <section class="container">
        <h2>Detalhes do Filme</h2>

        <h3>Nome: <?php echo $filme->nome?></h3>
        <img class="imgBigSize" src="<?php echo $filme->img ?>" alt="Banner filme">
        <p>Ano: <?php echo $filme->ano?></p>
        <p>Descrição: <?php echo $filme->descricao?></p>

        <button onclick="window.history.back()">    
            <span class="material-symbols-outlined">
                keyboard_double_arrow_left
            </span>
        </button>

</body>
</html>