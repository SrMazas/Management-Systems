<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php
	function sumar($a, $b){
		$suma = $a + $b;
		return $suma;
	}
	?>

</head>

<body>
	<?php

	$suma = sumar(4, 4);
	echo $suma;
	?>
</body>

</html>