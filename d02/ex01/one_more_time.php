#!/usr/bin/php
<?php

	function get_month($val)
	{
		if ($val == "Janvier" || $val == "janvier")
			return ("January");
		else if ($val == "Fevrier" || $val == "fevrier")
			return ("February");
		else if ($val == "Mars" || $val == "marse")
			return ("March");
		else if ($val == "Avril" || $val == "avril")
			return ("April");
		else if ($val == "Mai" || $val == "mai")
			return ("May");
		else if ($val == "Juin" || $val == "juin")
			return ("June");
		else if ($val == "Juillet" || $val == "juillet")
			return ("Jully");
		else if ($val == "Aout" || $val == "aout")
			return ("August");
		else if ($val == "Septembre" || $val == "septembre")
			return ("September");
		else if ($val == "Octobre" || $val == "octobre")
			return ("October");
		else if ($val == "Novembre" || $val == "novembre")
			return ("November");
		else if ($val == "Decembre" || $val == "decembre")
			return ("December");
	}

	function get_day($val)
	{
		
		if ($val == "Lundi" || $val == "lundi")
			return ("Monday");
		else if ($val == "Mardi" || $val == "Mardi")
			return ("Tuesday");
		else if ($val == "Mercredi" || $val == "Mercredi")
			return ("Wednesday");
		else if ($val == "Jeudi"  || $val == "jeudi")
			return ("Thorsday");
		else if ($val == "Vendredi" || $val == "vendredi")
			return ("Friday");
		else if ($val == "Samedi" || $val == "samedi")
			return ("Saturday");
		else if ($val == "Dimanche" || $val == "dimanche")
			return ("Sunday");
	
	}


	if ($argc == 2)
	{
		date_default_timezone_set('Europe/Paris');
		$time = trim(preg_replace('/\s\s+/', ' ', $argv[1]));
		$time = explode(' ', $time);
		$day = get_day($time[0]);
		$daynbr = $time[1];
		$month = get_month($time[2]);
		$year = $time[3];
		$hour = $time[4];
		$time = strtotime("$daynbr $month $year $hour");

		if ("$day $daynbr $month $year $hour" == date('l d F Y h:i:s', $time))
		{
			echo $time ."\n";
			exit();
		}
		echo "Wrong Format\n";	
	}
	

?>