<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <title>Controle de Estoque</title>
    </head>
    <body>
        <h1>Listagem de produtos com Laravel</h1>'
        <table class="table table-striped table-bordered table-hover">
            <th>
                <tr>
                    <td>Nome</td>
                    <td>Valor</td>
                    <td>Descricao</td>
                    <td>Quantidade</td>
                    <td>Detalhes</td>
                </tr>
            </th>
            <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->valor ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td>
                        <a href="/produtos/mostra">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>
