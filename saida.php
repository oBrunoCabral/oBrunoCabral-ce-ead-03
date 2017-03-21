<?php 
	
	$fator1 = $_POST['numero1'];
	$fator2 = $_POST['numero2'];

/*	for ($fator1 = $_POST['numero1']; $fator1 <= $fator2; $fator1++){
	
		echo $fator1 . "x" . $fator2 . "=" . $fator1 * $fator2 . "<br>";
	}
*/
	for ($fator1 = $_POST['numero1']; $fator1 <= $fator2; $fator1++){
	

		" 	Tabuada de '$fator1'
				<table>
					<thead>
						<th>Fórmula</th>
						<th>Valor</th>
					</thead>
				</table>";
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tabuadas</title>
	<style type="text/css">
		table th {
			border:1px black solid;
		}
	</style>
</head>

<body>
	<p></p>
	<table>
		<thead>
			<th>Fórmula</th>
			<th>Valor</th>
		</thead>
	</table>
</body>
</html>

