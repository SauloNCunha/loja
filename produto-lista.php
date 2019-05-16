<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php"); ?>

<table class="table table-striped table-bordered">
    <tr>
        <td align="center">Descrição</td>
        <td align="center">Preço</td>
        <td align="center">Ações</td>
    </tr>
    <?php
        $produtos  = listaProdutos($conexao);
        foreach($produtos as $produto){ 
    ?>  
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td align="right"><?= $produto['preco'] ?></td>   
            <td align="center">
                
                <a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">Remover</a> | 
                <a href="alterar-produto.php?id=<?=$produto['id']?>" class="text-info">Alterar</a>
                
            </td>
        </tr>
        <?php
        }
        ?>
</table>

<?php include("rodape.php"); ?>
