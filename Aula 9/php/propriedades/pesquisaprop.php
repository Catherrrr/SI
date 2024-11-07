<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/styles2.css">
</head>
<body>
	<form method="POST" action="pesquisaprop.php">
		Propriedade: <input type="text" name="propriedade" maxlength="40" placeholder="digite a propriedade">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
	if(isset($_POST["botao"])){

		require("conectaprop.php");
		$propriedade=htmlentities($_POST["propriedade"]);

			// pesquisando dados
		$query = $mysqli->query("select * from propriedades where propriedade like '%$propriedade%'");
		echo $mysqli->error;

		echo "
		<table border='1' width='400'>
		<tr>
		<th>ID</th>
		<th>Propriedade</th>
		<th>Proprietario</th>
		<th>Area</th>
		<th>Cultura</th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'>$tabela[idprop]</td>
			<td align='center'>$tabela[propriedade]</td>
			<td align='center'>$tabela[proprietario]</td>
			<td align='center'>$tabela[area]</td>
			<td align='center'>$tabela[cultura]</td>
			</tr>
			";
		}
		echo "</table>";
	}
	?>
	<a href='mainprop.php'> Voltar</a>
</body>
</html>