#!/usr/bin/php
<?php

	$str = $argv[1];
	if (!empty($str))
		echo trim(preg_replace('/\s\s+/', ' ', $str)) ."\n";

?>