#!/usr/bin/php
<?php

	if ($argc > 1 && isset($argv[2]))
	{
		$key = trim($argv[1]);
		$key = str_replace(' ', '', $key);

		for ($i=count($argv); $i > 2; $i--) { 
			$tab = explode(':', $argv[$i]);
			if ($tab[0] == $key)
			{
				echo $tab[1] ."\n";
				exit();
			}
		}
	}
	
?>