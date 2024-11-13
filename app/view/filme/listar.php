<?php

require_once __DIR__ ."\..\..\model\Filme.php";

$filmeModel = new Filme();

$filmes = $filmeModel->buscarTodos();

// echo "<pre>";
// print_r($filmes);
// echo "<pre>";
?>

<table border ="1" >
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Ano</th>
        <th>Descrição</th>
    </thead>
    <tbody>
        <?php foreach($filmes as $filme){ ?>
            <tr>
                <td><?php echo $filme->id ?></td>
                <td><?php echo $filme->nome ?></td>
                <td><?php echo $filme->ano ?></td>
                <td><?php echo $filme->descricao ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>