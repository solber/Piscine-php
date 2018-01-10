<?php

function ft_split($str)
{
	if (is_null($str))
		return (null);
	$str = trim(preg_replace('/\s\s+/', ' ', $str));
	
	$elem = explode(" ", $str);
	
	sort($elem);

	return ($elem);
}

?>