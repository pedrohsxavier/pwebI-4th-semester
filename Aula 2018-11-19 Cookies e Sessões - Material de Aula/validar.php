<?php
	if($_POST["senha"]==12345)
	{
		setcookie('logado','true',time()*3600,0);
		print_r($_COOKIE);
		//header("Location:principal.php");
	}
	else{
		//echo "Senha invalida! ";
		header("Location:login.php");
	}
?>