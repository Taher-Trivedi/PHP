<?php
// 1. Simple Function 
	$a=$_GET['v1'];
	$b=$_GET['v2'];
	function test($a,$b)
	{
			global $a,$b;
			echo "Sum is : ".$a+$b;
			echo "<br>";
			echo "Sub is : ".$a-$b;
			echo "<br>";
			echo "Mul is : ".$a*$b;
			echo "<br>";
			echo "Devide is : ".$a/$b;
	
	}
		if(isset ($_GET['sub']))
		{
			test($a,$b);
		}
?>