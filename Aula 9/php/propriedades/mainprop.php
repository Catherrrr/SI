<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/styles2.css">
</head>
<body>
	<h2>Cadastro de Propriedades</h2>
	<a href="adicionaprop.php"><button>Adicionar</button></a>
	<a href="pesquisaprop.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="600">
		<tr>
			<th>idprop</th>
			<th>Propriedade</th>
			<th>Proprietario</th>
			<th>Area</th>
			<th>Cultura</th>
		</tr>
		
		<?php 
			// conexao com o banco de dados
			require("conectaprop.php");
		
			// executar comandos sql
			// consulta registros da tabela
			$query = $mysqli->query("select * from propriedades");
			echo $mysqli->error;

			// carrega consulta de registros
			while ($tabela = $query->fetch_assoc()){
				echo "
				<tr><td align='center'>$tabela[idprop]</td>
				<td align='center'>$tabela[propriedade]</td>
				<td align='center'>$tabela[proprietario]</td>
				<td align='center'>$tabela[area]</td>
				<td align='center'>$tabela[cultura]</td>
			

				<td width='120'><a href='excluiprop.php?excluir=$tabela[idprop]'>[excluir]</a>
				<a href='alteraprop.php?alterar=$tabela[idprop]'>[alterar]</a></td>
				</tr>
			";}
		?>
	</table>
	<footer>
        <a href="../../index.php">Voltar</a>
    </footer>
</body>
</html>