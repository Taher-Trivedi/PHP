<?php
function Area($l, $w) 
{
    $area = $l * $w;
    echo "A rectangle of length $l and width $w has an area of $area.";
}


$l = 10;
$w = 5;

Area($l,$w);
?>