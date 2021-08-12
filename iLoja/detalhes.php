<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="lightbox.css" rel="stylesheet">
	<script src="lightbox.js"></script>
	
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

	if(!empty($_GET['id'])){
		$id_prod=$_GET['id'];

		$consulta = $conexao->query("SELECT * FROM pro WHERE id='$id_prod'");
		
		$exibir= $consulta->fetch(PDO::FETCH_ASSOC);
	} else{
		header('location:index.php');
	}
	
	?>
	
<div class="container-fluid">
	
	<div class="row">
		
		 <div class="col-sm-4 col-sm-offset-1"> 
			<h1>Detalhes do Produto</h1>
			<a href="upload/<?php echo $exibir['foto1']; ?>" data-lightbox="galeria" data-title="<?php echo $exibir['produto']; ?>">
				<img src="upload/<?php echo $exibir['foto1']; ?>" class="img-responsive" style="width: 100%">
			</a>

			 <!-- <img src="https://placehold.it/900x640" class="img-responsive" style="width:100%;"> -->
				<?php if($exibir['foto2']!="") {?>
				<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img src="upload/<?php echo $exibir['foto2'] ?>" class="img-responsive" style="width: 100%"></div>

				<?php} if($exibir['foto3']!="") {?>
				<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img src="upload/<?php echo $exibir['foto3'] ?>" class="img-responsive" style="width: 100%"></div>
				<?php } ?>
			
		</div>
		
				
 		 <div class="col-sm-7"><h1><?php echo $exibir['produto']; ?></h1>
		
		<p><?php echo 'Descricao: '. $exibir['descricao']; ?></p>
		
		<p><?php echo 'Marca: '. $exibir['marca']; ?></p>
		
		<p><?php echo 'Preco: '. number_format($exibir['preco'],2,',','').' MT'; ?></p>
			 
			 <a href="carrinho.php?id=<?php echo $exibir['id'] ?>">
		<button class="btn btn-lg btn-success">Comprar</button>
				</a>
		</div>		
	

	
</div>
	
	<?php
	
	include 'footer.html';
	
	?>
	
</body>
</html>