<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/> 
		<title>MyContatinhos</title>
		<style>		
			@import url('https://fonts.googleapis.com/css?family=Nunito');
		
			table{
				border-collapse: collapse;
				border: 2px solid black;
				width: 100%;
				background-color: #ffffff;
				
			}
			
			tr, td {
				border: 2px solid black;
			}
			
			tr:nth-child(even) {
				background-color: #f2f2f2;
			
			}
			
			div#container{
				width: 900px;
				margin: 0 auto;
				
			}
			
			body{
				background: url("../img/conts.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: 100%;
			}
			
			section#php{
				width: 100%;
			}
			
			header#cabecalho{
				width: 100%;
				margin: 0 auto;
				height: 250px;
				background-color: rgba(0,128,128,0.8);
				font-family: 'Nunito', sans-serif;
				color: #ffffff;
				text-align: center;
				position: relative
			}
			
			img {
				height: 30px;
				width: 30px;
			}
			img#add{
				position: absolute;
				top:40%;
				left: 80%;
				height: 90px;
				width: 90px;
			}

			footer{
				background-color: black;
				position: absolute;
				left: 0;
				right: 0;
				margin-top: 20px;
			}
			footer p{
				color: white;
				font-family: 'Nunito', sans-serif;
				text-align: center;
			}
			
		</style>
	</head>
	<body>
		<div id="container">
			<header id="cabecalho">
				<h1>MyContatinhos.com</h1>
				<form method="get" action="consulta.php">
				<fieldset>
					<h2>Pesquisar Por Nome..</h2><input type="text" name="pega" id="cNome" size="25" maxlength="100" placeholder="Ex: Paulo Roberto.."/></p>
					<input type="submit" id="botao" value="Pesquisar"></p>
					<a href="../cadastro.html"><img id= "add" src="../img/addContato.png"/></a>
				</fieldset>				
			</form>

				
			</header>
			<section id="php">
				<?php
					//abre conexão
					$con = mysqli_connect('localhost','root','');
					
					//seleciona o banco
					mysqli_select_db($con,'contatinho');
					
					//insere dados na tabela
					$result = mysqli_query($con,"SELECT * FROM contato;");
					
					echo "<table>";
					
					while($exibe = mysqli_fetch_assoc($result)){
						$id = $exibe['idContato'];
						$nome=$exibe['nome'];
						$endereco=$exibe['endereco'];
						$telefone=$exibe['numero'];
						$obs=$exibe['obs'];
						echo '<tr><td>'.'Nome: '.$nome.'</br>'.'Endereco: '.$endereco.'</br>'.'Telefone: '.$telefone.'</br>'.'Obs: '.$obs.'</td><td><a href="atualiza.php?id='.$id.'&nome='.$nome.'&endereco='.$endereco.'&telefone='.$telefone.'&obs='.$obs.'"><img src="../img/atualizar.png"/></a><a href="excluiContatinho.php?id='.$id.'"><img src="../img/delete.png"/></a></td></tr>';
						

					}																																								
					echo "</table>";
					mysqli_close($con);
				?>
			</section>
		</div>

		<footer>
			<p>©mycontatinhos.com</p>
		</footer>

	</body>
</html>