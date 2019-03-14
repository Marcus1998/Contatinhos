<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
	<?php
	//abre conexão
		$con = mysqli_connect('localhost','root','');
		
		//seleciona o banco
		mysqli_select_db($con,'contatinho');
		
		//insere dados na tabela
		$result = mysqli_query($con,"SELECT * FROM cliente c where c.nome = '" .$_POST["user"]."' and c.senha='" . $_POST["pass"]."';");
		
		
		if(mysqli_num_rows($result)==1){
			header("Location: http://localhost/contatinho/php/menu.php");
		}
		else {
			echo "Login inválido!";
			header("Location: http://localhost/contatinho/login.html");
		}
		
		//fecha conexao
		mysqli_close($con);
	
	
	?>
	</body>
</html>