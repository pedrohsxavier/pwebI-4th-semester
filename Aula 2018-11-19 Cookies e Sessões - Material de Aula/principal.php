<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";
	if (!isset ($_COOKIE['logado']))
			echo "Nao foi possivel gerar o cookie";
	else echo "Cookie criado!";
?>
</body>
</html>
