<html>
    <head>
        <title> Minha Loja</title>
        <meta charset="utf-8">
        <link href="css/bootstrep.css" rel="stylesheet">
        <link href="css/loja.css" rel="stylesheet">
    </head>
    <body>
        <div class="conteiner">
            <?php
            $nome = $_GET["nome"];
            $preco = $_GET["preco"];
            ?>
            
            Produto <?= $nome; ?> no valor de <?= $preco ;?>adicionado com sucesso!
        </div>
    </body>
</html>