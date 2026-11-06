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
$sql='update stud set roll=1 where roll=2';

if(mysqli_query($con,$sql))
{
	echo "<br>Update Done...";
}
else 
{
	echo "Error :".mysqli_connect_error($con);
}

?>