<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/bootstrap.js"></script>
	
	
<style>

.navbar{
	margin-bottom: 0;
}
	
	
</style>
	
	
</head>

<body>
	
<?php
	
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){
		header('location:index.php');
	}
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Área administrativa</h2>
				
				
				<a href="formProduto.php">			
				<button type="submit" class="btn btn-block btn-lg btn-primary">
					
					Incluir Produto
					
				</button>
					
				</a >
				<br>
				
				<a href="lista.php">
				<button type="submit" class="btn btn-block btn-lg btn-warning">
					
					Alterar / Excluir Produto
					
				</button>
				</a>
				<br>
				<a href="">
				<button type="submit" class="btn btn-block btn-lg btn-success">
					
					Vendas
					
				</button>
				</a>
				<br>
				<a href="sair.php">
				<button type="submit" class="btn btn-block btn-lg btn-danger">
					
					Sair da àrea administrativa
					
				</button>
				</a>
				
				
				
			</div>
		</div>
	</div>
	
	<?php include 'footer.html' ?>
	
	
	
	
</body>
</html>