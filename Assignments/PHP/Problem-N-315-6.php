/*
    Problem Statement : 
        Write a program to check age of person using if loop. If age is
        greater than 18, then person is eligible for voting else the
        person is not eligible for voting.
*/

<?php
$age = (int)readline('Enter an integer: ');
if($age > 18)
{
    echo "Your eligible for vote";
}
else
{
    echo "Your not eligible for vote";
}
?>