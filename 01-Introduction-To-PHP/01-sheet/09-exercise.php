<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php
	function isEven($number)
	{

		if (($number % 2) == 0) {
			return "Even";
		} else {
			return "Odd";
		}
	}
	?>
</head>

<body>
	<?php
	echo isEven(2);
	?>

</body>

</html>