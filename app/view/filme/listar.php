<?php

require_once __DIR__ ."\..\..\model\Filme.php";

$filmeModel = new Filme();

$filmes = $filmeModel->buscarTodos();

// echo "<pre>";
// print_r($filmes);
// echo "<pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>

    <link rel="stylesheet" href="/catalogo-filmes/public/css/style.css">

    <script src="/catalogo-filmes/public/js/main.js" defer></script>
</head>
<body>

<section class="container">
    <h2>Filmes</h2>

    <div class="acao">
        <a href="cadastro.php">
            <button>
                <span>Novo</span>
                <span           class="material-symbols-outlined">
                    add
                </span>
            </button>
        </a>
    </div>


    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Ano</th>
            <th>Descrição</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($filmes as $filme){ ?>
                <tr>
                    <td><?php echo $filme->id ?></td>
                    <td><?php echo $filme->nome ?></td>
                    <td><?php echo $filme->ano ?></td>
                    <td><?php echo $filme->descricao ?></td>
                    <td>
                        <form action="visualizar.php" method="GET">
                            <input 
                                type="hidden" 
                                name="id" 
                                value="<?php echo $filme->id ?>"
                            >
                            <button>
                                <span class="material-symbols-outlined">
                                    visibility
                                </span>
                            </button>
                        </form>
                        <form action="excluir.php"  method="POST">
                            <input 
                                type="hidden" 
                                name="id" 
                                value="<?php echo $filme->id ?>"
                            >
                            <button onclick="return confirm('Tem certeza que deseja excluir o Filme?')">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>
                        </form>
                    </td>
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>


</body>
</html>