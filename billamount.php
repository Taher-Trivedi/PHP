<?php

	$T=900;
	if($T>2000)
	{
		echo "YOU GET DISCOUNT ON YOUR TOTAL %15...<br>";
	    $P=($T*15)/100;	
		$R=$T-$P;
		echo "YOUR DISCOUNT AMOUNT IS :".$P."<br>";
		echo "YOU TOTAL AMOUNT IS :".$R."<br>";
	}
	elseif($T>1000)
	{
		echo "YOU GET DISCOUNT ON YOUR TOTAL %10...<br>";
	    $P=($T*10)/100;	
		$R=$T-$P;
		echo "YOUR DISCOUNT AMOUNT IS :".$P."<br>";
		echo "YOU TOTAL AMOUNT IS :".$R."<br>";
	}
	elseif($T>500)
	{
		echo "YOU GET DISCOUNT ON YOUR TOTAL 5%...<br>";
	    $P=($T*5)/100;	
		$R=$T-$P;
		echo "YOUR DISCOUNT AMOUNT IS :".$P."<br>";
		echo "YOU TOTAL AMOUNT IS :".$R."<br>";
	}
	else 
	{
		echo "SORRY NO DISCOUNT AVAILABLE...<br>";
		echo "YOUR TOTAL BILL IS :".$T."<br>";
	}
?>