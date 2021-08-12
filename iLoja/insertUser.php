<?php
include 'conexao.php';

$recebe_nome=$_POST['nome'];
$recebe_apelido=$_POST['apelido'];
$recebe_email =$_POST['email'];
$recebe_senha =$_POST['senha'];
$recebe_morada =$_POST['morada'];
$recebe_cidade =$_POST['cidade'];
$recebe_nuit =$_POST['nuit'];

$consulta = $conexao->query("SELECT email FROM users WHERE email='$recebe_email'");
// $exibe=$consulta->fetch(PDO::FETCH_ASSOC);

if ($consulta->rowCount()==1) {
	header('location:error.php');
}else{
	try {
		$insert = $conexao->query("
			INSERT INTO users (nome,apelido,email,senha,morada,cidade,nuit,adm) VALUES (
				'$recebe_nome',
				'$recebe_apelido',
				'$recebe_email',
				'$recebe_senha',
				'$recebe_morada',
				'$recebe_cidade',
				'$recebe_nuit',
				'0')");
	header('location:ok.php');
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

}
?>