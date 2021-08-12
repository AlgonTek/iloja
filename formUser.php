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
		include 'nav.html';
		include 'cabecalho.html';
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h2>Novo Usuario</h2>
				<form method="post" action="insertUser.php">
					<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" name="nome" class="form-control" required id="nome">
				</div>
				<div class="form-group">
					<label for="apelido">Apelido</label>
					<input type="text" name="apelido" class="form-control" required id="apelido">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" required id="email">
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" name="senha" class="form-control" required id="senha">
				</div>
				<div class="form-group">
					<label for="morada">Morada</label>
					<textarea name="morada" rows="3" class="form-control" required id="morada"></textarea>
				</div>
				<div class="form-group">
					<label for="cidade">Cidade</label>
					<input type="text" name="cidade" class="form-control" required id="cidade">
				</div>
				<div class="form-group">
					<label for="nuit">Nuit</label>
					<input type="text" name="nuit" class="form-control" required id="nuit">
				</div>
				<button type="submit" class="btn btn-lg btn-default">
					<span>Cadastrar</span>
				</button>
				</form>
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