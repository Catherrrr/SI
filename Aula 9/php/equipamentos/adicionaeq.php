<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/styles2.css">
</head>
<body>
	<form method="POST" action="adicionaeq.php">
		Equipamento: <input type="text" name="equipamento" maxlength="20" placeholder="DIgite o nome do equipamento">
		<br/><br/>
		Localizacao: <input type="text" name="localizacao" maxlength="50" placeholder="Digita a localizacao">
		<br/><br/>
		Custo: <input type="text" name="custo" maxlength="50" placeholder="Digite o custo">		
		<br/><br/>
		Marca e Modelo: <input type="text" name="marcamodelo" maxlength="50" placeholder="Digite a marca">
		<br/><br/>
		<input type="submit" value="salvar" name="botao">
	</form>

</body>
</html>

<?php 
if(isset($_POST["botao"])){

	require("conectaeq.php");

	//$nome=$_POST["nome"];
	$equipamento=htmlentities($_POST["equipamento"]);	
	$localizacao=htmlentities($_POST["localizacao"]);
	$custo=htmlentities($_POST["custo"]);
	$marcamodelo=htmlentities($_POST["marcamodelo"]);


	// gravando dados
	$mysqli->query("insert into equipamentos values('', '$equipamento', '$localizacao', '$custo', '$marcamodelo')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='maineq.php'> Voltar</a>";
	}

}
?>