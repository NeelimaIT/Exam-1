<!--ques::Suppose we have an array [-1,-50,30,20,100]. Calculate the sum of positive numbers.-->

<?php
$digit=array(-1,-50,30,20,100);

$total=0;
foreach($digit as $digit){
    if($digit>0){
        $total+=$digit;
    }
}
echo $total;
?>