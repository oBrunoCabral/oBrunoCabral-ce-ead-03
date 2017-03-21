<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tabuadas</title>
	<style type="text/css">

		table, th, td{
			border-collapse: collapse;
			border: 1px solid black;
			text-align: center;
		}

		th {
			background-color: DarkRed ;
			color: white;
			font-weight: bolder;
		}

		div{
			text-align: center;
			display: inline-block;
			margin:0 20px 20px 0;
		}

	</style>
</head>

<body>

	<?php 
		$tabInicio = $_POST['tabInicio'];
		$tabFinal = $_POST['tabFinal'];

		$numInicio = $_POST['numInicio'];
		$numFinal = $_POST['numFinal'];

		for ($i=$tabInicio; $i <= $tabFinal ; $i++) {

			print "
				<div class = 'container'> 
					Tabuada do " . $i . "<br>
					<table>
						<thead>
							<tr>
								<th>Fórmula</th>
								<th>Valor</th>
							</tr>
						</thead>
						<tbody>"; 

				for ($j=$numInicio ; $j <= $numFinal; $j++){
					print "
						<tr>
							<td>" . $i . " x " . $j . "</td>
							<td>" . ($i*$j) . "</td>		
						</tr>";				
				}
				print "
					</tbody>
					</table> 
				</div>";
		}
	?>

</body>
</html>

