<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<?php
		//pega os dados
		$idContato = $_GET['id'];
		//abre conexão
		$con = mysqli_connect('localhost','root','');
		
		//seleciona o banco
		mysqli_select_db($con,'contatinho');
		
		//insere dados na tabela
		mysqli_query($con,'DELETE FROM contato Where idContato = '.$idContato.';');
		
		
		
		//fecha conexao
		mysqli_close($con);
		
		echo 'Contato Excluido!';
		header("Location: http://localhost/contatinho/php/menu.php");
	?>
	</body>
</html>