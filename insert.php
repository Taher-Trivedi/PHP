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
$sql='insert into stud value(1,"TAHER","Gondal")';
if(mysqli_query($con,$sql))
{
	echo "<br>Insert Done...";
}
else 
{
	echo "Error :".mysqli_connect_error($con);
}

?>