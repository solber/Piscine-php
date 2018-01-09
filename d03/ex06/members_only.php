<?php
	$pwd = ( $_SERVER['PHP_AUTH_PW'] == null ) ? null : $_SERVER['PHP_AUTH_PW'];
	$name = ( $_SERVER['PHP_AUTH_USER'] == null ) ? null : $_SERVER['PHP_AUTH_USER'];
	if ( "zaz:jaimelespetitsponeys" === ( $name . ':' . $pwd ) )
	{
		echo ("<html><body>" . "\n" . "Bonjour Zaz<br />" . "\n" . "<img src='data:image/png;base64," . base64_encode(file_get_contents("../srcs/img/42.png")) . "'>" . "\n" . "</body></html>" . "\n");
	}
	else
	{
		header("WWW-Authenticate: Basic realm=''Espace membres''");
		header("connection: close");
		echo("<html><body>Cette zone est accessible uniquement aux membres du site</body></html>" . "\n");
	}
?>