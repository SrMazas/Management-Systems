<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	function changeArray()
	{
		$colores = array('rojo', 'verde', 'amarillo', 'azul', 'rosa');

		print_r($colores);
		
		for ($i = 0; $i < count($colores); $i++) {
			if ($colores[$i] == "azul") {
				unset($colores[$i]);
			}
		}

		print_r($colores);
	}
	?>
</head>

<body>

	<?php
	changeArray();
	?>

</body>

</html>