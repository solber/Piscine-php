<?php

	include "auth.php";

	if (session_status() == PHP_SESSION_NONE) { session_start(); }

	if (isset($_GET['login']))
		$login = $_GET['login'];
	if (isset($_GET['passwd']))
		$psw = $_GET['passwd'];

	if (!isset($login) || !isset($psw) || empty($login) || empty($psw))
	{
		echo "ERROR\n";
		exit();
	}

	if (auth($login, $psw))
	{
		$_SESSION['loggued_on_user'] = $login;
		echo "OK\n";
		//echo ($_SESSION['loggued_on_user']);
		exit();
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "ERROR\n";
		//echo ($_SESSION['loggued_on_user']);
		exit();
	}
?>