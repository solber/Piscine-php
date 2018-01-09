#!/usr/bin/php
<?php

	function ft_is_sort($tab)
	{
		$i = 0;

		$tmp = $tab;

		if (!empty($tab))
			sort($tab);
		foreach ($tab as $elem)
		{
			if ($elem != $tmp[$i])
				return (0);
			$i++;
		}
		return (1); 
	}

?>