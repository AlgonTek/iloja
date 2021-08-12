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
		include 'nav.php';
		include 'cabecalho.html';
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h2>Logon de Usuario</h2>
				<form method="post" action="validarUser.php" name="logon">
				
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" required id="email">
				</div>
				<div class="form-group">
					<label for="email">Senha</label>
					<input type="password" name="senha" class="form-control" required id="senha">
				</div>
				<button type="submit" class="btn btn-lg btn-default">
					<span>Entrar</span>
				</button>
					
				</form>
				<a href="formUser.php">
					<button type="submit" class="btn btn-lg btn-link">
					ainda nao estou cadastrado
				</button>
				</a>
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