<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/styles2.css">
</head>
<body>
	<form method="POST" action="adicionaprop.php">
		Propriedade: <input type="text" name="propriedade" maxlength="20" placeholder="DIgite o nome da propriedade">
		<br/><br/>
		Proprietario: <input type="text" name="proprietario" maxlength="50" placeholder="Digita o proprietario">
		<br/><br/>
		Area: <input type="text" name="area" maxlength="50" placeholder="Digite a area">		
		<br/><br/>
		Cultura: <input type="text" name="cultura" maxlength="50" placeholder="Digite a cultura">
		<br/><br/>
		<input type="submit" value="salvar" name="botao">
	</form>

</body>
</html>

<?php 
if(isset($_POST["botao"])){

	require("conectaprop.php");

	//$nome=$_POST["nome"];
	$propriedade=htmlentities($_POST["propriedade"]);	
	$proprietario=htmlentities($_POST["proprietario"]);
	$area=htmlentities($_POST["area"]);
	$cultura=htmlentities($_POST["cultura"]);


	// gravando dados
	$mysqli->query("insert into propriedades values('', '$propriedade', '$proprietario', '$area', '$cultura')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='mainprop.php'> Voltar</a>";
	}

}
?>