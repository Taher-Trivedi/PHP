<?php

$con=mysqli_connect('localhost','root','','taher');
if($con)
{
	echo "CONNECT...<br>";
}
else 
{
	echo "not connect...".mysqli_connect_error();
}
$sql='delete from stud';

if(mysqli_query($con,$sql))
{
	echo "<br>Delete Done...";
}
else 
{
	echo "Error :".mysqli_connect_error($con);
}

?>