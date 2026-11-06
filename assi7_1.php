<?php
$str=$_GET['st']; $r=$_GET['r1'];
switch($r)
{
	case 1:
		echo "<font face='Monotype Corsiva'>$str</font>";
		break;
	case 2:
		echo "<font face='Times New Roman'>$str</font>";
		break;
	case 3:
		echo "<font face='Jokerman'>$str</font>";
		break;
}

?>