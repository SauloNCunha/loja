<?php 
    include("cabecalho.php");
    include("conecta.php"); 
    include("banco-produto.php"); 
?>
<table class="table">
    <tr>
        <td align="center">Descrição</td>
        <td align="center">Preço</
    </tr>
    <?php
        $produtos  = listaProdutos($conexao);
        foreach($produtos as $produto){ 
    ?>  
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td align="right"><?= $produto['preco'] ?></td>
        </tr>
        <?php
        }
        ?>
</table>
<?php include("rodape.php"); ?>
