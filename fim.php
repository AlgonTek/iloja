<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.js"></script>
    <title>Document</title>
    <style>
        .navbar{
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <?php
        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';

    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 text-center">
                <h2>Sua compra foi realizada com sucesso!!</h2>
                <h2>Seu numero de registro e: <?php echo $ticket ?></h2>
                <?php 

                ?>
            </div>
        </div>
    </div>
    <?php  include 'footer.html' ?>
   
</body>
</html>