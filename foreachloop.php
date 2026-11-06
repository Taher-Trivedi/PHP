<?php
	// NUMERIC ARRAY WITH FOREACH LOOP
	$T=array (12,34,55,66);
	foreach ($T as $A)
	{
		echo $A."<br>";
	}
	echo "<br>";
	// ASSOCIATIVE ARRAY WITH FOREACH LOOP
	$P=array ('JAYDEEP'=>'POLICE','AYUSH'=>'SHOPKEPER','MEHUL'=>'FARMER');
	foreach ($P as $N=>$S)
	{
		echo $N." : ".$S."<br>";
	}
?>