#!/usr/bin/php
<?php

	if ($argc == 4)
	{
		$a = trim($argv[1]);
		$op = trim($argv[2]);
		$b = trim($argv[3]);
		if (is_numeric($a) && is_numeric($b))
		{
			if ($op == "+")
			{
				echo $a + $b ."\n";
				exit();
			}
			else if ($op == "-")
			{
				echo $a - $b ."\n";
				exit();
			}
			else if ($op == "*")
			{
				echo $a * $b ."\n";
				exit();
			}
			else if ($op == "/")
			{
				echo $a / $b ."\n";
				exit();
			}
			else if ($op == "%")
			{
				echo $a % $b ."\n";
				exit();
			}
			else
			{
				echo "Incorrect Parameters\n";
				exit();
			}
		}
		else
		{
			echo "Incorrect Parameters\n";
			exit();
		}
	}
	else
	{
		echo "Incorrect Parameters\n";
		exit();
	}
?>