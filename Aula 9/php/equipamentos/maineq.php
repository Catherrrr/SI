<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/styles2.css">
</head>
<body>
	<h2>Cadastro de Equipamentos</h2>
	<a href="adicionaeq.php"><button>Adicionar</button></a>
	<a href="pesquisaeq.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="600">
		<tr>
			<th>idequipe</th>
			<th>Equipamento</th>
			<th>Localizacao</th>
			<th>Custo</th>
			<th>Marca</th>
		</tr>
		
		<?php 
			// conexao com o banco de dados
			require("conectaeq.php");
		
			// executar comandos sql
			// consulta registros da tabela
			$query = $mysqli->query("select * from equipamentos");
			echo $mysqli->error;

			// carrega consulta de registros
			while ($tabela = $query->fetch_assoc()){
				echo "
				<tr><td align='center'>$tabela[idequipe]</td>
				<td align='center'>$tabela[equipamento]</td>
				<td align='center'>$tabela[localizacao]</td>
				<td align='center'>$tabela[custo]</td>
				<td align='center'>$tabela[marcamodelo]</td>
			

				<td width='120'><a href='excluieq.php?excluir=$tabela[idequipe]'>[excluir]</a>
				<a href='alteraeq.php?alterar=$tabela[idequipe]'>[alterar]</a></td>
				</tr>
			";}
		?>
	</table>
	<footer>
        <a href="../../index.php">Voltar</a>
    </footer>
</body>
</html>