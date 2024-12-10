 <?php
    require_once __DIR__ ."\..\..\model\Filme.php";
    
    $filmeModel = new Filme();
    $filmes = $filmeModel->buscarTodos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/catalogo-filmes/public/css/style.css">
    
    <title>Document</title>
</head>
<body>
    <header>
    <nav>
        <ul>
            <li>Home</li>
            <li><a href="http://localhost/catalogo-filmes/app/view/filme/listar.php">Adm</a></li>
            <li>Search</li>
        </ul>
    </nav>
    </header>

    <main>
        <section>
            <div class="filmes">
                <?php foreach ($filmes as $filme) { ?>
                    <div class="filme">
                        <form action="visualizar.php" method="GET">
                        <input type="hidden" name="id" value="<?= $filme->id; ?>">
                        <button>
                        <img class="imgSize" src="<?php echo $filme->img ?>" alt="poster filme">
                        </button>
                        </form>

                        <h3><?php echo $filme->nome ?></h3>

                        <span><?php echo $filme->descricao ?></span>

                        <span><strong><?php echo $filme->ano ?></strong></span>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>

</body>
</html> 