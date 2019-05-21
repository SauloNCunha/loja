<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Ação</th>
        
    </tr>
    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
    ?>
   
    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= substr($produto['descricao'], 0, 40) ?></td>
        <td>
            <?php foreach($categorias as $categoria) : ?>
            <input type="radio" name="categoria_id" value="<?=$categoria['id']?>"><?=$categoria['nome']?></br>
            <?php endforeach ?>
        </td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
