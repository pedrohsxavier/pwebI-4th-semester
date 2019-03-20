<?php
	if (!isset($_COOKIE["contador"]))
		setcookie("contador","1");	
	else
		setcookie("contador", ++$_COOKIE["contador"]);
		//setcookie("contador", $_COOKIE["contador"] + 1);
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
	<?php
		echo isset($_COOKIE["contador"])?"Cookie criado":"Não foi criado o cookie";
		echo " Ola...eh a ".$_COOKIE["contador"]."a vez que vc nos visita!";

	?>
</body>
</html>
