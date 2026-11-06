<?php
function Vote() 
{
	$age=3;
    if ($age >= 18) 
	{
        echo "The person is eligible to vote.";
    } 
	else 
	{
        echo "The person is not eligible to vote.";
    }
}
Vote();
?>