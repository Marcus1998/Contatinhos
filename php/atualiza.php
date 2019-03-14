<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"> 
		<title>Cadastre-se!!</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>

	<body>
		<header id="cabeca">
			<h1>MyContatinhos.com</h1>
		</header>

		<div id="cadastro">
			<form method="get" action="atualizaContatinho.php">
				<fieldset>
					<h2>Edição do Contatinho</h2>
					<?php
						$id = $_GET['id'];
						$nome = $_GET['nome'];
						$telefone = $_GET['telefone'];
						$endereco = $_GET['endereco'];
						$obs = $_GET['obs'];
						echo '<p>Id: <input type="number" name="id" id="cId" value="'.$id.'" readonly="true" size="50"/></p>
						<p>Nome: <input type="text" name="nome" id="cNome" value="'.$nome.'" size="50" maxlength="100"  placeholder="Nome do contatinho"/></p>
						<p><label for="cNumero">Telefone: <input type="text" value="'.$telefone.'"size="50" name="telefone" id="cNumero" placeholder="Ex: (DDD)xxxx-xxxx"/></label></p>
						<p>Endereço: <input type="text" name="endereco" value="'.$endereco.'" id="cendereco" size="50" maxlength="90" placeholder="Ex: Rua da Ladeira"/></p>
						<p id="obs">Observações:</p>
						<textarea name="obs" cols="45"  rows="10" maxlength="255" placeholder="Ex: Chato, Legal..">'.$obs.'</textarea></p>';
					?>
					<input type="submit" id="botao" value="Atualizar Contatinho">
				</fieldset>
			</form>
		</div>
	</body>
</html>