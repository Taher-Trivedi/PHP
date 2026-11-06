
<?php
$a=$_GET['v1'];
$b=$_GET['v2'];
if(isset($_GET['sub1']))
{
	echo "Addition of $a and $b is :".$a+$b;
}
if(isset($_GET['sub2']))
{
	echo "Subtraction of $a and $b is :".$a-$b;
}
if(isset($_GET['sub3']))
{
	echo "Multipication of $a and $b is :".$a*$b;
}
if(isset($_GET['sub4']))
{
	echo "Division of $a and $b is :".$a/$b;
}
?>