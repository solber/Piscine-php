#!/usr/bin/php
<?php

	if ($argc == 2)
	{
		$param = trim($argv[1]);
		
		$param = str_replace(' ', '', $param);

		$tab = explode('+', $param);
		if (is_numeric($tab[0]) && is_numeric($tab[1]))
		{
			if (count($tab) > 1)
			{
				echo $tab[0] + $tab[1] ."\n";
				exit();
			}
		}
		$tab = explode('-', $param);
		if (is_numeric($tab[0]) && is_numeric($tab[1]))
		{
			if (count($tab) > 1)
			{
				echo $tab[0] - $tab[1] ."\n";
			}
		}
		$tab = explode('*', $param);
		if (is_numeric($tab[0]) && is_numeric($tab[1]))
		{
			if (count($tab) > 1)
			{
				echo $tab[0] * $tab[1] ."\n";
				exit();			
			}
		}
		$tab = explode('/', $param);
		if (is_numeric($tab[0]) && is_numeric($tab[1]))
		{
			if (count($tab) > 1)
			{
				echo $tab[0] / $tab[1] ."\n";
				exit();
			}
		}
		$tab = explode('%', $param);
		if (is_numeric($tab[0]) && is_numeric($tab[1]))
		{
			if (count($tab) > 1)
			{
				echo $tab[0] % $tab[1] ."\n";
				exit();
			}
		}
		echo "Syntax Error\n";
	}
	else
	{
		echo "Incorrect Parameters\n";
		exit();
	}
?>