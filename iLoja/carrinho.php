<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	
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
	
	if (empty($_SESSION['id'])){
		header('location:formLogon.php');		
	}

	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	
	
	if (!empty($_GET['id'])) {
	
	$id_prod=$_GET['id'];
	
	
	if (!isset($_SESSION['carrinho'])) {
		  $_SESSION['carrinho'] = array();
	}

	if (!isset($_SESSION['carrinho'][$id_prod])) {
		$_SESSION['carrinho'][$id_prod]=1;
	}
	else {
		  $_SESSION['carrinho'][$id_prod]+=1;
	}
		
		include 'mostraCarrinho.php';
		
	} else {
		include 'mostraCarrinho.php';
	}	
	
	?>
	<div class="row text-center" style="margin-top: 15px;">
	
		 <h1>Total: <?php echo number_format($total,2,',','.').' MT'; ?><!-- <?php //echo number_format($total,2,',','.'); ?>--> </h1> 
	</div>
	<div class="row text-center" style="margin-top: 15px;">
		<a href="index.php"><button class="btn btn-lg btn-primary">Continuar Comprando</button></a>
		<?php if (count($_SESSION['carrinho'])>0) { ?>
			<a href="finalizarCompra.php"><button class="btn btn-lg btn-success">Finalizar Compra</button></a>
		<?php } ?>
	</div>
</div>
	<?php
	
	include 'footer.html';
	
	?>
	
</body>
</html>