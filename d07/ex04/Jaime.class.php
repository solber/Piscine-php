<?php

	class Jaime
	{
		public function sleepWith($val)
		{
			if ($val instanceof Tyrion)
				print("Not even if I'm drunk !" .PHP_EOL);
			else if ($val instanceof Sansa)
				print("Let's do this." .PHP_EOL);
			else if ($val instanceof Cersei)
				print("With pleasure, but only in a tower in Winterfell, then." .PHP_EOL);
		}	
	}

?>