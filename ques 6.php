<!--Suppose we have a String of temperature of last 15 days. 
"30,29,34,25,30,28,29,25,38,40,25,26,28,25,28" . Get the average temperature of 15 days from the string.-->

<?php
$sum="30,29,34,25,30,28,29,25,38,40,25,26,28,25,28";
$value=explode(',', $sum);

$avg=(array_sum($value))/count($value);
echo $avg;

?>