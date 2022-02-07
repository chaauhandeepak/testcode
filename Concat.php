<?php
	/**
   *Concatenates arguments using concat operation. Example: concat 1 2 3 4 result: 1234
   */
	class Concat implements Output
	{

		function get($array = [], $concat = '')
		{
			return implode($concat, $array);
		}
	}
?>
