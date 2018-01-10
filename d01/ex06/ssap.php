#!/usr/bin/php
<?php

	$first = false;
	foreach ($argv as $elem) {
		if ($first)
		{
			$str = $str .trim(preg_replace('/\s\s+/', ' ', $elem)) ." ";
		}
		else
			$first = true;
	}

	function ft_split($str)
	{
		$str = ereg_replace("[ ]+", " ", $str);

		$elem = explode(" ", $str);

		sort($elem);

		return ($elem);
	}

	$res = ft_split($str);

	foreach ($res as $key) {
		if (!empty($key))
			echo $key ."\n";
	}
?>