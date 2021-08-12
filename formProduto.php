<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/bootstrap.js"></script>
	
<script src="jquery.mask.js"></script>

<script>
	
	
	
$(document).ready(function(){
	
$('#preco').mask('000.000.000.000.000,00', {reverse: true});	
	
});
	
</script>
	
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
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de produto</h2>
				
				<form method="post" action="incluiProduto.php" name="incluiProd" enctype="multipart/form-data">
				
					<div class="form-group">
				
						<label for="produto">Produto</label>
						<input name="produto" type="text" class="form-control" required id="produto">
					</div>
				
				<div class="form-group">
					
					
					<label for="marca">Marca</label>
					
					<select class="form-control" name="marca">
					  <option value="SAMSUNG">SAMSUNG</option>
					  <option value="LG">LG</option>
					  <option value="APPLE">APPLE</option>
					  <option value="DELL">DELL</option>
					  <option value="JBL">JBL</option>
					   <option value="OUTROS">OUTROS</option>
					</select>

			
					</div>
					
					
					
					<div class="form-group">
				
					<label for="departamento">Departamento</label>
					
					<select class="form-control" name="categoria">
					  <option value="VIDEO">VÍDEO</option>
					  <option value="AUDIO">AUDIO</option>
					  <option value="INFORMÁTICA">INFORMÁTICA</option>
					  <option value="OUTROS">OUTROS</option>
					</select>

					</div>
					
					
					<div class="form-group">
				
					<label for="secao">Seção</label>
					
					<select class="form-control" name="secao">
					  <option value="TV">TV</option>
					  <option value="DOCK STATION">DOCK STATION</option>
					  <option value="FONE">FONE</option>
					  <option value="OUTROS">OUTROS</option>
					</select>
						

					</div>
					
					
					<div class="form-group">
				
					<label for="descricao">Descrição</label>
					
						<textarea rows="5" class="form-control" name="descricao"></textarea>
						

					</div>
					
					
					
					<div class="form-group">
				
					<label for="quantidade">Quantidade</label>
					
					<input type="number" class="form-control" required name="quantidade" id="quantidade">

					</div>
					
					
					
					<div class="form-group">
				
					<label for="preco">Preço</label>
					
					<input type="text" class="form-control" required name="preco" id="preco">

					</div>
					
					
					<div class="form-group">
				
					<label for="foto1">Foto Principal</label>
					
					<input type="file" accept="image/*" class="form-control" required name="foto1" id="foto1">

					</div>
					
					<div class="form-group">
				
					<label for="foto2">Foto 2</label>
					
					<input type="file" accept="image/*" class="form-control" required name="foto2" id="foto2">

					</div>
					
					<div class="form-group">
				
					<label for="foto2">Foto 3</label>
					
					<input type="file" accept="image/*" class="form-control" required name="foto3" id="foto3">

					</div>
					
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-pencil"> Cadastrar </span>
					
				</button>
				
				</form>
				
			</div>
		</div>
	</div>
	
	<?php include 'footer.html' ?>
	
	
	
	
</body>
</html>