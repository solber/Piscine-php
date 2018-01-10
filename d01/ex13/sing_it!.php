#!/usr/bin/php
<?php

if ($argc == 2)
{
	if ($argv[1] == "mais pourquoi cette demo ?")
	{
		echo "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n";
		exit();
	}
	else if($argv[1] == "mais pourquoi cette chanson ?")
	{
		echo "Parce que Kwame a des enfants\n";
		exit();
	}
	else if($argv[1] == "Vraiment ?")
	{
		$rnd = rand(0, 1);
		if ($rnd == 1)
		{
			echo "Nan c'est parce que c'est le premier avril\n";
		}
		else
		{
			echo "Oui il a vraiment des enfants\n";
		}
		exit();
	}
}
?>