<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	// GET - leitura - parametro idcli passado pela url
	if(isset($_GET["excluir"])){

		$idcultura = htmlentities($_GET["excluir"]);
		require("conectacult.php");
		$mysqli->query("delete from culturas where idcultura = '$idcultura'");
		echo $mysqli->error;
		if ($mysqli->error==""){
			echo "Excluido com Sucesso<br />";
			echo "<a href='maincult.php'>Voltar</a>";
		}
	}
	?>
</body>
</html>