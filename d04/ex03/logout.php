<?php
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	if (isset($_SESSION['loggued_on_user']))
		unset($_SESSION['loggued_on_user']);
?>