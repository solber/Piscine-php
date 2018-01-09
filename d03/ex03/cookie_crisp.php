<?php
	
	$action = ( $_GET['action'] == null ) ? null : $_GET['action'];
	$name = ( $_GET['name'] == null ) ? null : $_GET['name'];
	$value = ( $_GET['value'] == null ) ? null : $_GET['value'];

	if ($action === "set" && $name != null)
	{
		$expire = time() + 3600;
		if (!setcookie( $name, $value, $expire))
			echo ("Failed to create cookie");
	}
	else if ($action === "get" && $name != null && $_COOKIE[$name])
	{
		echo ($_COOKIE[$name] . "\n");
	}
	else if ($action === "del" && $name != null)
	{
		setcookie($name);
	}
	
?>