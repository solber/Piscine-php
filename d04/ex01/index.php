<?php

	if (session_status() == PHP_SESSION_NONE) { session_start(); }

	if ($_GET)
	{
		$login = ($_GET['login'] == null) ? null : $_GET['login'];
		$psw = ($_GET['passwd'] == null) ? null : $_GET['passwd'];
		$sub = ($_GET['submit'] == null) ? null : $_GET['submit'];

		if (!empty($_GET['login']) && !empty($_GET['passwd']) && $sub == "Ok")
		{
			$_SESSION['auth'] = new stdClass();
			$_SESSION['auth']->login = $login;
			$_SESSION['auth']->psw = $psw;
		}
		else
		{
			echo "Error invalid arguments";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Session</title>
</head>
<body>

	<div>
		<form method="GET">
			<p>Login :<input type="text" name="login" value="<?php if (!empty($_SESSION['auth']->login)) echo $_SESSION['auth']->login; ?>"></p>
			<p>Psw :<input type="text" name="passwd" value="<?php if (!empty($_SESSION['auth']->psw)) echo $_SESSION['auth']->psw; ?>"></p>
			<input type="submit" name="submit" value="Ok">
		</form>
	</div>
</body>
</html>