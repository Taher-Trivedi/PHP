<?php
$con=mysqli_connect("localhost","root","","e1");
if ($con)
{
	echo "DATABASE Connenct.... "."<br>";
}
else 
{
	echo "DATABASE Failed.... ";
}
$sql="Select * from emp";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
$column=mysqli_num_fields($result);
echo "Table Has $row Row"."<br>";
echo "Table Has $column Column"."<br>";
while ($row=mysqli_fetch_array($result))
{
	echo "<br>".$row[0]." - ".$row[1]." - ".$row[2];
}
$seek="Select * from emp";
$results=mysqli_query($con,$seek);
mysqli_data_seek($results,2);
$rows=mysqli_fetch_row($results);
echo "<br>";
echo "<br>".$rows[0]." - ".$rows[1]." - ".$rows[2];
/*while ($row=mysqli_fetch_assoc($result))
{
	echo "<br>".$row["empid"]." - ".$row['enm']." - ".$row['city'];
}*/
mysqli_free_result($result);
mysqli_close($con);


?>