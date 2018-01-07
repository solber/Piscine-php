#!/usr/bin/php
<?php

	$first = false;
	foreach ($argv as $elem) {
		if ($first)
			echo "$elem\n";
		else
			$first = true;
	}
	
?>