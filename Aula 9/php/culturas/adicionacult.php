<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="adicionacult.php">
		Cultura: <input type="text" name="cultura" maxlength="20" placeholder="Digite a Cultura">
		<br/><br/>
		Variedade: <input type="text" name="variedade" maxlength="50" placeholder="Digite a variedade">		
		<br/><br/>
		Ciclo: <input type="text" name="ciclo" maxlength="50" placeholder="Digite a variedade">	
		<br/><br/>
		Colheita: <input type="text" name="colheita" maxlength="50" placeholder="Digite a variedade">	
		<input type="submit" value="salvar" name="botao">
	</form>

</body>
</html>

<?php 
if(isset($_POST["botao"])){

	require("conectacult.php");

	//$nome=$_POST["nome"];
	$cultura=htmlentities($_POST["cultura"]);
	$variedade=htmlentities($_POST["variedade"]);
	$ciclo=htmlentities($_POST["ciclo"]);
	$colheita=htmlentities($_POST["colheita"]);


	// gravando dados
	$mysqli->query("insert into culturas values('', '$cultura', '$variedade', '$ciclo', '$colheita')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='maincult.php'> Voltar</a>";
	}

}
?>