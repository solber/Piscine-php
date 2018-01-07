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

		sort($elem, SORT_NATURAL | SORT_FLAG_CASE);

		return ($elem);
	}

	$res = ft_split($str);
	$i = 1;

	while ($res[$i])
	{
		echo $res[$i] ."\n";
		$i++;
	}
?>