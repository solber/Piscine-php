#!/usr/bin/php
<?php

function ft_split($str)
{
	$str = ereg_replace("[ ]+", " ", $str);

	$elem = explode(" ", $str);

	sort($elem, SORT_STRING);

	return ($elem);
}

?>