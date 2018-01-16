<?php

	class NightsWatch implements IFighter
	{
		private $_fight;

		public function recruit($val)
		{
			if (method_exists($val, 'fight'))
				$_fight = $rhs->fight() . PHP_EOL;
		}
		
		public function fight()
		{
			print($_fight);
		}
	}

?>