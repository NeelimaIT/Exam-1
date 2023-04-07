<!--ques::Get the multiplications of all odd numbers from 1 - 100. .-->

<?php
for($num=1;$num<100;$num++){
    if($num%2!=0){
        for($i=1;$i<=10;$i++){
        echo "$num*$i=".$num*$i."<br>";
    }
}
}
?>