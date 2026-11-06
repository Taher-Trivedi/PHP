<?php
// 2.Function with Arguments and Return 
	function Area($l,$w) 
	{
		$area = $l * $w;
		return "A rectangle of length $l and width $w has an area of $area.";
	}

	$l = 100;
	$w = 1;

	$result = Area($l,$w);
	echo $result;
?>