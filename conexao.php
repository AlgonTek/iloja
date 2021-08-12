<?php
	try {
		$conexao = new PDO('mysql:host=localhost;dbname=minhaloja;charset=utf8','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "ERRO na Conexao: ".$e->getMessage()."<br>";
		echo "ERRO CODE: ".$e->getCode();
	}
	
?>