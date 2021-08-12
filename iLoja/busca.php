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
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';

	if(empty($_GET['busca'])){header('location:index.php');}
	
	$recebe_busca = $_GET['busca'];

	$consulta = $conexao->query("SELECT * FROM pro WHERE produto LIKE CONCAT ('%','$recebe_busca','%') OR descricao LIKE CONCAT ('%','$recebe_busca','%')");

	if($consulta->rowCount()==0){
		echo "<html><script>location.href='erro1.php'</script></html>";
	}

	?> 
	
<div class="container-fluid">
	
	<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><img src="upload/<?php echo $exibe['foto1'] ?>" class="img-responsive"></div>
		<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo 'Nome: '. $exibe['produto']; ?></h4></div>
		<div class="col-sm-2"><h4 style="padding-top:20px"><?php echo 'Preco: '. number_format($exibe['preco'],2,',','').' MT'; ?></h4></div> 
		<div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">


		<a href="detalhes.php?id=<?php echo $exibe['id'] ?>">
			<button class="btn btn-lg btn-block btn-default">
			<span class="glyphicon glyphicon-info-sign" style="color: cadetblue;"> Detalhes</span>	
			</button>
		</a>
		
		
		</div> 
				
	</div>		
	
	<?php } ?>
	
</div>
	
	<?php
	
	include 'footer.html';
	
	?>
	
</body>
</html>