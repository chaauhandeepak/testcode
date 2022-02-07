<?php
	/**
	 *Sorts arguments in ascending order using sortasc operation.Example: sortasc 1 4 3 2 result 1 2 3 4
	 */
	class Sortasc implements Output
	{

		function get($array)
		{
			sort($array);
			return implode(" ", $array);
		}
	}
?>
