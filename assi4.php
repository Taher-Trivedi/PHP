<?php

// Enter marks of 5 subjects
$sub1 = 90;
$sub2 = 94;
$sub3 = 99;
$sub4 = 97;
$sub5 = 94;

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$percentage = $total / 5;

echo "Total Marks = " . $total . "<br>";
echo "Percentage = " . $percentage . "%<br>";

if ($percentage >= 33)
{
    if ($percentage >= 90)
    {
        echo "Grade = A"."<br><br>";
    }
    else
    {
        if ($percentage >= 70)
        {
            echo "Grade = B"."<br><br>";
        }
        else
        {
            echo "Grade = C"."<br><br>";
        }
    }
}
else
{
    echo "Fail... So No Grade"."<br><br>";
}


?>
