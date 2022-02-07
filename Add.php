<?php
	/**
 	 *Adds numeric arguments using add operation. Example: add 1 2 3 4 result:10
   */
	class Add implements Output
	{

		function get($array)
		{
			return array_sum($array);
		}
	}
?>
