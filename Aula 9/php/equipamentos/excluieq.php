<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	// GET - leitura - parametro idcli passado pela url
	if(isset($_GET["excluir"])){

		$idequipe = htmlentities($_GET["excluir"]);
		require("conectaeq.php");
		$mysqli->query("delete from equipamentos where idequipe = '$idequipe'");
		echo $mysqli->error;
		if ($mysqli->error==""){
			echo "Excluido com Sucesso<br />";
			echo "<a href='maineq.php'>Voltar</a>";
		}
	}
	?>
</body>
</html>