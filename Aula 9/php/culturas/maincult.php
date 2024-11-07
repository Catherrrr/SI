<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/styles2.css">
</head>
<body>
	<h2>Gerenciamento de Culturas</h2>
	<a href="adicionacult.php"><button>Adicionar</button></a>
	<a href="pesquisacult.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="600">
		<tr>
			<th>IdCultura</th>
			<th>cultura</th>
			<th>Variedade</th>
			<th>Ciclo</th>
			<th>Colheita</th>
		</tr>
		
		<?php 
			// conexao com o banco de dados
			require("conectacult.php");
		
			// executar comandos sql
			// consulta registros da tabela
			$query = $mysqli->query("select * from culturas");
			echo $mysqli->error;

			// carrega consulta de registros
			while ($tabela = $query->fetch_assoc()){
				echo "
				<tr><td align='center'>$tabela[idcultura]</td>
				<td align='center'>$tabela[cultura]</td>
				<td align='center'>$tabela[variedade]</td>
				<td align='center'>$tabela[ciclo]</td>
				<td align='center'>$tabela[colheita]</td>
			

				<td width='120'><a href='excluicult.php?excluir=$tabela[idcultura]'>[excluir]</a>
				<a href='alteracult.php?alterar=$tabela[idcultura]'>[alterar]</a></td>
				</tr>
			";}
		?>
	</table>
	<a href ="../../index.php"> Voltar </a>
</body>
</html>