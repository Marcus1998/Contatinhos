<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
	<?php
		 //pega os dados
		 
		$nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
		$telefone = isset($_GET["telefone"]) ? $_GET["telefone"] : "[Não informado]";
		$endereco = isset($_GET["endereco"]) ? $_GET["endereco"] : "[Não informado]";
		$obs = isset($_GET["obs"]) ? $_GET["obs"] : "[Não informado]";
		
		//abre conexão
		$con = mysqli_connect('localhost','root','');
		
		//seleciona o banco
		mysqli_select_db($con,'contatinho');
		
		//insere dados na tabela
		mysqli_query($con,'INSERT INTO contato(nome, endereco, numero, obs) VALUES ("'.$nome.'","'.$endereco.'","'.$telefone.'","'.$obs.'");');
		
		echo 'Contato inserido!';
		header("Location: http://localhost/contatinho/php/menu.php");
		
		//fecha conexao
		mysqli_close($con);
	?>
	</body>
</html>