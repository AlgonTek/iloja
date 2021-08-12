<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha Loja</title>

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
				<h2>Nenhum produto encontrado!!</h2>
			</div>
		</div>
	</div>


    <?php
        include 'footer.html';
    ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html> 