#!/usr/bin/php
<?php

	$str = $argv[1];
	if (isset($str))
		echo trim(preg_replace('/\s\s+/', ' ', $str)) ."\n";

?>