<?php
$a=$_GET['v1'];
$b=$_GET['v2'];
$c=$_GET['v3'];
if($a>$b && $a>$c)
{
	echo "Number of Maxiumum is : $a";
}
elseif($b>$a && $b>$c)
{
	echo "Number of Maxiumum is : $b";
}
else
{
	echo "Number of Maxiumum is : $c";
}
echo "<br>";
echo "<br>";
if($a<$b && $a<$c)
{
	echo "Number of MInimum is : $a";
}
elseif($b<$a && $b<$c)
{
	echo "Number of Minimun is : $b";
}
else
{
	echo "Number of Minimun is : $c";
}
?>