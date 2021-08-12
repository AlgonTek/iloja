<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.js"></script>
    
    <title>Minha Loja</title>

    <style>
        .navbar{
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <?php

        session_start();
        
        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';

        $consulta =$conexao->query("SELECT * FROM pro");

    ?>

    <div class="container-fluid">
        <div class="row">
            <?php
                while ($exibe=$consulta->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="col-sm-3">
                <img src="upload/<?php echo $exibe['foto1'] ?>" class="img-responsive" style="width: 100%">
                <div><h2><?php echo mb_strimwidth($exibe['produto'], 0,22,'...') ; ?></h2></div>
                <div><h4><?php echo number_format($exibe['preco'],2,',','').' MT'; ?></h4></div>

                <div class="text-center" style="margin-bottom: 5px;">
                    <a href="detalhes.php?id=<?php echo $exibe['id']; ?>">
                    <button class="btn btn-lg btn-block btn-info">
                        <span class="">Detalhes</span>
                    </button></a>
                </div>

                 <div class="text-center" style="margin-bottom: 5px">
                 <a href="carrinho.php?id=<?php echo $exibe['id'] ?>">
                    <button class="btn btn-lg btn-block btn-success">
                        <span class="">Comprar</span>
                    </button></a>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

    </div>
    <?php
        include 'footer.html';
    ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>