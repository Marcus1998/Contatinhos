<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<?php
		 //pega os dados
		$id =$_GET["id"];
		$nome = $_GET["nome"];
		$telefone = $_GET["telefone"];
		$endereco = $_GET["endereco"];
		$obs = $_GET["obs"];
		
		
		
		//abre conexão
		$con = mysqli_connect('localhost','root','');
		
		//seleciona o banco
		mysqli_select_db($con,'contatinho');
		
		//insere dados na tabela
		mysqli_query($con,'update contato set nome="'.$nome.'", numero="'.$telefone.'", endereco="'.$endereco.'", obs="'.$obs.'" where idContato = '.$id.';');
		
		
		//fecha conexao
		mysqli_close($con);
		
		echo 'Contato Atualizado!';
		header("Location: http://localhost/contatinho/php/menu.php");
	?>
	</body>
</html>