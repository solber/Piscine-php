#!/usr/bin/php
<?php

function ft_split($str)
{
	$str = ereg_replace("[ ]+", " ", $str);

	$elem = explode(" ", $str);

	return ($elem);
}

	$tab = ft_split($argv[1]);

	$first = array_shift($tab);

	if (isset($argv[1]))
	{
		foreach ($tab as $elem)
				echo ($elem) ." ";

			echo $first ."\n";
	}
?>