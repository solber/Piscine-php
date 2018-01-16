<?php

	class Tyrion
	{
		public function sleepWith($val)
		{
			if ($val instanceof Jaime || $val instanceof Cersei)
				print("Not even if I'm drunk !" .PHP_EOL);
			else if ($val instanceof Sansa)
				print("Let's do this." .PHP_EOL);
		}
	}

?>