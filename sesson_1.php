<?php
session_start();
$a=$_POST['us'];
$b=$_POST['pa'];
$_SESSION['user']=$a;
if($a=='YAS' && $b=='1234')
{
	header("Location:sesson_2.php");
}
else 
{
	echo "NOT LOGIN TRY AGAIN";
}


?>