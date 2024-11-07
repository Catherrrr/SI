<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/styles2.css">
</head>
<body>
	<form method="POST" action="pesquisaeq.php">
		Equipamentos: <input type="text" name="equipamento" maxlength="40" placeholder="digite o equipamento">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
	if(isset($_POST["botao"])){

		require("conectaeq.php");
		$equipamento=htmlentities($_POST["equipamento"]);

			// pesquisando dados
		$query = $mysqli->query("select * from equipamentos where equipamento like '%$equipamento%'");
		echo $mysqli->error;

		echo "
		<table border='1' width='400'>
		<tr>
		<th>ID</th>
		<th>Equipamento</th>
		<th>Localiczacao</th>
		<th>Custo</th>
		<th>Modelo</th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'>$tabela[idequipe]</td>
			<td align='center'>$tabela[equipamento]</td>
			<td align='center'>$tabela[localizacao]</td>
			<td align='center'>$tabela[custo]</td>
			<td align='center'>$tabela[marcamodelo]</td>
			</tr>
			";
		}
		echo "</table>";
	}
	?>
	<a href='maineq.php'> Voltar</a>
</body>
</html>